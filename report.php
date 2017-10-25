<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Enterprise solution for Pet Clinics">
    <meta name="author" content="Lovely Pets">
    <title>Lovely Pets</title>
    <link rel="icon" href="img/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php
include 'header.php';
?>
    <section id="pagetopper">
    <div class="container">
      <h1>Example Report Layout Page</h1>
      <h3>Reports for the evolving query requirements with appropriate filter, sorting and aggregation of the query data</h3>
    </div>
  </section>

    <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-yw4l{vertical-align:top}
th.tg-sort-header::-moz-selection { background:transparent; }th.tg-sort-header::selection      { background:transparent; }th.tg-sort-header { cursor:pointer; }table th.tg-sort-header:after {  content:'';  float:right;  margin-top:7px;  border-width:0 4px 4px;  border-style:solid;  border-color:#404040 transparent;  visibility:hidden;  }table th.tg-sort-header:hover:after {  visibility:visible;  }table th.tg-sort-desc:after,table th.tg-sort-asc:after,table th.tg-sort-asc:hover:after {  visibility:visible;  opacity:0.4;  }table th.tg-sort-desc:after {  border-bottom:none;  border-width:4px 4px 0;  }@media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}</style>
<div class="tg-wrap"><table id="tg-pXEvG" class="tg">
  <tr>
    <th class="tg-yw4l">Customer</th>
    <th class="tg-yw4l">Customer Description</th>
    <th class="tg-yw4l">Checkout Service</th>
    <th class="tg-yw4l">Visit Cost Total</th>
    <th class="tg-yw4l">Profit Total</th>
    <th class="tg-yw4l">Booking Number</th>
    <th class="tg-yw4l">Vet Surgeon</th>
    <th class="tg-yw4l">Billed Hours</th>
    <th class="tg-yw4l">Medication / Inventory Number</th>
  </tr>
  <tr>
    <td class="tg-yw4l">John Smith</td>
    <td class="tg-yw4l">Nil<br></td>
    <td class="tg-yw4l">Booked Checkup</td>
    <td class="tg-yw4l">$55</td>
    <td class="tg-yw4l">$55</td>
    <td class="tg-yw4l">#0000012503</td>
    <td class="tg-yw4l">Dr. Ken V.</td>
    <td class="tg-yw4l">0.5</td>
    <td class="tg-yw4l">Nil</td>
  </tr>
  <tr>
    <td class="tg-yw4l">Mary Paul</td>
    <td class="tg-yw4l">Limping Pet</td>
    <td class="tg-yw4l">X-Ray</td>
    <td class="tg-yw4l">$350</td>
    <td class="tg-yw4l">$325</td>
    <td class="tg-yw4l">#0000012504</td>
    <td class="tg-yw4l">Dr. Ken V.</td>
    <td class="tg-yw4l">1</td>
    <td class="tg-yw4l">#000000124</td>
  </tr>
  <tr>
    <td class="tg-yw4l">Ramaz Cameron</td>
    <td class="tg-yw4l">Bad Breath</td>
    <td class="tg-yw4l">Dental Checkup </td>
    <td class="tg-yw4l">$180</td>
    <td class="tg-yw4l">$150</td>
    <td class="tg-yw4l">#0000012505</td>
    <td class="tg-yw4l">Dr. Ken V.</td>
    <td class="tg-yw4l">2</td>
    <td class="tg-yw4l">#000000125</td>
  </tr>
  <tr>
    <td class="tg-yw4l">Álvaro Jaxon</td>
    <td class="tg-yw4l">Coughing</td>
    <td class="tg-yw4l">Heartworm treatment </td>
    <td class="tg-yw4l">$80</td>
    <td class="tg-yw4l">$80</td>
    <td class="tg-yw4l">#0000012506</td>
    <td class="tg-yw4l">Dr. Ken V.</td>
    <td class="tg-yw4l">2</td>
    <td class="tg-yw4l">#000000126</td>
  </tr>
  <tr>
    <td class="tg-yw4l">Altwidus Limbani</td>
    <td class="tg-yw4l">Lack Of Appetite</td>
    <td class="tg-yw4l">Blood Test and Urinalysis for Diabetes</td>
    <td class="tg-yw4l">$400</td>
    <td class="tg-yw4l">$300</td>
    <td class="tg-yw4l">#0000012507</td>
    <td class="tg-yw4l">Dr. Ken V.</td>
    <td class="tg-yw4l">4</td>
    <td class="tg-yw4l">Nil</td>
  </tr>
  <tr>
    <td class="tg-yw4l">Gervasius Otgonbayar</td>
    <td class="tg-yw4l">Found lump</td>
    <td class="tg-yw4l">Lump cut and sent for Biopsy</td>
    <td class="tg-yw4l">$400</td>
    <td class="tg-yw4l">$400</td>
    <td class="tg-yw4l">#0000012508</td>
    <td class="tg-yw4l">Dr. Ken V.</td>
    <td class="tg-yw4l">3</td>
    <td class="tg-yw4l">Nil</td>
  </tr>
  <tr>
    <td class="tg-yw4l">Amando Horea</td>
    <td class="tg-yw4l">Skin irritation, area is inflamed</td>
    <td class="tg-yw4l">Insect Bite - ointment pescribed</td>
    <td class="tg-yw4l">$100</td>
    <td class="tg-yw4l">$100</td>
    <td class="tg-yw4l">#0000012509</td>
    <td class="tg-yw4l">Dr. Ken V.</td>
    <td class="tg-yw4l">2</td>
    <td class="tg-yw4l">#000000127</td>
  </tr>
  <tr>
    <td class="tg-yw4l">Alun Přemek</td>
    <td class="tg-yw4l">Lethargic, slightly unresponsive</td>
    <td class="tg-yw4l">Arthritis - prescribed medication</td>
    <td class="tg-yw4l">$300</td>
    <td class="tg-yw4l">$300</td>
    <td class="tg-yw4l">#0000012510</td>
    <td class="tg-yw4l">Dr. Ken V.</td>
    <td class="tg-yw4l">3</td>
    <td class="tg-yw4l">#000000128</td>
  </tr>
  <tr>
    <td class="tg-yw4l">Wodan Basil</td>
    <td class="tg-yw4l">Vomiting Constantly</td>
    <td class="tg-yw4l">Check up, eating too fast</td>
    <td class="tg-yw4l">$55</td>
    <td class="tg-yw4l">$55</td>
    <td class="tg-yw4l">#0000012511</td>
    <td class="tg-yw4l">Dr. Ken V.</td>
    <td class="tg-yw4l">1</td>
    <td class="tg-yw4l">Nil</td>
  </tr>
</table></div>
<script type="text/javascript" charset="utf-8">var TgTableSort=window.TgTableSort||function(n,t){"use strict";function r(n,t){for(var e=[],o=n.childNodes,i=0;i<o.length;++i){var u=o[i];if("."==t.substring(0,1)){var a=t.substring(1);f(u,a)&&e.push(u)}else u.nodeName.toLowerCase()==t&&e.push(u);var c=r(u,t);e=e.concat(c)}return e}function e(n,t){var e=[],o=r(n,"tr");return o.forEach(function(n){var o=r(n,"td");t>=0&&t<o.length&&e.push(o[t])}),e}function o(n){return n.textContent||n.innerText||""}function i(n){return n.innerHTML||""}function u(n,t){var r=e(n,t);return r.map(o)}function a(n,t){var r=e(n,t);return r.map(i)}function c(n){var t=n.className||"";return t.match(/\S+/g)||[]}function f(n,t){return-1!=c(n).indexOf(t)}function s(n,t){f(n,t)||(n.className+=" "+t)}function d(n,t){if(f(n,t)){var r=c(n),e=r.indexOf(t);r.splice(e,1),n.className=r.join(" ")}}function v(n){d(n,L),d(n,E)}function l(n,t,e){r(n,"."+E).map(v),r(n,"."+L).map(v),e==T?s(t,E):s(t,L)}function g(n){return function(t,r){var e=n*t.str.localeCompare(r.str);return 0==e&&(e=t.index-r.index),e}}function h(n){return function(t,r){var e=+t.str,o=+r.str;return e==o?t.index-r.index:n*(e-o)}}function m(n,t,r){var e=u(n,t),o=e.map(function(n,t){return{str:n,index:t}}),i=e&&-1==e.map(isNaN).indexOf(!0),a=i?h(r):g(r);return o.sort(a),o.map(function(n){return n.index})}function p(n,t,r,o){for(var i=f(o,E)?N:T,u=m(n,r,i),c=0;t>c;++c){var s=e(n,c),d=a(n,c);s.forEach(function(n,t){n.innerHTML=d[u[t]]})}l(n,o,i)}function x(n,t){var r=t.length;t.forEach(function(t,e){t.addEventListener("click",function(){p(n,r,e,t)}),s(t,"tg-sort-header")})}var T=1,N=-1,E="tg-sort-asc",L="tg-sort-desc";return function(t){var e=n.getElementById(t),o=r(e,"tr"),i=o.length>0?r(o[0],"td"):[];0==i.length&&(i=r(o[0],"th"));for(var u=1;u<o.length;++u){var a=r(o[u],"td");if(a.length!=i.length)return}x(e,i)}}(document);document.addEventListener("DOMContentLoaded",function(n){TgTableSort("tg-pXEvG")});</script>
  <?php
  include 'footer.php';
  ?>
  </body>
</html>
