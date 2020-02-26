jQuery(document).ready(function() {

    jQuery('.detail-description__size-table__measure__cm').click(function(){
      jQuery('.detail-description__size-table__cm').css('display','table');
      jQuery('.detail-description__size-table__inc').css('display','none');
    })
    jQuery('.detail-description__size-table__measure__inc').click(function(){
      jQuery('.detail-description__size-table__cm').css('display','none');
      jQuery('.detail-description__size-table__inc').css('display','table');
    })


  });
  