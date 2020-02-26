jQuery(document).ready(function() {

    jQuery('.detail-description__size-table__measure__cm').click(function(){
      jQuery('.detail-description__size-table__cm').css('display','table');
      jQuery('.detail-description__size-table__inc').css('display','none');
      jQuery('.detail-description__size-table__measure__inc').css('box-shadow','2px 1000px #C8C8C8 inset');
      jQuery('.detail-description__size-table__measure__cm').css('box-shadow','2px 1000px #5C5C5C inset');
    })
    jQuery('.detail-description__size-table__measure__inc').click(function(){
      jQuery('.detail-description__size-table__cm').css('display','none');
      jQuery('.detail-description__size-table__inc').css('display','table');
      jQuery('.detail-description__size-table__measure__inc').css('box-shadow','2px 1000px #5C5C5C inset');
      jQuery('.detail-description__size-table__measure__cm').css('box-shadow','2px 1000px #C8C8C8 inset');
    })


  });
  