jQuery(document).ready(function($){
 $('<style>'+
 '.scrollTop{ display:none; z-index:9999; position:fixed;'+
 'bottom:15px; left:92%; width:60px; height:61px;'+
 'background:url(images/up_2.png) 0 0 no-repeat; }' +
 '.scrollTop:hover{ background-position:0 -62px;}'
 +'</style>').appendTo('body');
 var
 speed = 550,
 $scrollTop = $('<a href="#" class="scrollTop">').appendTo('body'); 
 $scrollTop.click(function(e){
 e.preventDefault();
 $( 'html:not(:animated),body:not(:animated)' ).animate({ scrollTop: 0}, speed );
 });
 
 //���������
 function show_scrollTop(){
 ( $(window).scrollTop() > 330 ) ? $scrollTop.fadeIn(700) : $scrollTop.fadeOut(700);
 }
 $(window).scroll( function(){ show_scrollTop(); } );
 show_scrollTop();
});