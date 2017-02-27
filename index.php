<?php
  /**
 * Autor: Rodrigo Chambi Q.
 * Mail:  filvovmax@gmail.com
 * web:   www.gitmedio.com
 * Paginador para PHP, HTML5
 */
?>
<!DOCTYPE html>
<html>
<head>
	<title>Paginacion en PHP</title>
	<style type="text/css">
            .active > a{
	   	       background: #2ecc71;
                   color:white;
      	   }
      	ul{
      	  	margin-left: 0px;
      	  	padding: 0px;
      	  } 
            ul > li{
            	list-style: none;
            	display: inline-block;
            	margin-right:7px;
            }
            ul > li > a {
            	color: black;
            	text-decoration: none;
            	padding: 8px 13px 8px 13px;
              display: block;
      		/*background: #1e5799; /* Old browsers */
      		border-radius: 20px;
            }
            .btn > a{
            	padding: 2px;
                  color: black;
      		border-radius: 2px;
      		text-align: center;
      		width:30px;
            }
	</style>
      <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <style type="text/css">
            body {
              background-color: #e8e8e8;
              font-family: 'century gothic';
            }

            * {
              box-sizing: border-box;
            }

            .clearfix {
              content: '';
              display: table;
              clear: both;
            }

            .container {
              width: 100%;
              max-width: 1180px;
              margin: 0 auto;
              padding: 3em 1em;
            }

            .download-cards {
              width: 100%;
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              -ms-flex-wrap: wrap;
                  flex-wrap: wrap;
            }

            .download-card {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              -webkit-box-orient: vertical;
              -webkit-box-direction: normal;
                  -ms-flex-direction: column;
                      flex-direction: column;
              width: calc(100% - 2em);
              background: #fbfbfb;
              position: relative;
              border-radius: 4px;
              overflow: hidden;
              margin-bottom: 2em;
              box-shadow: 0 1px 25px rgba(0, 0, 0, 0.05), 0 2px 4px rgba(0, 0, 0, 0.06);
              border-bottom: 1px solid #d2d2d2;
              border-left: 1px solid #dadada;
              margin: 0 1em 2em 1em;
            }
            @media (min-width: 700px) {
              .download-cards[data-view='grid-view'] .download-card {
                float: left;
                width: calc( 50% - 2em );
              }
              .download-cards[data-view='grid-view'] .download-card:nth-child(3) {
                clear: both;
              }
              .download-cards[data-view='grid-view'] .download-card:nth-child(4) {
                clear: initial;
              }
            }
            @media (min-width: 1000px) {
              .download-cards[data-view='grid-view'] .download-card {
                width: calc( (100% / 3) - 2em );
              }
              .download-cards[data-view='grid-view'] .download-card:nth-child(3) {
                clear: initial;
              }
              .download-cards[data-view='grid-view'] .download-card:nth-child(4) {
                clear: both;
              }
            }
            .download-card__icon-box {
              display: -webkit-box;
              display: -ms-flexbox;
              display: flex;
              -webkit-box-align: center;
                  -ms-flex-align: center;
                      align-items: center;
              background: #f1f1f1;
              padding: 2em;
              text-align: center;
            }
            @media (min-width: 700px) {
              .download-card__icon-box {
                -webkit-box-pack: center;
                    -ms-flex-pack: center;
                        justify-content: center;
              }
            }
            .download-card__icon-box img {
              width: 100%;
              max-width: 300px;
              margin: 0 auto;
            }
            @media (min-width: 700px) {
              .download-cards[data-view='list-view'] .download-card__icon-box {
                width: 200px;
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                border-right: 1px solid #e6e6e6;
              }
            }
            .download-card__content-box {
              padding: 2em 2em 3em;
              -webkit-box-flex: 1;
                  -ms-flex: 1;
                      flex: 1;
            }
            @media (min-width: 700px) {
              .download-cards[data-view="list-view"] .download-card__content-box {
                padding-left: calc(200px + 2em);
              }
            }
            .download-card__content-box__catagory {
              text-transform: uppercase;
              letter-spacing: 2px;
              font-size: 10px;
              margin: 0 0 2em;
            }
            .download-card__content-box__catagory::before {
              content: '| ';
              color: #ff4500;
            }
            .download-card__content-box__title {
              line-height: 1;
              margin: 0 0 .5em;
              font-size: 18px;
            }
            .download-card__content-box__description {
              line-height: 1.5;
              padding: 0;
              margin: 0 0 1em;
              clear: both;
              color: #929292;
              font-size: 16px;
            }
            .download-card__content-box .button {
              position: absolute;
              bottom: 2em;
              margin: 0;
              color: #ff4500;
              display: inline-block;
              text-transform: uppercase;
              letter-spacing: 1px;
              font-weight: bold;
              font-size: 13px;
            }

            .dc-view-switcher {
              display: none;
              margin: 1em;
              text-align: right;
            }
            @media (min-width: 700px) {
              .dc-view-switcher {
                display: block;
              }
            }
            .dc-view-switcher > button {
              font-family: 'fontAwesome';
              background-color: transparent;
              background-repeat: no-repeat;
              background-position: 0px 0px;
              border: none;
              cursor: pointer;
              font-size: 1.5em;
              vertical-align: middle;
              color: gray;
              opacity: 0.3;
              outline: none;
              -webkit-transition: opacity .4s ease;
              transition: opacity .4s ease;
            }
            .dc-view-switcher > button[data-trigger="list-view"]::before {
              content: "\f00b";
            }
            .dc-view-switcher > button[data-trigger="grid-view"]::before {
              content: "\f009";
            }
            .dc-view-switcher > button[data-trigger].active {
              opacity: 1;
            }
      </style>

</head>
<body>
<div class="container">
  <div class="dc-view-switcher">
    <button data-trigger="grid-view"></button>
    <button data-trigger="list-view" class="active"></button>
  </div>
  <div data-view="list-view" class="download-cards">
      <?php 
            require_once 'paginador.php';
       ?>
  <!--/div-->
</div>

</body>
</html>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script type="text/javascript">
      var downloadGrid = (function(){
        
        "use strict";
        
        var $cardContainer = $('.download-cards');
        var $downloadCard  = $('.download-card__content-box');
        var $viewTrigger   = $('button').attr('data', 'trigger');

        function swapTriggerActiveClass(e) {   
          $viewTrigger.removeClass('active');
          $(e.target).addClass('active');
        }

        function swapView(e) {
          var $currentView = $(e.target).attr('data-trigger');
          $cardContainer.attr('data-view', $currentView);
        }

        $(document).ready(function(){
          // Event Listener
          $viewTrigger.click(function(e){
            swapTriggerActiveClass(e);
            swapView(e);        
          });  
        });
        
      })();
</script>