(function($, window) {
  $(function() {
    // この中に処理を書きます

    // $('#index').find('li').each(function() {
    //   // ループ内の処理
    //   alert($(this).text());
    // });
    $('h2').empty();
    $('#index').text();
    // $('#index').html();
    $('#index').append('<li>メソッド</li>');
    // $('#index').find('li').each(function() {
    // alert($(this).text().length);
    //  });
     $('#index').find('li').each(function() {
     $(this).append($(this).text().length);
      });


  });
})(jQuery, window);
