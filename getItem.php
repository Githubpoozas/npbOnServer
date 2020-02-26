<?php

// check name of image file in directory
function startsWith ($string, $startString) 
{ 
    $len = strlen($startString); 
    return (substr($string, 0, $len) === $startString); 
} 
// scan and get image from directory
function getImg($dir,$neededImg,$imgClass){
  $files = scandir($dir);

  foreach($files as $img){
    if(startsWith($img,$neededImg) && (strpos($img,'.jpg')|| strpos($img,'.jpeg')|| strpos($img,'.png') || strpos($img,'.gif') || strpos($img,'.svg'))){
      echo '<img src="'.$dir.$img.'"alt="'.$img.'" class="'.$imgClass.'">';
    }
  }
}

// get Gallery top and thumb
function getGallery($dir){

    echo
    '
    <div class="swiper-container gallery-thumbs detail-thumb">
              <div class="swiper-wrapper detail-thumb__wrapper">';
              $csv = fopen($dir.'Book1.csv','r');
                while (($data = fgetcsv($csv)) !== FALSE) {
                  $data = str_replace("\xEF\xBB\xBF",'',$data); 
                  if($data[8] === 'break'){
                  break;
                  } else{
                  echo '<div class="swiper-slide detail-thumb__slide">';
                    getImg($dir,$data[8],'detail-thumb__img');
                  }
                  echo '</div>';
                }
    
        echo '
        </div>
        </div>
    
        <div class="swiper-container gallery-top detail-top">
          <div class="swiper-wrapper detail-top__wrapper">';
    $csv = fopen($dir.'Book1.csv','r');
                while (($data = fgetcsv($csv)) !== FALSE) {
                  $data = str_replace("\xEF\xBB\xBF",'',$data); 
    
                  if($data[8] === 'break'){
                  break;
                  } else{
                echo '<div class="swiper-slide detail-top__slide">';
                    getImg($dir,$data[8],'detail-top__img');
                  }
                 echo '</div>';
                }
                echo  '</div>
                </div>';

                fclose($csv);
}



function getDescription($dir){
   echo '<div class="detail-description__text">';
    $csv = fopen($dir.'Book1.csv','r');
    while (($data = fgetcsv($csv)) !== FALSE) {
      $data = str_replace("\xEF\xBB\xBF",'',$data); 
      if($data[9] === 'break'){
      break;
      } else{
        echo '<h2 class="heading-primary">'.$data[9].'</h2>';
      }
    }

    $csv = fopen($dir.'Book1.csv','r');
    while (($data = fgetcsv($csv)) !== FALSE) {
      $data = str_replace("\xEF\xBB\xBF",'',$data); 

      if($data[10] === 'break'){
      break;
      } else{
        echo '<p>'.$data[10].'</p>';
      }
    }
  echo '</div>';
  fclose($csv);

}

function getSizeTable($dir){
    echo '<div class="detail-description__size-table u-margin-bottom-small">
    <div class="detail-description__size-table__measure">
      <button class="btn--gray detail-description__size-table__measure__cm">CM</button>
      <button class="btn--gray btn--gray-light detail-description__size-table__measure__inc">INC</button>
    </div>
    <table class="detail-description__size-table__cm">
      <tr>
        <th>ไซส์<br />Size</th>
        <th>รอบอก<br />Chest</th>
        <th>ความยาว<br />Length</th>
        <th>ราคา<br />Price</th>
      </tr>

     <tr>';

    $csv = fopen($dir.'Book1.csv','r');
    while (($data = fgetcsv($csv)) !== FALSE) {
      $data = str_replace("\xEF\xBB\xBF",'',$data); 
      if($data[11] === 'break'){
        echo '</tr>';
      break;
      } else if($data[11] === 'newrow') {
        echo '</tr>';
      }
      else{
        echo '<td>'.$data[11].'</td>';
      }
    }
echo '</table>
    <table class="detail-description__size-table__inc">
      <tr>
        <th>ไซส์<br />Size</th>
        <th>รอบอก<br />Chest</th>
        <th>ความยาว<br />Length</th>
        <th>ราคา<br />Price</th>
      </tr>
      <tr>';

    $csv = fopen($dir.'Book1.csv','r');
    while (($data = fgetcsv($csv)) !== FALSE) {
      $data = str_replace("\xEF\xBB\xBF",'',$data); 
      if($data[12] === 'break'){
        echo '</tr>';
      break;
      } else if($data[12] === 'newrow') {
        echo '</tr>';
      }
      else{
        echo '<td>'.$data[12].'</td>';
      }
    }
echo '
    </table>
  </div>';
  fclose($csv);
}

function getDescription2($dir){
  echo '<div class="detail-description__text">';
    $csv = fopen($dir.'Book1.csv','r');
    while (($data = fgetcsv($csv)) !== FALSE) {
      $data = str_replace("\xEF\xBB\xBF",'',$data); 
      if($data[13] === 'break'){
      break;
      } else{
        echo '<p>'.$data[13].'</p>';
      }
    }
  echo '</div>';
  fclose($csv);
}

function  getItemPick($dir){

  echo '<div class="item__pick">';
  $csv = fopen($dir.'Book1.csv','r');
  while (($data = fgetcsv($csv)) !== FALSE) {
    $data = str_replace("\xEF\xBB\xBF",'',$data); 
    if($data[0] === 'break'){
    break;
    } else{
      
      echo ' <div class="item__pick-display '.$data[0].'">';
      echo '<div class="item__pick-display-front">';
      getImg($dir,$data[0],'item__pick-display-front__img');
      echo '</div>
      <div class="item__pick-display-back">';
      getImg($dir,$data[1],'item__pick-display-back__img');
      echo '</div></div>';

    }
  }
echo '</div>';
fclose($csv);
}

function  getItemColorPicker($dir){

  echo '<div class="item__color">';
  $csv = fopen($dir.'Book1.csv','r');
  while (($data = fgetcsv($csv)) !== FALSE) {
    $data = str_replace("\xEF\xBB\xBF",'',$data); 
    if($data[0] === 'break'){
    break;
    } else{
      
      echo ' <div class="item__color-picker '.$data[0].'">';
      getImg($dir,$data[0],'item__color-picker__img');
      echo '</div>';

    }
  }
echo '</div>';
fclose($csv);
}

function getItemSection($dir,$gender,$otherURL){
$fileName = $dir.'Book1.csv';
if ( file_exists($fileName) && ($fp = fopen($fileName, "rb"))!==false ) {

  echo '<section class="item__section-detail underNav">';
  getGallery($dir);
echo '   <div class="detail-description">
<div class="detail-description__gender u-margin-bottom-small">';

if($gender === 'unisex'){
  echo '<a class="gender-btn"><button class="btn--gray detail-description__gender-btn">UNISEX</button></a>';
} else if($gender === 'men') {
  echo "<a class='gender-btn'><button class='btn--gray detail-description__gender-btn'>MEN</button></a>";
  echo "<a class='gender-btn' href='".$otherURL."'><button class='btn--gray btn--gray-light detail-description__gender-btn'>WOMEN</button></a>";
} else if($gender === 'women') {
  echo "<a class='gender-btn' href='".$otherURL."'><button class='btn--gray btn--gray-light  detail-description__gender-btn'>MEN</button></a>";
  echo "<a class='gender-btn'><button class='btn--gray detail-description__gender-btn'>WOMEN</button></a>";
} 

echo '</div>';
getDescription($dir);
getSizeTable($dir);
getDescription2($dir);
echo '<div class="shareToSocial">
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script
  type="text/javascript"
  src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5dd9066e57521b07"
></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_inline_share_toolbox"></div>
</div>
</div>
</section>
<section class="item__section-color u-margin-bottom-medium">';
getItemPick($dir);
getItemColorPicker($dir);
}
  else
  {
    echo 'error from getItemSection() function<br>file: "'.$fileName.'" does not exist<br>';
  }

echo '</section>';
}




function getProductSection($dir,$seemore){
  $fileName = $dir.'Book1.csv';
  if ( file_exists($fileName) && ($fp = fopen($fileName, "rb"))!==false ) {
  
    $csv = fopen($dir.'Book1.csv','r');

    echo '<section class="section-product u-margin-bottom-medium" id="tshirt">
    <div class="container header section-product__header">
      <div class="row">
        <div class="col-sm-12 col-md-12">';
  
          while(($data = fgetcsv($csv)) !== FALSE){
            $data = str_replace("\xEF\xBB\xBF",'',$data); 
  
            if($data[6] === 'break'){
            break;
            } else{
             echo '<h2 class="heading-primary ">'.$data[6].'</h2>
              <h3 lang="th" class="heading-secondary">'.$data[7].'</h3>';
            }
          }
  echo '
        </div>
      </div>
    </div>
    <div class="swiper-container swiper-container__slide3">
    <div class="swiper-wrapper swiper-wrapper__slide3">';
  
    $csv = fopen($dir.'Book1.csv','r');
    while (($data = fgetcsv($csv)) !== FALSE) {
      $data = str_replace("\xEF\xBB\xBF",'',$data); 
  
      if($data[0] === 'break'){
      break;
      } else{
        echo '<div class="swiper-slide swiper-slide__slide3">
        <a href="'.$data[5].'">
        <div class="cloth">';
        getImg($dir,$data[0],'cloth__img');
        getImg($dir,$data[1],'cloth__img');
        echo '</div>
        <div class="cloth__price">
        <h2 class="cloth__price-header">'.$data[2].'</h2>
        <p class="cloth__price-description">'.$data[3].'</p>
        <p class="cloth__price-tag">'.$data[4].'</p>';
        echo '
        </div>
        </a>
        </div>';
      }
    }
  echo '</div>
  <div class="swiper-button-next swiper-slide__slide3__button-right"></div>
  <div class="swiper-button-prev swiper-slide__slide3__button-left"></div>';
  
    if($seemore == 'seemore'){
      echo '<div class="seemore">
      <div class="seemore__more">
        <p class="seemore__text-more">สินค้าทั้งหมด</p>
        <i class="seemore__icon-more fas fa-chevron-down"></i>
      </div>
      <div class="seemore__less">
        <p class="seemore__text-more">แสดงน้อยลง</p>
        <i class="seemore__icon-more fas fa-chevron-up"></i>
      </div>
    </div>';
    }

echo '
  </div>
  </section>';
  }
    else
    {
   
      echo 'error from getProductSection() function<br>file: "'.$fileName.'" does not exist<br>';
    }

fclose($csv);
}

function getProject($dir,$primary,$secondary){
  $fileName = $dir.'Book1.csv';
  if ( file_exists($fileName) && ($fp = fopen($fileName, "rb"))!==false ) {
    $csv = fopen($dir.'Book1.csv','r');

    echo '<section class="home__section-project u-margin-bottom-small">
    <div class="container header">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <h2 class="heading-primary ">'.$primary.'</h2>
        <h3 lang="th" class="heading-secondary">'.$secondary.'</h3>
      </div>
    </div>
  </div>
  <div class="swiper-container swiper-container__slide2">
  <div class="swiper-wrapper swiper-wrapper__slide2">
    ';

    while (($data = fgetcsv($csv)) !== FALSE) {
      $data = str_replace("\xEF\xBB\xBF",'',$data); 
      if($data[0] === 'break'){
      break;
      } else{
      echo '<div class="swiper-slide swiper-slide__slide2">';
        getImg($dir,$data[0],'swiper-slide__slide2__img');
      }
      echo '</div>';
    }

    echo '
    </div>
    <div class="swiper-button-next swiper-slide__slide2__button-right"></div>
    <div class="swiper-button-prev swiper-slide__slide2__button-left"></div>
  </div>
    </section>';
  }
    else
    {
   
      echo 'error from getProject() function<br>file: "'.$fileName.'" does not exist<br>';
    }

fclose($csv);
}
?>