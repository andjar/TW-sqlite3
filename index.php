
<!doctype html>
<!-- The following comment is called a MOTW comment and is necessary for the TiddlyIE Internet Explorer extension -->
<!-- saved from url=(0021)https://tiddlywiki.com -->
<html lang="en-GB">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<!--~~ Raw markup for the top of the head section ~~-->

<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
<meta name="application-name" content="TiddlyWiki" />
<meta name="generator" content="TiddlyWiki" />
<meta name="tiddlywiki-version" content="5.1.23" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<meta name="mobile-web-app-capable" content="yes"/>
<meta name="format-detection" content="telephone=no" />
<meta name="copyright" content="TiddlyWiki created by Jeremy Ruston, (jeremy [at] jermolene [dot] com)

Copyright (c) 2004-2007, Jeremy Ruston
Copyright (c) 2007-2020, UnaMesa Association
All rights reserved.

Redistribution and use in source and binary forms, with or without
modification, are permitted provided that the following conditions are met:

* Redistributions of source code must retain the above copyright notice, this
  list of conditions and the following disclaimer.

* Redistributions in binary form must reproduce the above copyright notice,
  this list of conditions and the following disclaimer in the documentation
  and/or other materials provided with the distribution.

* Neither the name of the copyright holder nor the names of its
  contributors may be used to endorse or promote products derived from
  this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS 'AS IS'
AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE
FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE." />
<link id="faviconLink" rel="shortcut icon" href="favicon.ico">
<title>My TiddlyWiki ??? a non-linear personal web notebook</title>
<!--~~ This is a Tiddlywiki file. The points of interest in the file are marked with this pattern ~~-->

<!--~~ Raw markup ~~-->



</head>
<body class="tc-body">
<!--~~ Raw markup for the top of the body section ~~-->

<!--~~ Static styles ~~-->
<div id="styleArea">
<style data-tiddler-title="$:/boot/boot.css" data-tiddler-type="text/css" type="text/css">/*
Basic styles used before we boot up the parsing engine
*/

/*
Error message and password prompt
*/

.tc-error-form {
	font-family: sans-serif;
	color: #fff;
	z-index: 20000;
	position: fixed;
	background-color: rgb(255, 75, 75);
	border: 8px solid rgb(255, 0, 0);
	border-radius: 8px;
	width: 50%;
	margin-left: 25%;
	margin-top: 4em;
	padding: 0 2em 1em 2em;
}

.tc-error-form h1 {
	text-align: center;
}

.tc-error-prompt {
	text-align: center;
	color: #000;
}

.tc-error-message {
	overflow: auto;
	max-height: 40em;
	padding-right: 1em;
	margin: 1em 0;
	white-space: pre-line;
}

.tc-password-wrapper {
    font-family: sans-serif;
	z-index: 20000;
	position: fixed;
	text-align: center;
	width: 200px;
	top: 4em;
	left: 50%;
	margin-left: -144px; /* - width/2 - paddingHorz/2 - border */
	padding: 16px 16px 16px 16px;
	border-radius: 8px;
}

.tc-password-wrapper {
	color: #000;
	text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
	background-color: rgb(197, 235, 183);
	border: 8px solid rgb(164, 197, 152);
}

.tc-password-wrapper form {
	text-align: left;
}

.tc-password-wrapper h1 {
	font-size: 16px;
	line-height: 20px;
	padding-bottom: 16px;
}

.tc-password-wrapper input {
	width: 100%;
}
</style>
</div>
<!--~~ Static content for Google and browsers without JavaScript ~~-->
<noscript>
<div id="splashArea">


<p>This <a class="tc-tiddlylink-external" href="https://tiddlywiki.com" rel="noopener noreferrer" target="_blank">TiddlyWiki</a> contains the following tiddlers:</p><p><ul>

<li>$:/core</li>

<li>$:/isEncrypted</li>

<li>$:/status/RequireReloadDueToPluginChange</li>

<li>$:/StoryList</li>

<li>$:/themes/tiddlywiki/snowwhite</li>

<li>$:/themes/tiddlywiki/vanilla</li>

<li>Hei p?? deg</li>

</ul>
</p>



<style>
.tc-remove-when-wiki-loaded {display: none;}
</style>

</div>
</noscript>
<!--~~ Ordinary tiddlers ~~-->

<div id="storeArea" style="display:none;">

<?php include "./tiddlers.php"; ?>

</div>


<!--~~ Library modules ~~-->
<div id="libraryModules" style="display:none;">
<script data-tiddler-library="yes" data-tiddler-title="$:/library/sjcl.js" data-tiddler-type="application/javascript" type="text/javascript">"use strict";var sjcl={cipher:{},hash:{},keyexchange:{},mode:{},misc:{},codec:{},exception:{corrupt:function(a){this.toString=function(){return"CORRUPT: "+this.message};this.message=a},invalid:function(a){this.toString=function(){return"INVALID: "+this.message};this.message=a},bug:function(a){this.toString=function(){return"BUG: "+this.message};this.message=a},notReady:function(a){this.toString=function(){return"NOT READY: "+this.message};this.message=a}}};
sjcl.cipher.aes=function(a){this.s[0][0][0]||this.O();var b,c,d,e,f=this.s[0][4],g=this.s[1];b=a.length;var h=1;if(4!==b&&6!==b&&8!==b)throw new sjcl.exception.invalid("invalid aes key size");this.b=[d=a.slice(0),e=[]];for(a=b;a<4*b+28;a++){c=d[a-1];if(0===a%b||8===b&&4===a%b)c=f[c>>>24]<<24^f[c>>16&255]<<16^f[c>>8&255]<<8^f[c&255],0===a%b&&(c=c<<8^c>>>24^h<<24,h=h<<1^283*(h>>7));d[a]=d[a-b]^c}for(b=0;a;b++,a--)c=d[b&3?a:a-4],e[b]=4>=a||4>b?c:g[0][f[c>>>24]]^g[1][f[c>>16&255]]^g[2][f[c>>8&255]]^g[3][f[c&
255]]};
sjcl.cipher.aes.prototype={encrypt:function(a){return t(this,a,0)},decrypt:function(a){return t(this,a,1)},s:[[[],[],[],[],[]],[[],[],[],[],[]]],O:function(){var a=this.s[0],b=this.s[1],c=a[4],d=b[4],e,f,g,h=[],k=[],l,n,m,p;for(e=0;0x100>e;e++)k[(h[e]=e<<1^283*(e>>7))^e]=e;for(f=g=0;!c[f];f^=l||1,g=k[g]||1)for(m=g^g<<1^g<<2^g<<3^g<<4,m=m>>8^m&255^99,c[f]=m,d[m]=f,n=h[e=h[l=h[f]]],p=0x1010101*n^0x10001*e^0x101*l^0x1010100*f,n=0x101*h[m]^0x1010100*m,e=0;4>e;e++)a[e][f]=n=n<<24^n>>>8,b[e][m]=p=p<<24^p>>>8;for(e=
0;5>e;e++)a[e]=a[e].slice(0),b[e]=b[e].slice(0)}};
function t(a,b,c){if(4!==b.length)throw new sjcl.exception.invalid("invalid aes block size");var d=a.b[c],e=b[0]^d[0],f=b[c?3:1]^d[1],g=b[2]^d[2];b=b[c?1:3]^d[3];var h,k,l,n=d.length/4-2,m,p=4,r=[0,0,0,0];h=a.s[c];a=h[0];var q=h[1],v=h[2],w=h[3],x=h[4];for(m=0;m<n;m++)h=a[e>>>24]^q[f>>16&255]^v[g>>8&255]^w[b&255]^d[p],k=a[f>>>24]^q[g>>16&255]^v[b>>8&255]^w[e&255]^d[p+1],l=a[g>>>24]^q[b>>16&255]^v[e>>8&255]^w[f&255]^d[p+2],b=a[b>>>24]^q[e>>16&255]^v[f>>8&255]^w[g&255]^d[p+3],p+=4,e=h,f=k,g=l;for(m=
0;4>m;m++)r[c?3&-m:m]=x[e>>>24]<<24^x[f>>16&255]<<16^x[g>>8&255]<<8^x[b&255]^d[p++],h=e,e=f,f=g,g=b,b=h;return r}
sjcl.bitArray={bitSlice:function(a,b,c){a=sjcl.bitArray.$(a.slice(b/32),32-(b&31)).slice(1);return void 0===c?a:sjcl.bitArray.clamp(a,c-b)},extract:function(a,b,c){var d=Math.floor(-b-c&31);return((b+c-1^b)&-32?a[b/32|0]<<32-d^a[b/32+1|0]>>>d:a[b/32|0]>>>d)&(1<<c)-1},concat:function(a,b){if(0===a.length||0===b.length)return a.concat(b);var c=a[a.length-1],d=sjcl.bitArray.getPartial(c);return 32===d?a.concat(b):sjcl.bitArray.$(b,d,c|0,a.slice(0,a.length-1))},bitLength:function(a){var b=a.length;return 0===
b?0:32*(b-1)+sjcl.bitArray.getPartial(a[b-1])},clamp:function(a,b){if(32*a.length<b)return a;a=a.slice(0,Math.ceil(b/32));var c=a.length;b=b&31;0<c&&b&&(a[c-1]=sjcl.bitArray.partial(b,a[c-1]&2147483648>>b-1,1));return a},partial:function(a,b,c){return 32===a?b:(c?b|0:b<<32-a)+0x10000000000*a},getPartial:function(a){return Math.round(a/0x10000000000)||32},equal:function(a,b){if(sjcl.bitArray.bitLength(a)!==sjcl.bitArray.bitLength(b))return!1;var c=0,d;for(d=0;d<a.length;d++)c|=a[d]^b[d];return 0===
c},$:function(a,b,c,d){var e;e=0;for(void 0===d&&(d=[]);32<=b;b-=32)d.push(c),c=0;if(0===b)return d.concat(a);for(e=0;e<a.length;e++)d.push(c|a[e]>>>b),c=a[e]<<32-b;e=a.length?a[a.length-1]:0;a=sjcl.bitArray.getPartial(e);d.push(sjcl.bitArray.partial(b+a&31,32<b+a?c:d.pop(),1));return d},i:function(a,b){return[a[0]^b[0],a[1]^b[1],a[2]^b[2],a[3]^b[3]]},byteswapM:function(a){var b,c;for(b=0;b<a.length;++b)c=a[b],a[b]=c>>>24|c>>>8&0xff00|(c&0xff00)<<8|c<<24;return a}};
sjcl.codec.utf8String={fromBits:function(a){var b="",c=sjcl.bitArray.bitLength(a),d,e;for(d=0;d<c/8;d++)0===(d&3)&&(e=a[d/4]),b+=String.fromCharCode(e>>>8>>>8>>>8),e<<=8;return decodeURIComponent(escape(b))},toBits:function(a){a=unescape(encodeURIComponent(a));var b=[],c,d=0;for(c=0;c<a.length;c++)d=d<<8|a.charCodeAt(c),3===(c&3)&&(b.push(d),d=0);c&3&&b.push(sjcl.bitArray.partial(8*(c&3),d));return b}};
sjcl.codec.hex={fromBits:function(a){var b="",c;for(c=0;c<a.length;c++)b+=((a[c]|0)+0xf00000000000).toString(16).substr(4);return b.substr(0,sjcl.bitArray.bitLength(a)/4)},toBits:function(a){var b,c=[],d;a=a.replace(/\s|0x/g,"");d=a.length;a=a+"00000000";for(b=0;b<a.length;b+=8)c.push(parseInt(a.substr(b,8),16)^0);return sjcl.bitArray.clamp(c,4*d)}};
sjcl.codec.base32={B:"ABCDEFGHIJKLMNOPQRSTUVWXYZ234567",X:"0123456789ABCDEFGHIJKLMNOPQRSTUV",BITS:32,BASE:5,REMAINING:27,fromBits:function(a,b,c){var d=sjcl.codec.base32.BASE,e=sjcl.codec.base32.REMAINING,f="",g=0,h=sjcl.codec.base32.B,k=0,l=sjcl.bitArray.bitLength(a);c&&(h=sjcl.codec.base32.X);for(c=0;f.length*d<l;)f+=h.charAt((k^a[c]>>>g)>>>e),g<d?(k=a[c]<<d-g,g+=e,c++):(k<<=d,g-=d);for(;f.length&7&&!b;)f+="=";return f},toBits:function(a,b){a=a.replace(/\s|=/g,"").toUpperCase();var c=sjcl.codec.base32.BITS,
d=sjcl.codec.base32.BASE,e=sjcl.codec.base32.REMAINING,f=[],g,h=0,k=sjcl.codec.base32.B,l=0,n,m="base32";b&&(k=sjcl.codec.base32.X,m="base32hex");for(g=0;g<a.length;g++){n=k.indexOf(a.charAt(g));if(0>n){if(!b)try{return sjcl.codec.base32hex.toBits(a)}catch(p){}throw new sjcl.exception.invalid("this isn't "+m+"!");}h>e?(h-=e,f.push(l^n>>>h),l=n<<c-h):(h+=d,l^=n<<c-h)}h&56&&f.push(sjcl.bitArray.partial(h&56,l,1));return f}};
sjcl.codec.base32hex={fromBits:function(a,b){return sjcl.codec.base32.fromBits(a,b,1)},toBits:function(a){return sjcl.codec.base32.toBits(a,1)}};
sjcl.codec.base64={B:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/",fromBits:function(a,b,c){var d="",e=0,f=sjcl.codec.base64.B,g=0,h=sjcl.bitArray.bitLength(a);c&&(f=f.substr(0,62)+"-_");for(c=0;6*d.length<h;)d+=f.charAt((g^a[c]>>>e)>>>26),6>e?(g=a[c]<<6-e,e+=26,c++):(g<<=6,e-=6);for(;d.length&3&&!b;)d+="=";return d},toBits:function(a,b){a=a.replace(/\s|=/g,"");var c=[],d,e=0,f=sjcl.codec.base64.B,g=0,h;b&&(f=f.substr(0,62)+"-_");for(d=0;d<a.length;d++){h=f.indexOf(a.charAt(d));
if(0>h)throw new sjcl.exception.invalid("this isn't base64!");26<e?(e-=26,c.push(g^h>>>e),g=h<<32-e):(e+=6,g^=h<<32-e)}e&56&&c.push(sjcl.bitArray.partial(e&56,g,1));return c}};sjcl.codec.base64url={fromBits:function(a){return sjcl.codec.base64.fromBits(a,1,1)},toBits:function(a){return sjcl.codec.base64.toBits(a,1)}};sjcl.hash.sha256=function(a){this.b[0]||this.O();a?(this.F=a.F.slice(0),this.A=a.A.slice(0),this.l=a.l):this.reset()};sjcl.hash.sha256.hash=function(a){return(new sjcl.hash.sha256).update(a).finalize()};
sjcl.hash.sha256.prototype={blockSize:512,reset:function(){this.F=this.Y.slice(0);this.A=[];this.l=0;return this},update:function(a){"string"===typeof a&&(a=sjcl.codec.utf8String.toBits(a));var b,c=this.A=sjcl.bitArray.concat(this.A,a);b=this.l;a=this.l=b+sjcl.bitArray.bitLength(a);if(0x1fffffffffffff<a)throw new sjcl.exception.invalid("Cannot hash more than 2^53 - 1 bits");if("undefined"!==typeof Uint32Array){var d=new Uint32Array(c),e=0;for(b=512+b-(512+b&0x1ff);b<=a;b+=512)u(this,d.subarray(16*e,
16*(e+1))),e+=1;c.splice(0,16*e)}else for(b=512+b-(512+b&0x1ff);b<=a;b+=512)u(this,c.splice(0,16));return this},finalize:function(){var a,b=this.A,c=this.F,b=sjcl.bitArray.concat(b,[sjcl.bitArray.partial(1,1)]);for(a=b.length+2;a&15;a++)b.push(0);b.push(Math.floor(this.l/0x100000000));for(b.push(this.l|0);b.length;)u(this,b.splice(0,16));this.reset();return c},Y:[],b:[],O:function(){function a(a){return 0x100000000*(a-Math.floor(a))|0}for(var b=0,c=2,d,e;64>b;c++){e=!0;for(d=2;d*d<=c;d++)if(0===c%d){e=
!1;break}e&&(8>b&&(this.Y[b]=a(Math.pow(c,.5))),this.b[b]=a(Math.pow(c,1/3)),b++)}}};
function u(a,b){var c,d,e,f=a.F,g=a.b,h=f[0],k=f[1],l=f[2],n=f[3],m=f[4],p=f[5],r=f[6],q=f[7];for(c=0;64>c;c++)16>c?d=b[c]:(d=b[c+1&15],e=b[c+14&15],d=b[c&15]=(d>>>7^d>>>18^d>>>3^d<<25^d<<14)+(e>>>17^e>>>19^e>>>10^e<<15^e<<13)+b[c&15]+b[c+9&15]|0),d=d+q+(m>>>6^m>>>11^m>>>25^m<<26^m<<21^m<<7)+(r^m&(p^r))+g[c],q=r,r=p,p=m,m=n+d|0,n=l,l=k,k=h,h=d+(k&l^n&(k^l))+(k>>>2^k>>>13^k>>>22^k<<30^k<<19^k<<10)|0;f[0]=f[0]+h|0;f[1]=f[1]+k|0;f[2]=f[2]+l|0;f[3]=f[3]+n|0;f[4]=f[4]+m|0;f[5]=f[5]+p|0;f[6]=f[6]+r|0;f[7]=
f[7]+q|0}
sjcl.mode.ccm={name:"ccm",G:[],listenProgress:function(a){sjcl.mode.ccm.G.push(a)},unListenProgress:function(a){a=sjcl.mode.ccm.G.indexOf(a);-1<a&&sjcl.mode.ccm.G.splice(a,1)},fa:function(a){var b=sjcl.mode.ccm.G.slice(),c;for(c=0;c<b.length;c+=1)b[c](a)},encrypt:function(a,b,c,d,e){var f,g=b.slice(0),h=sjcl.bitArray,k=h.bitLength(c)/8,l=h.bitLength(g)/8;e=e||64;d=d||[];if(7>k)throw new sjcl.exception.invalid("ccm: iv must be at least 7 bytes");for(f=2;4>f&&l>>>8*f;f++);f<15-k&&(f=15-k);c=h.clamp(c,
8*(15-f));b=sjcl.mode.ccm.V(a,b,c,d,e,f);g=sjcl.mode.ccm.C(a,g,c,b,e,f);return h.concat(g.data,g.tag)},decrypt:function(a,b,c,d,e){e=e||64;d=d||[];var f=sjcl.bitArray,g=f.bitLength(c)/8,h=f.bitLength(b),k=f.clamp(b,h-e),l=f.bitSlice(b,h-e),h=(h-e)/8;if(7>g)throw new sjcl.exception.invalid("ccm: iv must be at least 7 bytes");for(b=2;4>b&&h>>>8*b;b++);b<15-g&&(b=15-g);c=f.clamp(c,8*(15-b));k=sjcl.mode.ccm.C(a,k,c,l,e,b);a=sjcl.mode.ccm.V(a,k.data,c,d,e,b);if(!f.equal(k.tag,a))throw new sjcl.exception.corrupt("ccm: tag doesn't match");
return k.data},na:function(a,b,c,d,e,f){var g=[],h=sjcl.bitArray,k=h.i;d=[h.partial(8,(b.length?64:0)|d-2<<2|f-1)];d=h.concat(d,c);d[3]|=e;d=a.encrypt(d);if(b.length)for(c=h.bitLength(b)/8,65279>=c?g=[h.partial(16,c)]:0xffffffff>=c&&(g=h.concat([h.partial(16,65534)],[c])),g=h.concat(g,b),b=0;b<g.length;b+=4)d=a.encrypt(k(d,g.slice(b,b+4).concat([0,0,0])));return d},V:function(a,b,c,d,e,f){var g=sjcl.bitArray,h=g.i;e/=8;if(e%2||4>e||16<e)throw new sjcl.exception.invalid("ccm: invalid tag length");
if(0xffffffff<d.length||0xffffffff<b.length)throw new sjcl.exception.bug("ccm: can't deal with 4GiB or more data");c=sjcl.mode.ccm.na(a,d,c,e,g.bitLength(b)/8,f);for(d=0;d<b.length;d+=4)c=a.encrypt(h(c,b.slice(d,d+4).concat([0,0,0])));return g.clamp(c,8*e)},C:function(a,b,c,d,e,f){var g,h=sjcl.bitArray;g=h.i;var k=b.length,l=h.bitLength(b),n=k/50,m=n;c=h.concat([h.partial(8,f-1)],c).concat([0,0,0]).slice(0,4);d=h.bitSlice(g(d,a.encrypt(c)),0,e);if(!k)return{tag:d,data:[]};for(g=0;g<k;g+=4)g>n&&(sjcl.mode.ccm.fa(g/
k),n+=m),c[3]++,e=a.encrypt(c),b[g]^=e[0],b[g+1]^=e[1],b[g+2]^=e[2],b[g+3]^=e[3];return{tag:d,data:h.clamp(b,l)}}};
sjcl.mode.ocb2={name:"ocb2",encrypt:function(a,b,c,d,e,f){if(128!==sjcl.bitArray.bitLength(c))throw new sjcl.exception.invalid("ocb iv must be 128 bits");var g,h=sjcl.mode.ocb2.S,k=sjcl.bitArray,l=k.i,n=[0,0,0,0];c=h(a.encrypt(c));var m,p=[];d=d||[];e=e||64;for(g=0;g+4<b.length;g+=4)m=b.slice(g,g+4),n=l(n,m),p=p.concat(l(c,a.encrypt(l(c,m)))),c=h(c);m=b.slice(g);b=k.bitLength(m);g=a.encrypt(l(c,[0,0,0,b]));m=k.clamp(l(m.concat([0,0,0]),g),b);n=l(n,l(m.concat([0,0,0]),g));n=a.encrypt(l(n,l(c,h(c))));
d.length&&(n=l(n,f?d:sjcl.mode.ocb2.pmac(a,d)));return p.concat(k.concat(m,k.clamp(n,e)))},decrypt:function(a,b,c,d,e,f){if(128!==sjcl.bitArray.bitLength(c))throw new sjcl.exception.invalid("ocb iv must be 128 bits");e=e||64;var g=sjcl.mode.ocb2.S,h=sjcl.bitArray,k=h.i,l=[0,0,0,0],n=g(a.encrypt(c)),m,p,r=sjcl.bitArray.bitLength(b)-e,q=[];d=d||[];for(c=0;c+4<r/32;c+=4)m=k(n,a.decrypt(k(n,b.slice(c,c+4)))),l=k(l,m),q=q.concat(m),n=g(n);p=r-32*c;m=a.encrypt(k(n,[0,0,0,p]));m=k(m,h.clamp(b.slice(c),p).concat([0,
0,0]));l=k(l,m);l=a.encrypt(k(l,k(n,g(n))));d.length&&(l=k(l,f?d:sjcl.mode.ocb2.pmac(a,d)));if(!h.equal(h.clamp(l,e),h.bitSlice(b,r)))throw new sjcl.exception.corrupt("ocb: tag doesn't match");return q.concat(h.clamp(m,p))},pmac:function(a,b){var c,d=sjcl.mode.ocb2.S,e=sjcl.bitArray,f=e.i,g=[0,0,0,0],h=a.encrypt([0,0,0,0]),h=f(h,d(d(h)));for(c=0;c+4<b.length;c+=4)h=d(h),g=f(g,a.encrypt(f(h,b.slice(c,c+4))));c=b.slice(c);128>e.bitLength(c)&&(h=f(h,d(h)),c=e.concat(c,[-2147483648,0,0,0]));g=f(g,c);
return a.encrypt(f(d(f(h,d(h))),g))},S:function(a){return[a[0]<<1^a[1]>>>31,a[1]<<1^a[2]>>>31,a[2]<<1^a[3]>>>31,a[3]<<1^135*(a[0]>>>31)]}};
sjcl.mode.gcm={name:"gcm",encrypt:function(a,b,c,d,e){var f=b.slice(0);b=sjcl.bitArray;d=d||[];a=sjcl.mode.gcm.C(!0,a,f,d,c,e||128);return b.concat(a.data,a.tag)},decrypt:function(a,b,c,d,e){var f=b.slice(0),g=sjcl.bitArray,h=g.bitLength(f);e=e||128;d=d||[];e<=h?(b=g.bitSlice(f,h-e),f=g.bitSlice(f,0,h-e)):(b=f,f=[]);a=sjcl.mode.gcm.C(!1,a,f,d,c,e);if(!g.equal(a.tag,b))throw new sjcl.exception.corrupt("gcm: tag doesn't match");return a.data},ka:function(a,b){var c,d,e,f,g,h=sjcl.bitArray.i;e=[0,0,
0,0];f=b.slice(0);for(c=0;128>c;c++){(d=0!==(a[Math.floor(c/32)]&1<<31-c%32))&&(e=h(e,f));g=0!==(f[3]&1);for(d=3;0<d;d--)f[d]=f[d]>>>1|(f[d-1]&1)<<31;f[0]>>>=1;g&&(f[0]^=-0x1f000000)}return e},j:function(a,b,c){var d,e=c.length;b=b.slice(0);for(d=0;d<e;d+=4)b[0]^=0xffffffff&c[d],b[1]^=0xffffffff&c[d+1],b[2]^=0xffffffff&c[d+2],b[3]^=0xffffffff&c[d+3],b=sjcl.mode.gcm.ka(b,a);return b},C:function(a,b,c,d,e,f){var g,h,k,l,n,m,p,r,q=sjcl.bitArray;m=c.length;p=q.bitLength(c);r=q.bitLength(d);h=q.bitLength(e);
g=b.encrypt([0,0,0,0]);96===h?(e=e.slice(0),e=q.concat(e,[1])):(e=sjcl.mode.gcm.j(g,[0,0,0,0],e),e=sjcl.mode.gcm.j(g,e,[0,0,Math.floor(h/0x100000000),h&0xffffffff]));h=sjcl.mode.gcm.j(g,[0,0,0,0],d);n=e.slice(0);d=h.slice(0);a||(d=sjcl.mode.gcm.j(g,h,c));for(l=0;l<m;l+=4)n[3]++,k=b.encrypt(n),c[l]^=k[0],c[l+1]^=k[1],c[l+2]^=k[2],c[l+3]^=k[3];c=q.clamp(c,p);a&&(d=sjcl.mode.gcm.j(g,h,c));a=[Math.floor(r/0x100000000),r&0xffffffff,Math.floor(p/0x100000000),p&0xffffffff];d=sjcl.mode.gcm.j(g,d,a);k=b.encrypt(e);
d[0]^=k[0];d[1]^=k[1];d[2]^=k[2];d[3]^=k[3];return{tag:q.bitSlice(d,0,f),data:c}}};sjcl.misc.hmac=function(a,b){this.W=b=b||sjcl.hash.sha256;var c=[[],[]],d,e=b.prototype.blockSize/32;this.w=[new b,new b];a.length>e&&(a=b.hash(a));for(d=0;d<e;d++)c[0][d]=a[d]^909522486,c[1][d]=a[d]^1549556828;this.w[0].update(c[0]);this.w[1].update(c[1]);this.R=new b(this.w[0])};
sjcl.misc.hmac.prototype.encrypt=sjcl.misc.hmac.prototype.mac=function(a){if(this.aa)throw new sjcl.exception.invalid("encrypt on already updated hmac called!");this.update(a);return this.digest(a)};sjcl.misc.hmac.prototype.reset=function(){this.R=new this.W(this.w[0]);this.aa=!1};sjcl.misc.hmac.prototype.update=function(a){this.aa=!0;this.R.update(a)};sjcl.misc.hmac.prototype.digest=function(){var a=this.R.finalize(),a=(new this.W(this.w[1])).update(a).finalize();this.reset();return a};
sjcl.misc.pbkdf2=function(a,b,c,d,e){c=c||1E4;if(0>d||0>c)throw new sjcl.exception.invalid("invalid params to pbkdf2");"string"===typeof a&&(a=sjcl.codec.utf8String.toBits(a));"string"===typeof b&&(b=sjcl.codec.utf8String.toBits(b));e=e||sjcl.misc.hmac;a=new e(a);var f,g,h,k,l=[],n=sjcl.bitArray;for(k=1;32*l.length<(d||1);k++){e=f=a.encrypt(n.concat(b,[k]));for(g=1;g<c;g++)for(f=a.encrypt(f),h=0;h<f.length;h++)e[h]^=f[h];l=l.concat(e)}d&&(l=n.clamp(l,d));return l};
sjcl.prng=function(a){this.c=[new sjcl.hash.sha256];this.m=[0];this.P=0;this.H={};this.N=0;this.U={};this.Z=this.f=this.o=this.ha=0;this.b=[0,0,0,0,0,0,0,0];this.h=[0,0,0,0];this.L=void 0;this.M=a;this.D=!1;this.K={progress:{},seeded:{}};this.u=this.ga=0;this.I=1;this.J=2;this.ca=0x10000;this.T=[0,48,64,96,128,192,0x100,384,512,768,1024];this.da=3E4;this.ba=80};
sjcl.prng.prototype={randomWords:function(a,b){var c=[],d;d=this.isReady(b);var e;if(d===this.u)throw new sjcl.exception.notReady("generator isn't seeded");if(d&this.J){d=!(d&this.I);e=[];var f=0,g;this.Z=e[0]=(new Date).valueOf()+this.da;for(g=0;16>g;g++)e.push(0x100000000*Math.random()|0);for(g=0;g<this.c.length&&(e=e.concat(this.c[g].finalize()),f+=this.m[g],this.m[g]=0,d||!(this.P&1<<g));g++);this.P>=1<<this.c.length&&(this.c.push(new sjcl.hash.sha256),this.m.push(0));this.f-=f;f>this.o&&(this.o=
f);this.P++;this.b=sjcl.hash.sha256.hash(this.b.concat(e));this.L=new sjcl.cipher.aes(this.b);for(d=0;4>d&&(this.h[d]=this.h[d]+1|0,!this.h[d]);d++);}for(d=0;d<a;d+=4)0===(d+1)%this.ca&&y(this),e=z(this),c.push(e[0],e[1],e[2],e[3]);y(this);return c.slice(0,a)},setDefaultParanoia:function(a,b){if(0===a&&"Setting paranoia=0 will ruin your security; use it only for testing"!==b)throw new sjcl.exception.invalid("Setting paranoia=0 will ruin your security; use it only for testing");this.M=a},addEntropy:function(a,
b,c){c=c||"user";var d,e,f=(new Date).valueOf(),g=this.H[c],h=this.isReady(),k=0;d=this.U[c];void 0===d&&(d=this.U[c]=this.ha++);void 0===g&&(g=this.H[c]=0);this.H[c]=(this.H[c]+1)%this.c.length;switch(typeof a){case "number":void 0===b&&(b=1);this.c[g].update([d,this.N++,1,b,f,1,a|0]);break;case "object":c=Object.prototype.toString.call(a);if("[object Uint32Array]"===c){e=[];for(c=0;c<a.length;c++)e.push(a[c]);a=e}else for("[object Array]"!==c&&(k=1),c=0;c<a.length&&!k;c++)"number"!==typeof a[c]&&
(k=1);if(!k){if(void 0===b)for(c=b=0;c<a.length;c++)for(e=a[c];0<e;)b++,e=e>>>1;this.c[g].update([d,this.N++,2,b,f,a.length].concat(a))}break;case "string":void 0===b&&(b=a.length);this.c[g].update([d,this.N++,3,b,f,a.length]);this.c[g].update(a);break;default:k=1}if(k)throw new sjcl.exception.bug("random: addEntropy only supports number, array of numbers or string");this.m[g]+=b;this.f+=b;h===this.u&&(this.isReady()!==this.u&&A("seeded",Math.max(this.o,this.f)),A("progress",this.getProgress()))},
isReady:function(a){a=this.T[void 0!==a?a:this.M];return this.o&&this.o>=a?this.m[0]>this.ba&&(new Date).valueOf()>this.Z?this.J|this.I:this.I:this.f>=a?this.J|this.u:this.u},getProgress:function(a){a=this.T[a?a:this.M];return this.o>=a?1:this.f>a?1:this.f/a},startCollectors:function(){if(!this.D){this.a={loadTimeCollector:B(this,this.ma),mouseCollector:B(this,this.oa),keyboardCollector:B(this,this.la),accelerometerCollector:B(this,this.ea),touchCollector:B(this,this.qa)};if(window.addEventListener)window.addEventListener("load",
this.a.loadTimeCollector,!1),window.addEventListener("mousemove",this.a.mouseCollector,!1),window.addEventListener("keypress",this.a.keyboardCollector,!1),window.addEventListener("devicemotion",this.a.accelerometerCollector,!1),window.addEventListener("touchmove",this.a.touchCollector,!1);else if(document.attachEvent)document.attachEvent("onload",this.a.loadTimeCollector),document.attachEvent("onmousemove",this.a.mouseCollector),document.attachEvent("keypress",this.a.keyboardCollector);else throw new sjcl.exception.bug("can't attach event");
this.D=!0}},stopCollectors:function(){this.D&&(window.removeEventListener?(window.removeEventListener("load",this.a.loadTimeCollector,!1),window.removeEventListener("mousemove",this.a.mouseCollector,!1),window.removeEventListener("keypress",this.a.keyboardCollector,!1),window.removeEventListener("devicemotion",this.a.accelerometerCollector,!1),window.removeEventListener("touchmove",this.a.touchCollector,!1)):document.detachEvent&&(document.detachEvent("onload",this.a.loadTimeCollector),document.detachEvent("onmousemove",
this.a.mouseCollector),document.detachEvent("keypress",this.a.keyboardCollector)),this.D=!1)},addEventListener:function(a,b){this.K[a][this.ga++]=b},removeEventListener:function(a,b){var c,d,e=this.K[a],f=[];for(d in e)e.hasOwnProperty(d)&&e[d]===b&&f.push(d);for(c=0;c<f.length;c++)d=f[c],delete e[d]},la:function(){C(this,1)},oa:function(a){var b,c;try{b=a.x||a.clientX||a.offsetX||0,c=a.y||a.clientY||a.offsetY||0}catch(d){c=b=0}0!=b&&0!=c&&this.addEntropy([b,c],2,"mouse");C(this,0)},qa:function(a){a=
a.touches[0]||a.changedTouches[0];this.addEntropy([a.pageX||a.clientX,a.pageY||a.clientY],1,"touch");C(this,0)},ma:function(){C(this,2)},ea:function(a){a=a.accelerationIncludingGravity.x||a.accelerationIncludingGravity.y||a.accelerationIncludingGravity.z;if(window.orientation){var b=window.orientation;"number"===typeof b&&this.addEntropy(b,1,"accelerometer")}a&&this.addEntropy(a,2,"accelerometer");C(this,0)}};
function A(a,b){var c,d=sjcl.random.K[a],e=[];for(c in d)d.hasOwnProperty(c)&&e.push(d[c]);for(c=0;c<e.length;c++)e[c](b)}function C(a,b){"undefined"!==typeof window&&window.performance&&"function"===typeof window.performance.now?a.addEntropy(window.performance.now(),b,"loadtime"):a.addEntropy((new Date).valueOf(),b,"loadtime")}function y(a){a.b=z(a).concat(z(a));a.L=new sjcl.cipher.aes(a.b)}function z(a){for(var b=0;4>b&&(a.h[b]=a.h[b]+1|0,!a.h[b]);b++);return a.L.encrypt(a.h)}
function B(a,b){return function(){b.apply(a,arguments)}}sjcl.random=new sjcl.prng(6);
a:try{var D,E,F,G;if(G="undefined"!==typeof module&&module.exports){var H;try{H=require("crypto")}catch(a){H=null}G=E=H}if(G&&E.randomBytes)D=E.randomBytes(128),D=new Uint32Array((new Uint8Array(D)).buffer),sjcl.random.addEntropy(D,1024,"crypto['randomBytes']");else if("undefined"!==typeof window&&"undefined"!==typeof Uint32Array){F=new Uint32Array(32);if(window.crypto&&window.crypto.getRandomValues)window.crypto.getRandomValues(F);else if(window.msCrypto&&window.msCrypto.getRandomValues)window.msCrypto.getRandomValues(F);
else break a;sjcl.random.addEntropy(F,1024,"crypto['getRandomValues']")}}catch(a){"undefined"!==typeof window&&window.console&&(console.log("There was an error collecting entropy from the browser:"),console.log(a))}
sjcl.json={defaults:{v:1,iter:1E4,ks:128,ts:64,mode:"ccm",adata:"",cipher:"aes"},ja:function(a,b,c,d){c=c||{};d=d||{};var e=sjcl.json,f=e.g({iv:sjcl.random.randomWords(4,0)},e.defaults),g;e.g(f,c);c=f.adata;"string"===typeof f.salt&&(f.salt=sjcl.codec.base64.toBits(f.salt));"string"===typeof f.iv&&(f.iv=sjcl.codec.base64.toBits(f.iv));if(!sjcl.mode[f.mode]||!sjcl.cipher[f.cipher]||"string"===typeof a&&100>=f.iter||64!==f.ts&&96!==f.ts&&128!==f.ts||128!==f.ks&&192!==f.ks&&0x100!==f.ks||2>f.iv.length||
4<f.iv.length)throw new sjcl.exception.invalid("json encrypt: invalid parameters");"string"===typeof a?(g=sjcl.misc.cachedPbkdf2(a,f),a=g.key.slice(0,f.ks/32),f.salt=g.salt):sjcl.ecc&&a instanceof sjcl.ecc.elGamal.publicKey&&(g=a.kem(),f.kemtag=g.tag,a=g.key.slice(0,f.ks/32));"string"===typeof b&&(b=sjcl.codec.utf8String.toBits(b));"string"===typeof c&&(f.adata=c=sjcl.codec.utf8String.toBits(c));g=new sjcl.cipher[f.cipher](a);e.g(d,f);d.key=a;f.ct="ccm"===f.mode&&sjcl.arrayBuffer&&sjcl.arrayBuffer.ccm&&
b instanceof ArrayBuffer?sjcl.arrayBuffer.ccm.encrypt(g,b,f.iv,c,f.ts):sjcl.mode[f.mode].encrypt(g,b,f.iv,c,f.ts);return f},encrypt:function(a,b,c,d){var e=sjcl.json,f=e.ja.apply(e,arguments);return e.encode(f)},ia:function(a,b,c,d){c=c||{};d=d||{};var e=sjcl.json;b=e.g(e.g(e.g({},e.defaults),b),c,!0);var f,g;f=b.adata;"string"===typeof b.salt&&(b.salt=sjcl.codec.base64.toBits(b.salt));"string"===typeof b.iv&&(b.iv=sjcl.codec.base64.toBits(b.iv));if(!sjcl.mode[b.mode]||!sjcl.cipher[b.cipher]||"string"===
typeof a&&100>=b.iter||64!==b.ts&&96!==b.ts&&128!==b.ts||128!==b.ks&&192!==b.ks&&0x100!==b.ks||!b.iv||2>b.iv.length||4<b.iv.length)throw new sjcl.exception.invalid("json decrypt: invalid parameters");"string"===typeof a?(g=sjcl.misc.cachedPbkdf2(a,b),a=g.key.slice(0,b.ks/32),b.salt=g.salt):sjcl.ecc&&a instanceof sjcl.ecc.elGamal.secretKey&&(a=a.unkem(sjcl.codec.base64.toBits(b.kemtag)).slice(0,b.ks/32));"string"===typeof f&&(f=sjcl.codec.utf8String.toBits(f));g=new sjcl.cipher[b.cipher](a);f="ccm"===
b.mode&&sjcl.arrayBuffer&&sjcl.arrayBuffer.ccm&&b.ct instanceof ArrayBuffer?sjcl.arrayBuffer.ccm.decrypt(g,b.ct,b.iv,b.tag,f,b.ts):sjcl.mode[b.mode].decrypt(g,b.ct,b.iv,f,b.ts);e.g(d,b);d.key=a;return 1===c.raw?f:sjcl.codec.utf8String.fromBits(f)},decrypt:function(a,b,c,d){var e=sjcl.json;return e.ia(a,e.decode(b),c,d)},encode:function(a){var b,c="{",d="";for(b in a)if(a.hasOwnProperty(b)){if(!b.match(/^[a-z0-9]+$/i))throw new sjcl.exception.invalid("json encode: invalid property name");c+=d+'"'+
b+'":';d=",";switch(typeof a[b]){case "number":case "boolean":c+=a[b];break;case "string":c+='"'+escape(a[b])+'"';break;case "object":c+='"'+sjcl.codec.base64.fromBits(a[b],0)+'"';break;default:throw new sjcl.exception.bug("json encode: unsupported type");}}return c+"}"},decode:function(a){a=a.replace(/\s/g,"");if(!a.match(/^\{.*\}$/))throw new sjcl.exception.invalid("json decode: this isn't json!");a=a.replace(/^\{|\}$/g,"").split(/,/);var b={},c,d;for(c=0;c<a.length;c++){if(!(d=a[c].match(/^\s*(?:(["']?)([a-z][a-z0-9]*)\1)\s*:\s*(?:(-?\d+)|"([a-z0-9+\/%*_.@=\-]*)"|(true|false))$/i)))throw new sjcl.exception.invalid("json decode: this isn't json!");
null!=d[3]?b[d[2]]=parseInt(d[3],10):null!=d[4]?b[d[2]]=d[2].match(/^(ct|adata|salt|iv)$/)?sjcl.codec.base64.toBits(d[4]):unescape(d[4]):null!=d[5]&&(b[d[2]]="true"===d[5])}return b},g:function(a,b,c){void 0===a&&(a={});if(void 0===b)return a;for(var d in b)if(b.hasOwnProperty(d)){if(c&&void 0!==a[d]&&a[d]!==b[d])throw new sjcl.exception.invalid("required parameter overridden");a[d]=b[d]}return a},sa:function(a,b){var c={},d;for(d in a)a.hasOwnProperty(d)&&a[d]!==b[d]&&(c[d]=a[d]);return c},ra:function(a,
b){var c={},d;for(d=0;d<b.length;d++)void 0!==a[b[d]]&&(c[b[d]]=a[b[d]]);return c}};sjcl.encrypt=sjcl.json.encrypt;sjcl.decrypt=sjcl.json.decrypt;sjcl.misc.pa={};sjcl.misc.cachedPbkdf2=function(a,b){var c=sjcl.misc.pa,d;b=b||{};d=b.iter||1E3;c=c[a]=c[a]||{};d=c[d]=c[d]||{firstSalt:b.salt&&b.salt.length?b.salt.slice(0):sjcl.random.randomWords(2,0)};c=void 0===b.salt?d.firstSalt:b.salt;d[c]=d[c]||sjcl.misc.pbkdf2(a,c,b.iter);return{key:d[c].slice(0),salt:c.slice(0)}};
"undefined"!==typeof module&&module.exports&&(module.exports=sjcl);"function"===typeof define&&define([],function(){return sjcl});
</script>
</div>
<!--~~ Boot kernel prologue ~~-->
<div id="bootKernelPrefix" style="display:none;">
<script data-tiddler-title="$:/boot/bootprefix.js" data-tiddler-type="application/javascript" type="text/javascript">/*\
title: $:/boot/bootprefix.js
type: application/javascript

This file sets up the globals that need to be available when JavaScript modules are executed in the browser. The overall sequence is:

# BootPrefix.js
# <module definitions>
# Boot.js

See Boot.js for further details of the boot process.

\*/

var _bootprefix = (function($tw) {

"use strict";

$tw = $tw || Object.create(null);
$tw.boot = $tw.boot || Object.create(null);

// Detect platforms
if(!("browser" in $tw)) {
	$tw.browser = typeof(window) !== "undefined" ? {} : null;
}
if(!("node" in $tw)) {
	$tw.node = typeof(process) === "object" ? {} : null;
}
if(!("nodeWebKit" in $tw)) {
	$tw.nodeWebKit = $tw.node && global.window && global.window.nwDispatcher ? {} : null;
}

// Set default boot tasks
$tw.boot.tasks = {
	trapErrors: !!($tw.browser && !$tw.node),
	readBrowserTiddlers: !!($tw.browser && !$tw.node)
};

/*
Information about each module is kept in an object with these members:
	moduleType: type of module
	definition: object, function or string defining the module; see below
	exports: exports of the module, filled in after execution

The `definition` can be of several types:

* An object can be used to directly specify the exports of the module
* A function with the arguments `module,require,exports` that returns `exports`
* A string function body with the same arguments

Each moduleInfo object is stored in two hashmaps: $tw.modules.titles and $tw.modules.types. The first is indexed by title and the second is indexed by type and then title
*/
$tw.modules = {
	titles: {}, // hashmap by module name of moduleInfo
	types: {} // hashmap by module type and then name of moduleInfo
};

/*
Define a JavaScript tiddler module for later execution
	moduleName: name of module being defined
	moduleType: type of module
	definition: module definition; see discussion above
*/
$tw.modules.define = function(moduleName,moduleType,definition) {
	// Create the moduleInfo
	var moduleInfo = {
		moduleType: moduleType,
		definition: definition,
		exports: undefined
	};
	// If the definition is already an object we can use it as the exports
	if(typeof moduleInfo.definition === "object") {
		moduleInfo.exports = definition;
	}
	// Store the module in the titles hashmap
	if(Object.prototype.hasOwnProperty.call($tw.modules.titles,moduleName)) {
		console.log("Warning: Redefined module - " + moduleName);
	}
	$tw.modules.titles[moduleName] = moduleInfo;
	// Store the module in the types hashmap
	if(!Object.prototype.hasOwnProperty.call($tw.modules.types,moduleType)) {
		$tw.modules.types[moduleType] = {};
	}
	if(Object.prototype.hasOwnProperty.call($tw.modules.types[moduleType],moduleName)) {
		console.log("Warning: Redefined module - " + moduleName);
	}
	$tw.modules.types[moduleType][moduleName] = moduleInfo;
};

/*
External JavaScript can populate this array before calling boot.js in order to preload tiddlers
*/
$tw.preloadTiddlers = $tw.preloadTiddlers || [];

/*
Convenience function for pushing a tiddler onto the preloading array
*/
$tw.preloadTiddler = function(fields) {
	$tw.preloadTiddlers.push(fields);
};

/*
Convenience function for pushing an array of tiddlers onto the preloading array
*/
$tw.preloadTiddlerArray = function(fieldsArray) {
	$tw.preloadTiddlers.push.apply($tw.preloadTiddlers,fieldsArray);
};

return $tw;

});

if(typeof(exports) === "undefined") {
	// Set up $tw global for the browser
	window.$tw = _bootprefix(window.$tw);
} else {
	// Export functionality as a module
	exports.bootprefix = _bootprefix;
}
</script>
</div>
<!--~~ Boot kernel ~~-->
<div id="bootKernel" style="display:none;">
<script data-tiddler-title="$:/boot/boot.js" data-tiddler-type="application/javascript" type="text/javascript">/*\
title: $:/boot/boot.js
type: application/javascript

The main boot kernel for TiddlyWiki. This single file creates a barebones TW environment that is just sufficient to bootstrap the modules containing the main logic of the application.

On the server this file is executed directly to boot TiddlyWiki. In the browser, this file is packed into a single HTML file.

\*/

var _boot = (function($tw) {

/*jslint node: true, browser: true */
/*global modules: false, $tw: false */
"use strict";

// Include bootprefix if we're not given module data
if(!$tw) {
	$tw = require("./bootprefix.js").bootprefix();
}

$tw.utils = $tw.utils || Object.create(null);

/////////////////////////// Standard node.js libraries

var fs, path, vm;
if($tw.node) {
	fs = require("fs");
	path = require("path");
	vm = require("vm");
}

/////////////////////////// Utility functions

$tw.boot.log = function(str) {
	$tw.boot.logMessages = $tw.boot.logMessages || [];
	$tw.boot.logMessages.push(str);
}

/*
Check if an object has a property
*/
$tw.utils.hop = function(object,property) {
	return object ? Object.prototype.hasOwnProperty.call(object,property) : false;
};

/*
Determine if a value is an array
*/
$tw.utils.isArray = function(value) {
	return Object.prototype.toString.call(value) == "[object Array]";
};

/*
Check if an array is equal by value and by reference.
*/
$tw.utils.isArrayEqual = function(array1,array2) {
	if(array1 === array2) {
		return true;
	}
	array1 = array1 || [];
	array2 = array2 || [];
	if(array1.length !== array2.length) {
		return false;
	}
	return array1.every(function(value,index) {
		return value === array2[index];
	});
};

/*
Push entries onto an array, removing them first if they already exist in the array
	array: array to modify (assumed to be free of duplicates)
	value: a single value to push or an array of values to push
*/
$tw.utils.pushTop = function(array,value) {
	var t,p;
	if($tw.utils.isArray(value)) {
		// Remove any array entries that are duplicated in the new values
		if(value.length !== 0) {
			if(array.length !== 0) {
				if(value.length < array.length) {
					for(t=0; t<value.length; t++) {
						p = array.indexOf(value[t]);
						if(p !== -1) {
							array.splice(p,1);
						}
					}
				} else {
					for(t=array.length-1; t>=0; t--) {
						p = value.indexOf(array[t]);
						if(p !== -1) {
							array.splice(t,1);
						}
					}
				}
			}
			// Push the values on top of the main array
			array.push.apply(array,value);
		}
	} else {
		p = array.indexOf(value);
		if(p !== -1) {
			array.splice(p,1);
		}
		array.push(value);
	}
	return array;
};

/*
Determine if a value is a date
*/
$tw.utils.isDate = function(value) {
	return Object.prototype.toString.call(value) === "[object Date]";
};

/*
Iterate through all the own properties of an object or array. Callback is invoked with (element,title,object)
*/
$tw.utils.each = function(object,callback) {
	var next,f,length;
	if(object) {
		if(Object.prototype.toString.call(object) == "[object Array]") {
			for (f=0, length=object.length; f<length; f++) {
				next = callback(object[f],f,object);
				if(next === false) {
					break;
				}
		    }
		} else {
			var keys = Object.keys(object);
			for (f=0, length=keys.length; f<length; f++) {
				var key = keys[f];
				next = callback(object[key],key,object);
				if(next === false) {
					break;
				}
			}
		}
	}
};

/*
Helper for making DOM elements
tag: tag name
options: see below
Options include:
namespace: defaults to http://www.w3.org/1999/xhtml
attributes: hashmap of attribute values
style: hashmap of styles
text: text to add as a child node
children: array of further child nodes
innerHTML: optional HTML for element
class: class name(s)
document: defaults to current document
eventListeners: array of event listeners (this option won't work until $tw.utils.addEventListeners() has been loaded)
*/
$tw.utils.domMaker = function(tag,options) {
	var doc = options.document || document;
	var element = doc.createElementNS(options.namespace || "http://www.w3.org/1999/xhtml",tag);
	if(options["class"]) {
		element.className = options["class"];
	}
	if(options.text) {
		element.appendChild(doc.createTextNode(options.text));
	}
	$tw.utils.each(options.children,function(child) {
		element.appendChild(child);
	});
	if(options.innerHTML) {
		element.innerHTML = options.innerHTML;
	}
	$tw.utils.each(options.attributes,function(attribute,name) {
		element.setAttribute(name,attribute);
	});
	$tw.utils.each(options.style,function(value,name) {
		element.style[name] = value;
	});
	if(options.eventListeners) {
		$tw.utils.addEventListeners(element,options.eventListeners);
	}
	return element;
};

/*
Display an error and exit
*/
$tw.utils.error = function(err) {
	// Prepare the error message
	var errHeading = ( $tw.language == undefined ? "Internal JavaScript Error" : $tw.language.getString("InternalJavaScriptError/Title") ),
		promptMsg = ( $tw.language == undefined ? "Well, this is embarrassing. It is recommended that you restart TiddlyWiki by refreshing your browser" : $tw.language.getString("InternalJavaScriptError/Hint") );
	// Log the error to the console
	console.error($tw.node ? "\x1b[1;31m" + err + "\x1b[0m" : err);
	if($tw.browser && !$tw.node) {
		// Display an error message to the user
		var dm = $tw.utils.domMaker,
			heading = dm("h1",{text: errHeading}),
			prompt = dm("div",{text: promptMsg, "class": "tc-error-prompt"}),
			message = dm("div",{text: err, "class":"tc-error-message"}),
			button = dm("div",{children: [dm("button",{text: ( $tw.language == undefined ? "close" : $tw.language.getString("Buttons/Close/Caption") )})], "class": "tc-error-prompt"}),
			form = dm("form",{children: [heading,prompt,message,button], "class": "tc-error-form"});
		document.body.insertBefore(form,document.body.firstChild);
		form.addEventListener("submit",function(event) {
			document.body.removeChild(form);
			event.preventDefault();
			return false;
		},true);
		return null;
	} else if(!$tw.browser) {
		// Exit if we're under node.js
		process.exit(1);
	}
};

/*
Use our custom error handler if we're in the browser
*/
if($tw.boot.tasks.trapErrors) {
	window.onerror = function(errorMsg,url,lineNumber) {
		$tw.utils.error(errorMsg);
		return false;
	};
}

/*
Extend an object with the properties from a list of source objects
*/
$tw.utils.extend = function(object /*, sourceObjectList */) {
	$tw.utils.each(Array.prototype.slice.call(arguments,1),function(source) {
		if(source) {
			for (var p in source) {
				object[p] = source[p];
			}
		}
	});
	return object;
};

/*
Fill in any null or undefined properties of an object with the properties from a list of source objects. Each property that is an object is called recursively
*/
$tw.utils.deepDefaults = function(object /*, sourceObjectList */) {
	$tw.utils.each(Array.prototype.slice.call(arguments,1),function(source) {
		if(source) {
			for (var p in source) {
				if(object[p] === null || object[p] === undefined) {
					object[p] = source[p];
				}
				if(typeof object[p] === "object" && typeof source[p] === "object") {
					$tw.utils.deepDefaults(object[p],source[p]);
				}
			}
		}
	});
	return object;
};

/*
Convert "&amp;" to &, "&nbsp;" to nbsp, "&lt;" to <, "&gt;" to > and "&quot;" to "
*/
$tw.utils.htmlDecode = function(s) {
	return s.toString().replace(/&lt;/mg,"<").replace(/&nbsp;/mg,"\xA0").replace(/&gt;/mg,">").replace(/&quot;/mg,"\"").replace(/&amp;/mg,"&");
};

/*
Get the browser location.hash. We don't use location.hash because of the way that Firefox auto-urldecodes it (see http://stackoverflow.com/questions/1703552/encoding-of-window-location-hash)
*/
$tw.utils.getLocationHash = function() {
	var href = window.location.href;
	var idx = href.indexOf('#');
	if(idx === -1) {
		return "#";
	} else if(idx < href.length-1 && href[idx+1] === '#') {
		// Special case: ignore location hash if it itself starts with a #
		return "#";
	} else {
		return href.substring(idx);
	}
};

/*
Pad a string to a given length with "0"s. Length defaults to 2
*/
$tw.utils.pad = function(value,length) {
	length = length || 2;
	var s = value.toString();
	if(s.length < length) {
		s = "000000000000000000000000000".substr(0,length - s.length) + s;
	}
	return s;
};

// Convert a date into UTC YYYYMMDDHHMMSSmmm format
$tw.utils.stringifyDate = function(value) {
	return value.getUTCFullYear() +
			$tw.utils.pad(value.getUTCMonth() + 1) +
			$tw.utils.pad(value.getUTCDate()) +
			$tw.utils.pad(value.getUTCHours()) +
			$tw.utils.pad(value.getUTCMinutes()) +
			$tw.utils.pad(value.getUTCSeconds()) +
			$tw.utils.pad(value.getUTCMilliseconds(),3);
};

// Parse a date from a UTC YYYYMMDDHHMMSSmmm format string
$tw.utils.parseDate = function(value) {
	if(typeof value === "string") {
		var negative = 1;
		if(value.charAt(0) === "-") {
			negative = -1;
			value = value.substr(1);
		}
		var year = parseInt(value.substr(0,4),10) * negative,
			d = new Date(Date.UTC(year,
				parseInt(value.substr(4,2),10)-1,
				parseInt(value.substr(6,2),10),
				parseInt(value.substr(8,2)||"00",10),
				parseInt(value.substr(10,2)||"00",10),
				parseInt(value.substr(12,2)||"00",10),
				parseInt(value.substr(14,3)||"000",10)));
		  d.setUTCFullYear(year); // See https://stackoverflow.com/a/5870822
		  return d;
	} else if($tw.utils.isDate(value)) {
		return value;
	} else {
		return null;
	}
};

// Stringify an array of tiddler titles into a list string
$tw.utils.stringifyList = function(value) {
	if($tw.utils.isArray(value)) {
		var result = new Array(value.length);
		for(var t=0, l=value.length; t<l; t++) {
			var entry = value[t] || "";
			if(entry.indexOf(" ") !== -1) {
				result[t] = "[[" + entry + "]]";
			} else {
				result[t] = entry;
			}
		}
		return result.join(" ");
	} else {
		return value || "";
	}
};

// Parse a string array from a bracketted list. For example "OneTiddler [[Another Tiddler]] LastOne"
$tw.utils.parseStringArray = function(value, allowDuplicate) {
	if(typeof value === "string") {
		var memberRegExp = /(?:^|[^\S\xA0])(?:\[\[(.*?)\]\])(?=[^\S\xA0]|$)|([\S\xA0]+)/mg,
			results = [], names = {},
			match;
		do {
			match = memberRegExp.exec(value);
			if(match) {
				var item = match[1] || match[2];
				if(item !== undefined && (!$tw.utils.hop(names,item) || allowDuplicate)) {
					results.push(item);
					names[item] = true;
				}
			}
		} while(match);
		return results;
	} else if($tw.utils.isArray(value)) {
		return value;
	} else {
		return null;
	}
};

// Parse a block of name:value fields. The `fields` object is used as the basis for the return value
$tw.utils.parseFields = function(text,fields) {
	fields = fields || Object.create(null);
	text.split(/\r?\n/mg).forEach(function(line) {
		if(line.charAt(0) !== "#") {
			var p = line.indexOf(":");
			if(p !== -1) {
				var field = line.substr(0, p).trim(),
					value = line.substr(p+1).trim();
				if(field) {
					fields[field] = value;
				}
			}
		}
	});
	return fields;
};

/*
Resolves a source filepath delimited with `/` relative to a specified absolute root filepath.
In relative paths, the special folder name `..` refers to immediate parent directory, and the
name `.` refers to the current directory
*/
$tw.utils.resolvePath = function(sourcepath,rootpath) {
	// If the source path starts with ./ or ../ then it is relative to the root
	if(sourcepath.substr(0,2) === "./" || sourcepath.substr(0,3) === "../" ) {
		var src = sourcepath.split("/"),
			root = rootpath.split("/");
		// Remove the filename part of the root
		root.splice(root.length-1,1);
		// Process the source path bit by bit onto the end of the root path
		while(src.length > 0) {
			var c = src.shift();
			if(c === "..") { // Slice off the last root entry for a double dot
				if(root.length > 0) {
					root.splice(root.length-1,1);
				}
			} else if(c !== ".") { // Ignore dots
				root.push(c); // Copy other elements across
			}
		}
		return root.join("/");
	} else {
		// If it isn't relative, just return the path
		if(rootpath) {
			var root = rootpath.split("/");
			// Remove the filename part of the root
			root.splice(root.length - 1, 1);
			return root.join("/") + "/" + sourcepath;
		} else {
			return sourcepath;
		}
	}
};

/*
Parse a semantic version string into its constituent parts -- see https://semver.org
*/
$tw.utils.parseVersion = function(version) {
	var match = /^v?((\d+)\.(\d+)\.(\d+))(?:-([\dA-Za-z\-]+(?:\.[\dA-Za-z\-]+)*))?(?:\+([\dA-Za-z\-]+(?:\.[\dA-Za-z\-]+)*))?$/.exec(version);
	if(match) {
		return {
			version: match[1],
			major: parseInt(match[2],10),
			minor: parseInt(match[3],10),
			patch: parseInt(match[4],10),
			prerelease: match[5],
			build: match[6]
		};
	} else {
		return null;
	}
};

/*
Returns +1 if the version string A is greater than the version string B, 0 if they are the same, and +1 if B is greater than A.
Missing or malformed version strings are parsed as 0.0.0
*/
$tw.utils.compareVersions = function(versionStringA,versionStringB) {
	var defaultVersion = {
			major: 0,
			minor: 0,
			patch: 0
		},
		versionA = $tw.utils.parseVersion(versionStringA) || defaultVersion,
		versionB = $tw.utils.parseVersion(versionStringB) || defaultVersion,
		diff = [
			versionA.major - versionB.major,
			versionA.minor - versionB.minor,
			versionA.patch - versionB.patch
		];
	if((diff[0] > 0) || (diff[0] === 0 && diff[1] > 0) || (diff[0] === 0 & diff[1] === 0 & diff[2] > 0)) {
		return +1;
	} else if((diff[0] < 0) || (diff[0] === 0 && diff[1] < 0) || (diff[0] === 0 & diff[1] === 0 & diff[2] < 0)) {
		return -1;
	} else {
		return 0;
	}
};

/*
Returns true if the version string A is greater than the version string B. Returns true if the versions are the same
*/
$tw.utils.checkVersions = function(versionStringA,versionStringB) {
	return $tw.utils.compareVersions(versionStringA,versionStringB) !== -1;
};

/*
Register file type information
options: {flags: flags,deserializerType: deserializerType}
	flags:"image" for image types
	deserializerType: defaults to type if not specified
*/
$tw.utils.registerFileType = function(type,encoding,extension,options) {
	options = options || {};
	if($tw.utils.isArray(extension)) {
		$tw.utils.each(extension,function(extension) {
			$tw.config.fileExtensionInfo[extension] = {type: type};
		});
		extension = extension[0];
	} else {
		$tw.config.fileExtensionInfo[extension] = {type: type};
	}
	$tw.config.contentTypeInfo[type] = {encoding: encoding, extension: extension, flags: options.flags || [], deserializerType: options.deserializerType || type};
};

/*
Given an extension, always access the $tw.config.fileExtensionInfo
using a lowercase extension only.
*/
$tw.utils.getFileExtensionInfo = function(ext) {
	return ext ? $tw.config.fileExtensionInfo[ext.toLowerCase()] : null;
}

/*
Given an extension, get the correct encoding for that file.
defaults to utf8
*/
$tw.utils.getTypeEncoding = function(ext) {
	var extensionInfo = $tw.utils.getFileExtensionInfo(ext),
		type = extensionInfo ? extensionInfo.type : null,
		typeInfo = type ? $tw.config.contentTypeInfo[type] : null;
	return typeInfo ? typeInfo.encoding : "utf8";
};

/*
Run code globally with specified context variables in scope
*/
$tw.utils.evalGlobal = function(code,context,filename) {
	var contextCopy = $tw.utils.extend(Object.create(null),context);
	// Get the context variables as a pair of arrays of names and values
	var contextNames = [], contextValues = [];
	$tw.utils.each(contextCopy,function(value,name) {
		contextNames.push(name);
		contextValues.push(value);
	});
	// Add the code prologue and epilogue
	code = "(function(" + contextNames.join(",") + ") {(function(){\n" + code + "\n;})();\nreturn exports;\n})\n";
	// Compile the code into a function
	var fn;
	if($tw.browser) {
		fn = window["eval"](code + "\n\n//# sourceURL=" + filename);
	} else {
		fn = vm.runInThisContext(code,filename);
	}
	// Call the function and return the exports
	return fn.apply(null,contextValues);
};

/*
Run code in a sandbox with only the specified context variables in scope
*/
$tw.utils.evalSandboxed = $tw.browser ? $tw.utils.evalGlobal : function(code,context,filename) {
	var sandbox = $tw.utils.extend(Object.create(null),context);
	vm.runInNewContext(code,sandbox,filename);
	return sandbox.exports;
};

/*
Creates a PasswordPrompt object
*/
$tw.utils.PasswordPrompt = function() {
	// Store of pending password prompts
	this.passwordPrompts = [];
	// Create the wrapper
	this.promptWrapper = $tw.utils.domMaker("div",{"class":"tc-password-wrapper"});
	document.body.appendChild(this.promptWrapper);
	// Hide the empty wrapper
	this.setWrapperDisplay();
};

/*
Hides or shows the wrapper depending on whether there are any outstanding prompts
*/
$tw.utils.PasswordPrompt.prototype.setWrapperDisplay = function() {
	if(this.passwordPrompts.length) {
		this.promptWrapper.style.display = "block";
	} else {
		this.promptWrapper.style.display = "none";
	}
};

/*
Adds a new password prompt. Options are:
submitText: text to use for submit button (defaults to "Login")
serviceName: text of the human readable service name
noUserName: set true to disable username prompt
canCancel: set true to enable a cancel button (callback called with null)
repeatPassword: set true to prompt for the password twice
callback: function to be called on submission with parameter of object {username:,password:}. Callback must return `true` to remove the password prompt
*/
$tw.utils.PasswordPrompt.prototype.createPrompt = function(options) {
	// Create and add the prompt to the DOM
	var self = this,
		submitText = options.submitText || "Login",
		dm = $tw.utils.domMaker,
		children = [dm("h1",{text: options.serviceName})];
	if(!options.noUserName) {
		children.push(dm("input",{
			attributes: {type: "text", name: "username", placeholder: $tw.language.getString("Encryption/Username")}
		}));
	}
	children.push(dm("input",{
		attributes: {
			type: "password",
			name: "password",
			placeholder: ( $tw.language == undefined ? "Password" : $tw.language.getString("Encryption/Password") )
		}
	}));
	if(options.repeatPassword) {
		children.push(dm("input",{
			attributes: {
				type: "password",
				name: "password2",
				placeholder: $tw.language.getString("Encryption/RepeatPassword")
			}
		}));
	}
	if(options.canCancel) {
		children.push(dm("button",{
			text: $tw.language.getString("Encryption/Cancel"),
			attributes: {
				type: "button"
			},
			eventListeners: [{
					name: "click",
					handlerFunction: function(event) {
						self.removePrompt(promptInfo);
						options.callback(null);
					}
				}]
		}));
	}
	children.push(dm("button",{
		attributes: {type: "submit"},
		text: submitText
	}));
	var form = dm("form",{
		attributes: {autocomplete: "off"},
		children: children
	});
	this.promptWrapper.appendChild(form);
	window.setTimeout(function() {
		form.elements[0].focus();
	},10);
	// Add a submit event handler
	var self = this;
	form.addEventListener("submit",function(event) {
		// Collect the form data
		var data = {},t;
		$tw.utils.each(form.elements,function(element) {
			if(element.name && element.value) {
				data[element.name] = element.value;
			}
		});
		// Check that the passwords match
		if(options.repeatPassword && data.password !== data.password2) {
			alert($tw.language.getString("Encryption/PasswordNoMatch"));
		} else {
			// Call the callback
			if(options.callback(data)) {
				// Remove the prompt if the callback returned true
				self.removePrompt(promptInfo);
			} else {
				// Clear the password if the callback returned false
				$tw.utils.each(form.elements,function(element) {
					if(element.name === "password" || element.name === "password2") {
						element.value = "";
					}
				});
			}
		}
		event.preventDefault();
		return false;
	},true);
	// Add the prompt to the list
	var promptInfo = {
		serviceName: options.serviceName,
		callback: options.callback,
		form: form,
		owner: this
	};
	this.passwordPrompts.push(promptInfo);
	// Make sure the wrapper is displayed
	this.setWrapperDisplay();
	return promptInfo;
};

$tw.utils.PasswordPrompt.prototype.removePrompt = function(promptInfo) {
	var i = this.passwordPrompts.indexOf(promptInfo);
	if(i !== -1) {
		this.passwordPrompts.splice(i,1);
		promptInfo.form.parentNode.removeChild(promptInfo.form);
		this.setWrapperDisplay();
	}
}

/*
Crypto helper object for encrypted content. It maintains the password text in a closure, and provides methods to change
the password, and to encrypt/decrypt a block of text
*/
$tw.utils.Crypto = function() {
	var sjcl = $tw.node ? (global.sjcl || require("./sjcl.js")) : window.sjcl,
		currentPassword = null,
		callSjcl = function(method,inputText,password) {
			password = password || currentPassword;
			var outputText;
			try {
				if(password) {
					outputText = sjcl[method](password,inputText);
				}
			} catch(ex) {
				console.log("Crypto error:" + ex);
				outputText = null;
			}
			return outputText;
		};
	this.setPassword = function(newPassword) {
		currentPassword = newPassword;
		this.updateCryptoStateTiddler();
	};
	this.updateCryptoStateTiddler = function() {
		if($tw.wiki) {
			var state = currentPassword ? "yes" : "no",
				tiddler = $tw.wiki.getTiddler("$:/isEncrypted");
			if(!tiddler || tiddler.fields.text !== state) {
				$tw.wiki.addTiddler(new $tw.Tiddler({title: "$:/isEncrypted", text: state}));
			}
		}
	};
	this.hasPassword = function() {
		return !!currentPassword;
	}
	this.encrypt = function(text,password) {
		return callSjcl("encrypt",text,password);
	};
	this.decrypt = function(text,password) {
		return callSjcl("decrypt",text,password);
	};
};

/////////////////////////// Module mechanism

/*
Execute the module named 'moduleName'. The name can optionally be relative to the module named 'moduleRoot'
*/
$tw.modules.execute = function(moduleName,moduleRoot) {
	var name = moduleName;
	if(moduleName.charAt(0) === ".") {
		name = $tw.utils.resolvePath(moduleName,moduleRoot)
	}
	if(!$tw.modules.titles[name]) {
		if($tw.modules.titles[name + ".js"]) {
			name = name + ".js";
		} else if($tw.modules.titles[name + "/index.js"]) {
			name = name + "/index.js";
		} else if($tw.modules.titles[moduleName]) {
			name = moduleName;
		} else if($tw.modules.titles[moduleName + ".js"]) {
			name = moduleName + ".js";
		} else if($tw.modules.titles[moduleName + "/index.js"]) {
			name = moduleName + "/index.js";
		}
	}
	var moduleInfo = $tw.modules.titles[name],
		tiddler = $tw.wiki.getTiddler(name),
		_exports = {},
		sandbox = {
			module: {exports: _exports},
			//moduleInfo: moduleInfo,
			exports: _exports,
			console: console,
			setInterval: setInterval,
			clearInterval: clearInterval,
			setTimeout: setTimeout,
			clearTimeout: clearTimeout,
			Buffer: $tw.browser ? undefined : Buffer,
			$tw: $tw,
			require: function(title) {
				return $tw.modules.execute(title, name);
			}
		};

	Object.defineProperty(sandbox.module, "id", {
		value: name,
		writable: false,
		enumerable: true,
		configurable: false
	});

	if(!$tw.browser) {
		$tw.utils.extend(sandbox,{
			process: process
		});
	} else {
		/*
		CommonJS optional require.main property:
		 In a browser we offer a fake main module which points back to the boot function
		 (Theoretically, this may allow TW to eventually load itself as a module in the browser)
		*/
		Object.defineProperty(sandbox.require, "main", {
			value: (typeof(require) !== "undefined") ? require.main : {TiddlyWiki: _boot},
			writable: false,
			enumerable: true,
			configurable: false
		});
	}
	if(!moduleInfo) {
		// We could not find the module on this path
		// Try to defer to browserify etc, or node
		var deferredModule;
		if($tw.browser) {
			if(window.require) {
				try {
					return window.require(moduleName);
				} catch(e) {}
			}
			throw "Cannot find module named '" + moduleName + "' required by module '" + moduleRoot + "', resolved to " + name;
		} else {
			// If we don't have a module with that name, let node.js try to find it
			return require(moduleName);
		}
	}
	// Execute the module if we haven't already done so
	if(!moduleInfo.exports) {
		try {
			// Check the type of the definition
			if(typeof moduleInfo.definition === "function") { // Function
				moduleInfo.exports = _exports;
				moduleInfo.definition(moduleInfo,moduleInfo.exports,sandbox.require);
			} else if(typeof moduleInfo.definition === "string") { // String
				moduleInfo.exports = _exports;
				$tw.utils.evalSandboxed(moduleInfo.definition,sandbox,tiddler.fields.title);
				if(sandbox.module.exports) {
					moduleInfo.exports = sandbox.module.exports; //more codemirror workaround
				}
			} else { // Object
				moduleInfo.exports = moduleInfo.definition;
			}
		} catch(e) {
			if (e instanceof SyntaxError) {
				var line = e.lineNumber || e.line; // Firefox || Safari
				if (typeof(line) != "undefined" && line !== null) {
					$tw.utils.error("Syntax error in boot module " + name + ":" + line + ":\n" + e.stack);
				} else if(!$tw.browser) {
					// this is the only way to get node.js to display the line at which the syntax error appeared,
					// and $tw.utils.error would exit anyway
					// cf. https://bugs.chromium.org/p/v8/issues/detail?id=2589
					throw e;
				} else {
					// Opera: line number is included in e.message
					// Chrome/IE: there's currently no way to get the line number
					$tw.utils.error("Syntax error in boot module " + name + ": " + e.message + "\n" + e.stack);
				}
			} else {
				// line number should be included in e.stack for runtime errors
				$tw.utils.error("Error executing boot module " + name + ": " + JSON.stringify(e) + "\n\n" + e.stack);
			}
		}
	}
	// Return the exports of the module
	return moduleInfo.exports;
};

/*
Apply a callback to each module of a particular type
	moduleType: type of modules to enumerate
	callback: function called as callback(title,moduleExports) for each module
*/
$tw.modules.forEachModuleOfType = function(moduleType,callback) {
	var modules = $tw.modules.types[moduleType];
	$tw.utils.each(modules,function(element,title) {
		callback(title,$tw.modules.execute(title));
	});
};

/*
Get all the modules of a particular type in a hashmap by their `name` field
*/
$tw.modules.getModulesByTypeAsHashmap = function(moduleType,nameField) {
	nameField = nameField || "name";
	var results = Object.create(null);
	$tw.modules.forEachModuleOfType(moduleType,function(title,module) {
		results[module[nameField]] = module;
	});
	return results;
};

/*
Apply the exports of the modules of a particular type to a target object
*/
$tw.modules.applyMethods = function(moduleType,targetObject) {
	if(!targetObject) {
		targetObject = Object.create(null);
	}
	$tw.modules.forEachModuleOfType(moduleType,function(title,module) {
		$tw.utils.each(module,function(element,title,object) {
			targetObject[title] = module[title];
		});
	});
	return targetObject;
};

/*
Return an array of classes created from the modules of a specified type. Each module should export the properties to be added to those of the optional base class
*/
$tw.modules.createClassesFromModules = function(moduleType,subType,baseClass) {
	var classes = Object.create(null);
	$tw.modules.forEachModuleOfType(moduleType,function(title,moduleExports) {
		if(!subType || moduleExports.types[subType]) {
			var newClass = function() {};
			if(baseClass) {
				newClass.prototype = new baseClass();
				newClass.prototype.constructor = baseClass;
			}
			$tw.utils.extend(newClass.prototype,moduleExports);
			classes[moduleExports.name] = newClass;
		}
	});
	return classes;
};

/////////////////////////// Barebones tiddler object

/*
Construct a tiddler object from a hashmap of tiddler fields. If multiple hasmaps are provided they are merged,
taking precedence to the right
*/
$tw.Tiddler = function(/* [fields,] fields */) {
	this.fields = Object.create(null);
	this.cache = Object.create(null);
	for(var c=0; c<arguments.length; c++) {
		var arg = arguments[c],
			src = (arg instanceof $tw.Tiddler) ? arg.fields : arg;
		for(var t in src) {
			if(src[t] === undefined || src[t] === null) {
				if(t in this.fields) {
					delete this.fields[t]; // If we get a field that's undefined, delete any previous field value
				}
			} else {
				// Parse the field with the associated field module (if any)
				var fieldModule = $tw.Tiddler.fieldModules[t],
					value;
				if(fieldModule && fieldModule.parse) {
					value = fieldModule.parse.call(this,src[t]);
				} else {
					value = src[t];
				}
				// Freeze the field to keep it immutable
				if(value != null && typeof value === "object") {
					Object.freeze(value);
				}
				this.fields[t] = value;
			}
		}
	}
	// Freeze the tiddler against modification
	Object.freeze(this.fields);
	Object.freeze(this);
};

$tw.Tiddler.prototype.hasField = function(field) {
	return $tw.utils.hop(this.fields,field);
};

/*
Compare two tiddlers for equality
tiddler: the tiddler to compare
excludeFields: array of field names to exclude from the comparison
*/
$tw.Tiddler.prototype.isEqual = function(tiddler,excludeFields) {
	if(!(tiddler instanceof $tw.Tiddler)) {
		return false;
	}
	excludeFields = excludeFields || [];
	var self = this,
		differences = []; // Fields that have differences
	// Add to the differences array
	function addDifference(fieldName) {
		// Check for this field being excluded
		if(excludeFields.indexOf(fieldName) === -1) {
			// Save the field as a difference
			$tw.utils.pushTop(differences,fieldName);
		}
	}
	// Returns true if the two values of this field are equal
	function isFieldValueEqual(fieldName) {
		var valueA = self.fields[fieldName],
			valueB = tiddler.fields[fieldName];
		// Check for identical string values
		if(typeof(valueA) === "string" && typeof(valueB) === "string" && valueA === valueB) {
			return true;
		}
		// Check for identical array values
		if($tw.utils.isArray(valueA) && $tw.utils.isArray(valueB) && $tw.utils.isArrayEqual(valueA,valueB)) {
			return true;
		}
		// Check for identical date values
		if($tw.utils.isDate(valueA) && $tw.utils.isDate(valueB) && valueA.getTime() === valueB.getTime()) {
			return true;
		}
		// Otherwise the fields must be different
		return false;
	}
	// Compare our fields
	for(var fieldName in this.fields) {
		if(!isFieldValueEqual(fieldName)) {
			addDifference(fieldName);
		}
	}
	// There's a difference for every field in the other tiddler that we don't have
	for(fieldName in tiddler.fields) {
		if(!(fieldName in this.fields)) {
			addDifference(fieldName);
		}
	}
	// Return whether there were any differences
	return differences.length === 0;
};

/*
Register and install the built in tiddler field modules
*/
$tw.modules.define("$:/boot/tiddlerfields/modified","tiddlerfield",{
	name: "modified",
	parse: $tw.utils.parseDate,
	stringify: $tw.utils.stringifyDate
});
$tw.modules.define("$:/boot/tiddlerfields/created","tiddlerfield",{
	name: "created",
	parse: $tw.utils.parseDate,
	stringify: $tw.utils.stringifyDate
});
$tw.modules.define("$:/boot/tiddlerfields/color","tiddlerfield",{
	name: "color",
	editTag: "input",
	editType: "color"
});
$tw.modules.define("$:/boot/tiddlerfields/tags","tiddlerfield",{
	name: "tags",
	parse: $tw.utils.parseStringArray,
	stringify: $tw.utils.stringifyList
});
$tw.modules.define("$:/boot/tiddlerfields/list","tiddlerfield",{
	name: "list",
	parse: $tw.utils.parseStringArray,
	stringify: $tw.utils.stringifyList
});

/////////////////////////// Barebones wiki store

/*
Wiki constructor. State is stored in private members that only a small number of privileged accessor methods have direct access. Methods added via the prototype have to use these accessors and cannot access the state data directly.
options include:
enableIndexers - Array of indexer names to enable, or null to use all available indexers
*/
$tw.Wiki = function(options) {
	options = options || {};
	var self = this,
		tiddlers = Object.create(null), // Hashmap of tiddlers
		tiddlerTitles = null, // Array of tiddler titles
		getTiddlerTitles = function() {
			if(!tiddlerTitles) {
				tiddlerTitles = Object.keys(tiddlers);
			}
			return tiddlerTitles;
		},
		pluginTiddlers = [], // Array of tiddlers containing registered plugins, ordered by priority
		pluginInfo = Object.create(null), // Hashmap of parsed plugin content
		shadowTiddlers = Object.create(null), // Hashmap by title of {source:, tiddler:}
		shadowTiddlerTitles = null,
		getShadowTiddlerTitles = function() {
			if(!shadowTiddlerTitles) {
				shadowTiddlerTitles = Object.keys(shadowTiddlers);
			}
			return shadowTiddlerTitles;
		},
		enableIndexers = options.enableIndexers || null,
		indexers = [],
		indexersByName = Object.create(null);

	this.addIndexer = function(indexer,name) {
		// Bail if this indexer is not enabled
		if(enableIndexers && enableIndexers.indexOf(name) === -1) {
			return;
		}
		indexers.push(indexer);
		indexersByName[name] = indexer;
		indexer.init();
	};

	this.getIndexer = function(name) {
		return indexersByName[name] || null;
	};

	// Add a tiddler to the store
	this.addTiddler = function(tiddler) {
		if(!(tiddler instanceof $tw.Tiddler)) {
			tiddler = new $tw.Tiddler(tiddler);
		}
		// Save the tiddler
		if(tiddler) {
			var title = tiddler.fields.title;
			if(title) {
// Uncomment the following line for detailed logs of all tiddler writes
// console.log("Adding",title,tiddler)
				// Record the old tiddler state
				var updateDescriptor = {
					old: {
						tiddler: this.getTiddler(title),
						shadow: this.isShadowTiddler(title),
						exists: this.tiddlerExists(title)
					}
				}
				// Save the new tiddler
				tiddlers[title] = tiddler;
				// Check we've got it's title
				if(tiddlerTitles && tiddlerTitles.indexOf(title) === -1) {
					tiddlerTitles.push(title);
				}
				// Record the new tiddler state
				updateDescriptor["new"] = {
					tiddler: tiddler,
					shadow: this.isShadowTiddler(title),
					exists: this.tiddlerExists(title)
				}
				// Update indexes
				this.clearCache(title);
				this.clearGlobalCache();
				$tw.utils.each(indexers,function(indexer) {
					indexer.update(updateDescriptor);
				});
				// Queue a change event
				this.enqueueTiddlerEvent(title);
			}
		}
	};

	// Delete a tiddler
	this.deleteTiddler = function(title) {
// Uncomment the following line for detailed logs of all tiddler deletions
// console.log("Deleting",title)
		if($tw.utils.hop(tiddlers,title)) {
			// Record the old tiddler state
			var updateDescriptor = {
				old: {
					tiddler: this.getTiddler(title),
					shadow: this.isShadowTiddler(title),
					exists: this.tiddlerExists(title)
				}
			}
			// Delete the tiddler
			delete tiddlers[title];
			// Delete it from the list of titles
			if(tiddlerTitles) {
				var index = tiddlerTitles.indexOf(title);
				if(index !== -1) {
					tiddlerTitles.splice(index,1);
				}				
			}
			// Record the new tiddler state
			updateDescriptor["new"] = {
				tiddler: this.getTiddler(title),
				shadow: this.isShadowTiddler(title),
				exists: this.tiddlerExists(title)
			}
			// Update indexes
			this.clearCache(title);
			this.clearGlobalCache();
			$tw.utils.each(indexers,function(indexer) {
				indexer.update(updateDescriptor);
			});
			// Queue a change event
			this.enqueueTiddlerEvent(title,true);
		}
	};

	// Get a tiddler from the store
	this.getTiddler = function(title) {
		if(title) {
			var t = tiddlers[title];
			if(t instanceof $tw.Tiddler) {
				return t;
			} else if(title !== undefined && shadowTiddlers[title]) {
				return shadowTiddlers[title].tiddler;
			}
			return undefined;
		}
	};

	// Get an array of all tiddler titles
	this.allTitles = function() {
		return getTiddlerTitles().slice(0);
	};

	// Iterate through all tiddler titles
	this.each = function(callback) {
		var titles = getTiddlerTitles(),
			index,titlesLength,title;
		for(index = 0, titlesLength = titles.length; index < titlesLength; index++) {
			title = titles[index];
			callback(tiddlers[title],title);
		}
	};

	// Get an array of all shadow tiddler titles
	this.allShadowTitles = function() {
		return getShadowTiddlerTitles().slice(0);
	};

	// Iterate through all shadow tiddler titles
	this.eachShadow = function(callback) {
		var titles = getShadowTiddlerTitles(),
			index,titlesLength,title;
		for(index = 0, titlesLength = titles.length; index < titlesLength; index++) {
			title = titles[index];
			var shadowInfo = shadowTiddlers[title];
			callback(shadowInfo.tiddler,title);
		}
	};

	// Iterate through all tiddlers and then the shadows
	this.eachTiddlerPlusShadows = function(callback) {
		var index,titlesLength,title,
			titles = getTiddlerTitles();
		for(index = 0, titlesLength = titles.length; index < titlesLength; index++) {
			title = titles[index];
			callback(tiddlers[title],title);
		}
		titles = getShadowTiddlerTitles();
		for(index = 0, titlesLength = titles.length; index < titlesLength; index++) {
			title = titles[index];
			if(!tiddlers[title]) {
				var shadowInfo = shadowTiddlers[title];
				callback(shadowInfo.tiddler,title);
			}
		}
	};

	// Iterate through all the shadows and then the tiddlers
	this.eachShadowPlusTiddlers = function(callback) {
		var index,titlesLength,title,
			titles = getShadowTiddlerTitles();
		for(index = 0, titlesLength = titles.length; index < titlesLength; index++) {
			title = titles[index];
			if(tiddlers[title]) {
				callback(tiddlers[title],title);
			} else {
				var shadowInfo = shadowTiddlers[title];
				callback(shadowInfo.tiddler,title);
			}
		}
		titles = getTiddlerTitles();
		for(index = 0, titlesLength = titles.length; index < titlesLength; index++) {
			title = titles[index];
			if(!shadowTiddlers[title]) {
				callback(tiddlers[title],title);
			}
		}
	};

	// Test for the existence of a tiddler (excludes shadow tiddlers)
	this.tiddlerExists = function(title) {
		return !!$tw.utils.hop(tiddlers,title);
	};

	// Determines if a tiddler is a shadow tiddler, regardless of whether it has been overridden by a real tiddler
	this.isShadowTiddler = function(title) {
		return $tw.utils.hop(shadowTiddlers,title);
	};

	this.getShadowSource = function(title) {
		if($tw.utils.hop(shadowTiddlers,title)) {
			return shadowTiddlers[title].source;
		}
		return null;
	};

	// Get an array of all the currently recognised plugin types
	this.getPluginTypes = function() {
		var types = [];
		$tw.utils.each(pluginTiddlers,function(pluginTiddler) {
			var pluginType = pluginTiddler.fields["plugin-type"];
			if(pluginType && types.indexOf(pluginType) === -1) {
				types.push(pluginType);
			}
		});
		return types;
	};

	// Read plugin info for all plugins, or just an array of titles. Returns the number of plugins updated or deleted
	this.readPluginInfo = function(titles) {
		var results = {
			modifiedPlugins: [],
			deletedPlugins: []
		};
		$tw.utils.each(titles || getTiddlerTitles(),function(title) {
			var tiddler = tiddlers[title];
			if(tiddler) {
				if(tiddler.fields.type === "application/json" && tiddler.hasField("plugin-type") && tiddler.fields.text) {
					pluginInfo[tiddler.fields.title] = JSON.parse(tiddler.fields.text);
					results.modifiedPlugins.push(tiddler.fields.title);
				}
			} else {
				if(pluginInfo[title]) {
					delete pluginInfo[title];					
					results.deletedPlugins.push(title);
				}
			}
		});
		return results;
	};

	// Get plugin info for a plugin
	this.getPluginInfo = function(title) {
		return pluginInfo[title];
	};

	// Register the plugin tiddlers of a particular type, or null/undefined for any type, optionally restricting registration to an array of tiddler titles. Return the array of titles affected
	this.registerPluginTiddlers = function(pluginType,titles) {
		var self = this,
			registeredTitles = [],
			checkTiddler = function(tiddler,title) {
				if(tiddler && tiddler.fields.type === "application/json" && tiddler.fields["plugin-type"] && (!pluginType || tiddler.fields["plugin-type"] === pluginType)) {
					var disablingTiddler = self.getTiddler("$:/config/Plugins/Disabled/" + title);
					if(title === "$:/core" || !disablingTiddler || (disablingTiddler.fields.text || "").trim() !== "yes") {
						self.unregisterPluginTiddlers(null,[title]); // Unregister the plugin if it's already registered
						pluginTiddlers.push(tiddler);
						registeredTitles.push(tiddler.fields.title);
					}
				}
			};
		if(titles) {
			$tw.utils.each(titles,function(title) {
				checkTiddler(self.getTiddler(title),title);
			});
		} else {
			this.each(function(tiddler,title) {
				checkTiddler(tiddler,title);
			});
		}
		return registeredTitles;
	};

	// Unregister the plugin tiddlers of a particular type, or null/undefined for any type, optionally restricting unregistering to an array of tiddler titles. Returns an array of the titles affected
	this.unregisterPluginTiddlers = function(pluginType,titles) {
		var self = this,
			unregisteredTitles = [];
		// Remove any previous registered plugins of this type
		for(var t=pluginTiddlers.length-1; t>=0; t--) {
			var tiddler = pluginTiddlers[t];
			if(tiddler.fields["plugin-type"] && (!pluginType || tiddler.fields["plugin-type"] === pluginType) && (!titles || titles.indexOf(tiddler.fields.title) !== -1)) {
				unregisteredTitles.push(tiddler.fields.title);
				pluginTiddlers.splice(t,1);
			}
		}
		return unregisteredTitles;
	};

	// Unpack the currently registered plugins, creating shadow tiddlers for their constituent tiddlers
	this.unpackPluginTiddlers = function() {
		var self = this;
		// Sort the plugin titles by the `plugin-priority` field
		pluginTiddlers.sort(function(a,b) {
			if("plugin-priority" in a.fields && "plugin-priority" in b.fields) {
				return a.fields["plugin-priority"] - b.fields["plugin-priority"];
			} else if("plugin-priority" in a.fields) {
				return -1;
			} else if("plugin-priority" in b.fields) {
				return +1;
			} else if(a.fields.title < b.fields.title) {
				return -1;
			} else if(a.fields.title === b.fields.title) {
				return 0;
			} else {
				return +1;
			}
		});
		// Now go through the plugins in ascending order and assign the shadows
		shadowTiddlers = Object.create(null);
		$tw.utils.each(pluginTiddlers,function(tiddler) {
			// Extract the constituent tiddlers
			if($tw.utils.hop(pluginInfo,tiddler.fields.title)) {
				$tw.utils.each(pluginInfo[tiddler.fields.title].tiddlers,function(constituentTiddler,constituentTitle) {
					// Save the tiddler object
					if(constituentTitle) {
						shadowTiddlers[constituentTitle] = {
							source: tiddler.fields.title,
							tiddler: new $tw.Tiddler(constituentTiddler,{title: constituentTitle})
						};
					}
				});
			}
		});
		shadowTiddlerTitles = null;
		this.clearCache(null);
		this.clearGlobalCache();
		$tw.utils.each(indexers,function(indexer) {
			indexer.rebuild();
		});
	};

	if(this.addIndexersToWiki) {
		this.addIndexersToWiki();
	}
};

// Dummy methods that will be filled in after boot
$tw.Wiki.prototype.clearCache =
$tw.Wiki.prototype.clearGlobalCache =
$tw.Wiki.prototype.enqueueTiddlerEvent = function() {};

// Add an array of tiddlers
$tw.Wiki.prototype.addTiddlers = function(tiddlers) {
	for(var t=0; t<tiddlers.length; t++) {
		this.addTiddler(tiddlers[t]);
	}
};

/*
Define all modules stored in ordinary tiddlers
*/
$tw.Wiki.prototype.defineTiddlerModules = function() {
	this.each(function(tiddler,title) {
		if(tiddler.hasField("module-type")) {
			switch (tiddler.fields.type) {
				case "application/javascript":
					// We only define modules that haven't already been defined, because in the browser modules in system tiddlers are defined in inline script
					if(!$tw.utils.hop($tw.modules.titles,tiddler.fields.title)) {
						$tw.modules.define(tiddler.fields.title,tiddler.fields["module-type"],tiddler.fields.text);
					}
					break;
				case "application/json":
					$tw.modules.define(tiddler.fields.title,tiddler.fields["module-type"],JSON.parse(tiddler.fields.text));
					break;
				case "application/x-tiddler-dictionary":
					$tw.modules.define(tiddler.fields.title,tiddler.fields["module-type"],$tw.utils.parseFields(tiddler.fields.text));
					break;
			}
		}
	});
};

/*
Register all the module tiddlers that have a module type
*/
$tw.Wiki.prototype.defineShadowModules = function() {
	var self = this;
	this.eachShadow(function(tiddler,title) {
		// Don't define the module if it is overidden by an ordinary tiddler
		if(!self.tiddlerExists(title) && tiddler.hasField("module-type")) {
			// Define the module
			$tw.modules.define(tiddler.fields.title,tiddler.fields["module-type"],tiddler.fields.text);
		}
	});
};

/*
Enable safe mode by deleting any tiddlers that override a shadow tiddler
*/
$tw.Wiki.prototype.processSafeMode = function() {
	var self = this,
		overrides = [];
	// Find the overriding tiddlers
	this.each(function(tiddler,title) {
		if(self.isShadowTiddler(title)) {
			console.log(title);
			overrides.push(title);
		}
	});
	// Assemble a report tiddler
	var titleReportTiddler = "TiddlyWiki Safe Mode",
		report = [];
	report.push("TiddlyWiki has been started in [[safe mode|https://tiddlywiki.com/static/SafeMode.html]]. All plugins are temporarily disabled. Most customisations have been disabled by renaming the following tiddlers:")
	// Delete the overrides
	overrides.forEach(function(title) {
		var tiddler = self.getTiddler(title),
			newTitle = "SAFE: " + title;
		self.deleteTiddler(title);
		self.addTiddler(new $tw.Tiddler(tiddler, {title: newTitle}));
		report.push("* [[" + title + "|" + newTitle + "]]");
	});
	report.push()
	this.addTiddler(new $tw.Tiddler({title: titleReportTiddler, text: report.join("\n\n")}));
	// Set $:/DefaultTiddlers to point to our report
	this.addTiddler(new $tw.Tiddler({title: "$:/DefaultTiddlers", text: "[[" + titleReportTiddler + "]]"}));
};

/*
Extracts tiddlers from a typed block of text, specifying default field values
*/
$tw.Wiki.prototype.deserializeTiddlers = function(type,text,srcFields,options) {
	srcFields = srcFields || Object.create(null);
	options = options || {};
	var deserializer = $tw.Wiki.tiddlerDeserializerModules[options.deserializer],
		fields = Object.create(null);
	if(!deserializer) {
		deserializer = $tw.Wiki.tiddlerDeserializerModules[type];
	}
	if(!deserializer && $tw.utils.getFileExtensionInfo(type)) {
		// If we didn't find the serializer, try converting it from an extension to a content type
		type = $tw.utils.getFileExtensionInfo(type).type;
		deserializer = $tw.Wiki.tiddlerDeserializerModules[type];
	}
	if(!deserializer && $tw.config.contentTypeInfo[type]) {
		// see if this type has a different deserializer registered with it
		type = $tw.config.contentTypeInfo[type].deserializerType;
		deserializer = $tw.Wiki.tiddlerDeserializerModules[type];
	}
	if(!deserializer) {
		// If we still don't have a deserializer, treat it as plain text
		deserializer = $tw.Wiki.tiddlerDeserializerModules["text/plain"];
	}
	for(var f in srcFields) {
		fields[f] = srcFields[f];
	}
	if(deserializer) {
		return deserializer.call(this,text,fields,type);
	} else {
		// Return a raw tiddler for unknown types
		fields.text = text;
		return [fields];
	}
};

/*
Register the built in tiddler deserializer modules
*/
var deserializeHeaderComment = function(text,fields) {
		var headerCommentRegExp = new RegExp($tw.config.jsModuleHeaderRegExpString,"mg"),
			match = headerCommentRegExp.exec(text);
		fields.text = text;
		if(match) {
			fields = $tw.utils.parseFields(match[1].split(/\r?\n\r?\n/mg)[0],fields);
		}
		return [fields];
	};
$tw.modules.define("$:/boot/tiddlerdeserializer/js","tiddlerdeserializer",{
	"application/javascript": deserializeHeaderComment
});
$tw.modules.define("$:/boot/tiddlerdeserializer/css","tiddlerdeserializer",{
	"text/css": deserializeHeaderComment
});
$tw.modules.define("$:/boot/tiddlerdeserializer/tid","tiddlerdeserializer",{
	"application/x-tiddler": function(text,fields) {
		var split = text.split(/\r?\n\r?\n/mg);
		if(split.length >= 1) {
			fields = $tw.utils.parseFields(split[0],fields);
		}
		if(split.length >= 2) {
			fields.text = split.slice(1).join("\n\n");
		}
		return [fields];
	}
});
$tw.modules.define("$:/boot/tiddlerdeserializer/tids","tiddlerdeserializer",{
	"application/x-tiddlers": function(text,fields) {
		var titles = [],
			tiddlers = [],
			match = /\r?\n\r?\n/mg.exec(text);
		if(match) {
			fields = $tw.utils.parseFields(text.substr(0,match.index),fields);
			var lines = text.substr(match.index + match[0].length).split(/\r?\n/mg);
			for(var t=0; t<lines.length; t++) {
				var line = lines[t];
				if(line.charAt(0) !== "#") {
					var colonPos= line.indexOf(":");
					if(colonPos !== -1) {
						var tiddler = $tw.utils.extend(Object.create(null),fields);
						tiddler.title = (tiddler.title || "") + line.substr(0,colonPos).trim();
						if(titles.indexOf(tiddler.title) !== -1) {
							console.log("Warning: .multids file contains multiple definitions for " + tiddler.title);
						}
						titles.push(tiddler.title);
						tiddler.text = line.substr(colonPos + 2).trim();
						tiddlers.push(tiddler);
					}
				}
			}
		}
		return tiddlers;
	}
});
$tw.modules.define("$:/boot/tiddlerdeserializer/txt","tiddlerdeserializer",{
	"text/plain": function(text,fields,type) {
		fields.text = text;
		fields.type = type || "text/plain";
		return [fields];
	}
});
$tw.modules.define("$:/boot/tiddlerdeserializer/html","tiddlerdeserializer",{
	"text/html": function(text,fields) {
		fields.text = text;
		fields.type = "text/html";
		return [fields];
	}
});
$tw.modules.define("$:/boot/tiddlerdeserializer/json","tiddlerdeserializer",{
	"application/json": function(text,fields) {
		var isTiddlerValid = function(data) {
				// Not valid if it's not an object with a title property
				if(typeof(data) !== "object" || !$tw.utils.hop(data,"title")) {
					return false;
				}
				for(var f in data) {
					if($tw.utils.hop(data,f)) {
						// Check field name doesn't contain whitespace or control characters
						if(typeof(data[f]) !== "string" || /[\x00-\x1F\s]/.test(f)) {
							return false;
						}
					}
				}
				return true;
			},
			isTiddlerArrayValid = function(data) {
				for(var t=0; t<data.length; t++) {
					if(!isTiddlerValid(data[t])) {
						return false;
					}
				}
				return true;
			},
			data = JSON.parse(text);
		if($tw.utils.isArray(data) && isTiddlerArrayValid(data)) {
			return data;
		} else if(isTiddlerValid(data)) {
			return [data];
		} else {
			// Plain JSON file
			fields.text = text;
			fields.type = "application/json";
			return [fields];
		}
	}
});

/////////////////////////// Browser definitions

if($tw.browser && !$tw.node) {

/*
Decrypt any tiddlers stored within the element with the ID "encryptedArea". The function is asynchronous to allow the user to be prompted for a password
	callback: function to be called the decryption is complete
*/
$tw.boot.decryptEncryptedTiddlers = function(callback) {
	var encryptedArea = document.getElementById("encryptedStoreArea");
	if(encryptedArea) {
		var encryptedText = encryptedArea.innerHTML,
			prompt = "Enter a password to decrypt this TiddlyWiki";
		// Prompt for the password
		if($tw.utils.hop($tw.boot,"encryptionPrompts")) {
			prompt = $tw.boot.encryptionPrompts.decrypt;
		}
		$tw.passwordPrompt.createPrompt({
			serviceName: prompt,
			noUserName: true,
			submitText: "Decrypt",
			callback: function(data) {
				// Attempt to decrypt the tiddlers
				$tw.crypto.setPassword(data.password);
				var decryptedText = $tw.crypto.decrypt(encryptedText);
				if(decryptedText) {
					var json = JSON.parse(decryptedText);
					for(var title in json) {
						$tw.preloadTiddler(json[title]);
					}
					// Call the callback
					callback();
					// Exit and remove the password prompt
					return true;
				} else {
					// We didn't decrypt everything, so continue to prompt for password
					return false;
				}
			}
		});
	} else {
		// Just invoke the callback straight away if there weren't any encrypted tiddlers
		callback();
	}
};

/*
Register a deserializer that can extract tiddlers from the DOM
*/
$tw.modules.define("$:/boot/tiddlerdeserializer/dom","tiddlerdeserializer",{
	"(DOM)": function(node) {
		var extractTextTiddlers = function(node) {
				var e = node.firstChild;
				while(e && e.nodeName.toLowerCase() !== "pre") {
					e = e.nextSibling;
				}
				var title = node.getAttribute ? node.getAttribute("title") : null;
				if(e && title) {
					var attrs = node.attributes,
						tiddler = {
							text: $tw.utils.htmlDecode(e.innerHTML)
						};
					for(var i=attrs.length-1; i >= 0; i--) {
						tiddler[attrs[i].name] = attrs[i].value;
					}
					return [tiddler];
				} else {
					return null;
				}
			},
			extractModuleTiddlers = function(node) {
				if(node.hasAttribute && node.hasAttribute("data-tiddler-title")) {
					var text = node.innerHTML,
						s = text.indexOf("{"),
						e = text.lastIndexOf("}");
					if(node.hasAttribute("data-module") && s !== -1 && e !== -1) {
						text = text.substring(s+1,e);
					}
					var fields = {text: text},
						attributes = node.attributes;
					for(var a=0; a<attributes.length; a++) {
						if(attributes[a].nodeName.substr(0,13) === "data-tiddler-") {
							fields[attributes[a].nodeName.substr(13)] = attributes[a].value;
						}
					}
					return [fields];
				} else {
					return null;
				}
			},
			t,result = [];
		if(node) {
			for(t = 0; t < node.childNodes.length; t++) {
					var childNode = node.childNodes[t],
						tiddlers = extractTextTiddlers(childNode);
					tiddlers = tiddlers || extractModuleTiddlers(childNode);
					if(tiddlers) {
						result.push.apply(result,tiddlers);
					}
			}
		}
		return result;
	}
});

$tw.loadTiddlersBrowser = function() {
	// In the browser, we load tiddlers from certain elements
	var containerIds = [
		"libraryModules",
		"modules",
		"bootKernelPrefix",
		"bootKernel",
		"styleArea",
		"storeArea",
		"systemArea"
	];
	for(var t=0; t<containerIds.length; t++) {
		$tw.wiki.addTiddlers($tw.wiki.deserializeTiddlers("(DOM)",document.getElementById(containerIds[t])));
	}
};

} else {

/////////////////////////// Server definitions

/*
Get any encrypted tiddlers
*/
$tw.boot.decryptEncryptedTiddlers = function(callback) {
	// Storing encrypted tiddlers on the server isn't supported yet
	callback();
};

} // End of if($tw.browser && !$tw.node)

/////////////////////////// Node definitions

if($tw.node) {

/*
Load the tiddlers contained in a particular file (and optionally extract fields from the accompanying .meta file) returned as {filepath:,type:,tiddlers:[],hasMetaFile:}
*/
$tw.loadTiddlersFromFile = function(filepath,fields) {
	var ext = path.extname(filepath),
		extensionInfo = $tw.utils.getFileExtensionInfo(ext),
		type = extensionInfo ? extensionInfo.type : null,
		typeInfo = type ? $tw.config.contentTypeInfo[type] : null,
		data = fs.readFileSync(filepath,typeInfo ? typeInfo.encoding : "utf8"),
		tiddlers = $tw.wiki.deserializeTiddlers(ext,data,fields),
		metadata = $tw.loadMetadataForFile(filepath);
	if(metadata) {
		if(type === "application/json") {
			tiddlers = [{text: data, type: "application/json"}];
		}
		tiddlers = [$tw.utils.extend({},tiddlers[0],metadata)];
	}
	return {filepath: filepath, type: type, tiddlers: tiddlers, hasMetaFile: !!metadata};
};

/*
Load the metadata fields in the .meta file corresponding to a particular file
*/
$tw.loadMetadataForFile = function(filepath) {
	var metafilename = filepath + ".meta";
	if(fs.existsSync(metafilename)) {
		return $tw.utils.parseFields(fs.readFileSync(metafilename,"utf8") || "");
	} else {
		return null;
	}
};

/*
A default set of files for TiddlyWiki to ignore during load.
This matches what NPM ignores, and adds "*.meta" to ignore tiddler
metadata files.
*/
$tw.boot.excludeRegExp = /^\.DS_Store$|^.*\.meta$|^\..*\.swp$|^\._.*$|^\.git$|^\.hg$|^\.lock-wscript$|^\.svn$|^\.wafpickle-.*$|^CVS$|^npm-debug\.log$/;

/*
Load all the tiddlers recursively from a directory, including honouring `tiddlywiki.files` files for drawing in external files. Returns an array of {filepath:,type:,tiddlers: [{..fields...}],hasMetaFile:}. Note that no file information is returned for externally loaded tiddlers, just the `tiddlers` property.
*/
$tw.loadTiddlersFromPath = function(filepath,excludeRegExp) {
	excludeRegExp = excludeRegExp || $tw.boot.excludeRegExp;
	var tiddlers = [];
	if(fs.existsSync(filepath)) {
		var stat = fs.statSync(filepath);
		if(stat.isDirectory()) {
			var files = fs.readdirSync(filepath);
			// Look for a tiddlywiki.files file
			if(files.indexOf("tiddlywiki.files") !== -1) {
				Array.prototype.push.apply(tiddlers,$tw.loadTiddlersFromSpecification(filepath,excludeRegExp));
			} else {
				// If not, read all the files in the directory
				$tw.utils.each(files,function(file) {
					if(!excludeRegExp.test(file) && file !== "plugin.info") {
						tiddlers.push.apply(tiddlers,$tw.loadTiddlersFromPath(filepath + path.sep + file,excludeRegExp));
					}
				});
			}
		} else if(stat.isFile()) {
			tiddlers.push($tw.loadTiddlersFromFile(filepath,{title: filepath}));
		}
	}
	return tiddlers;
};

/*
Load all the tiddlers defined by a `tiddlywiki.files` specification file
filepath: pathname of the directory containing the specification file
*/
$tw.loadTiddlersFromSpecification = function(filepath,excludeRegExp) {
	var tiddlers = [];
	// Read the specification
	var filesInfo = JSON.parse(fs.readFileSync(filepath + path.sep + "tiddlywiki.files","utf8"));
	// Helper to process a file
	var processFile = function(filename,isTiddlerFile,fields,isEditableFile) {
		var extInfo = $tw.config.fileExtensionInfo[path.extname(filename)],
			type = (extInfo || {}).type || fields.type || "text/plain",
			typeInfo = $tw.config.contentTypeInfo[type] || {},
			pathname = path.resolve(filepath,filename),
			text = fs.readFileSync(pathname,typeInfo.encoding || "utf8"),
			metadata = $tw.loadMetadataForFile(pathname) || {},
			fileTiddlers;
		if(isTiddlerFile) {
			fileTiddlers = $tw.wiki.deserializeTiddlers(path.extname(pathname),text,metadata) || [];
		} else {
			fileTiddlers =  [$tw.utils.extend({text: text},metadata)];
		}
		var combinedFields = $tw.utils.extend({},fields,metadata);
		$tw.utils.each(fileTiddlers,function(tiddler) {
			$tw.utils.each(combinedFields,function(fieldInfo,name) {
				if(typeof fieldInfo === "string" || $tw.utils.isArray(fieldInfo)) {
					tiddler[name] = fieldInfo;
				} else {
					var value = tiddler[name];
					switch(fieldInfo.source) {
						case "filename":
							value = path.basename(filename);
							break;
						case "filename-uri-decoded":
							value = decodeURIComponent(path.basename(filename));
							break;
						case "basename":
							value = path.basename(filename,path.extname(filename));
							break;
						case "basename-uri-decoded":
							value = decodeURIComponent(path.basename(filename,path.extname(filename)));
							break;
						case "extname":
							value = path.extname(filename);
							break;
						case "created":
							value = new Date(fs.statSync(pathname).birthtime);
							break;
						case "modified":
							value = new Date(fs.statSync(pathname).mtime);
							break;
					}
					if(fieldInfo.prefix) {
						value = fieldInfo.prefix + value;
					}
					if(fieldInfo.suffix) {
						value = value + fieldInfo.suffix;
					}
					tiddler[name] = value;
				}
			});
		});
		if(isEditableFile) {
			tiddlers.push({filepath: pathname, hasMetaFile: !!metadata && !isTiddlerFile, isEditableFile: true, tiddlers: fileTiddlers});
		} else {
			tiddlers.push({tiddlers: fileTiddlers});
		}
	};
	// Process the listed tiddlers
	$tw.utils.each(filesInfo.tiddlers,function(tidInfo) {
		if(tidInfo.prefix && tidInfo.suffix) {
			tidInfo.fields.text = {prefix: tidInfo.prefix,suffix: tidInfo.suffix};
		} else if(tidInfo.prefix) {
			tidInfo.fields.text = {prefix: tidInfo.prefix};
		} else if(tidInfo.suffix) {
			tidInfo.fields.text = {suffix: tidInfo.suffix};
		}
		processFile(tidInfo.file,tidInfo.isTiddlerFile,tidInfo.fields);
	});
	// Process any listed directories
	$tw.utils.each(filesInfo.directories,function(dirSpec) {
		// Read literal directories directly
		if(typeof dirSpec === "string") {
			var pathname = path.resolve(filepath,dirSpec);
			if(fs.existsSync(pathname) && fs.statSync(pathname).isDirectory()) {
				tiddlers.push.apply(tiddlers,$tw.loadTiddlersFromPath(pathname,excludeRegExp));
			}
		} else {
			// Process directory specifier
			var dirPath = path.resolve(filepath,dirSpec.path);
			if(fs.existsSync(dirPath) && fs.statSync(dirPath).isDirectory()) {
				var	files = fs.readdirSync(dirPath),
					fileRegExp = new RegExp(dirSpec.filesRegExp || "^.*$"),
					metaRegExp = /^.*\.meta$/;
				for(var t=0; t<files.length; t++) {
					var filename = files[t];
					if(filename !== "tiddlywiki.files" && !metaRegExp.test(filename) && fileRegExp.test(filename)) {
						processFile(dirPath + path.sep + filename,dirSpec.isTiddlerFile,dirSpec.fields,dirSpec.isEditableFile);
					}
				}
			} else {
				console.log("Warning: a directory in a tiddlywiki.files file does not exist.");
				console.log("dirPath: " + dirPath);	
				console.log("tiddlywiki.files location: " + filepath);
			}
		}
	});
	return tiddlers;
};

/*
Load the tiddlers from a plugin folder, and package them up into a proper JSON plugin tiddler
*/
$tw.loadPluginFolder = function(filepath,excludeRegExp) {
	excludeRegExp = excludeRegExp || $tw.boot.excludeRegExp;
	var infoPath = filepath + path.sep + "plugin.info";
	if(fs.existsSync(filepath) && fs.statSync(filepath).isDirectory()) {
		// Read the plugin information
		if(!fs.existsSync(infoPath) || !fs.statSync(infoPath).isFile()) {
			console.log("Warning: missing plugin.info file in " + filepath);
			return null;
		}
		var pluginInfo = JSON.parse(fs.readFileSync(infoPath,"utf8"));
		// Read the plugin files
		var pluginFiles = $tw.loadTiddlersFromPath(filepath,excludeRegExp);
		// Save the plugin tiddlers into the plugin info
		pluginInfo.tiddlers = pluginInfo.tiddlers || Object.create(null);
		for(var f=0; f<pluginFiles.length; f++) {
			var tiddlers = pluginFiles[f].tiddlers;
			for(var t=0; t<tiddlers.length; t++) {
				var tiddler= tiddlers[t];
				if(tiddler.title) {
					pluginInfo.tiddlers[tiddler.title] = tiddler;
				}
			}
		}
		// Give the plugin the same version number as the core if it doesn't have one
		if(!("version" in pluginInfo)) {
			pluginInfo.version = $tw.packageInfo.version;
		}
		// Use "plugin" as the plugin-type if we don't have one
		if(!("plugin-type" in pluginInfo)) {
			pluginInfo["plugin-type"] = "plugin";
		}
		pluginInfo.dependents = pluginInfo.dependents || [];
		pluginInfo.type = "application/json";
		// Set plugin text
		pluginInfo.text = JSON.stringify({tiddlers: pluginInfo.tiddlers},null,4);
		delete pluginInfo.tiddlers;
		// Deserialise array fields (currently required for the dependents field)
		for(var field in pluginInfo) {
			if($tw.utils.isArray(pluginInfo[field])) {
				pluginInfo[field] = $tw.utils.stringifyList(pluginInfo[field]);
			}
		}
		return pluginInfo;
	} else {
			return null;
	}
};

/*
name: Name of the plugin to find
paths: array of file paths to search for it
Returns the path of the plugin folder
*/
$tw.findLibraryItem = function(name,paths) {
	var pathIndex = 0;
	do {
		var pluginPath = path.resolve(paths[pathIndex],"./" + name)
		if(fs.existsSync(pluginPath) && fs.statSync(pluginPath).isDirectory()) {
			return pluginPath;
		}
	} while(++pathIndex < paths.length);
	return null;
};

/*
name: Name of the plugin to load
paths: array of file paths to search for it
*/
$tw.loadPlugin = function(name,paths) {
	var pluginPath = $tw.findLibraryItem(name,paths);
	if(pluginPath) {
		var pluginFields = $tw.loadPluginFolder(pluginPath);
		if(pluginFields) {
			$tw.wiki.addTiddler(pluginFields);
			return;
		}
	}
	console.log("Warning: Cannot find plugin '" + name + "'");
};

/*
libraryPath: Path of library folder for these plugins (relative to core path)
envVar: Environment variable name for these plugins
Returns an array of search paths
*/
$tw.getLibraryItemSearchPaths = function(libraryPath,envVar) {
	var pluginPaths = [path.resolve($tw.boot.corePath,libraryPath)],
		env = process.env[envVar];
	if(env) {
		env.split(path.delimiter).map(function(item) {
			if(item) {
				pluginPaths.push(item);
			}
		});
	}
	return pluginPaths;
};

/*
plugins: Array of names of plugins (eg, "tiddlywiki/filesystemadaptor")
libraryPath: Path of library folder for these plugins (relative to core path)
envVar: Environment variable name for these plugins
*/
$tw.loadPlugins = function(plugins,libraryPath,envVar) {
	if(plugins) {
		var pluginPaths = $tw.getLibraryItemSearchPaths(libraryPath,envVar);
		for(var t=0; t<plugins.length; t++) {
			$tw.loadPlugin(plugins[t],pluginPaths);
		}
	}
};

/*
path: path of wiki directory
options:
	parentPaths: array of parent paths that we mustn't recurse into
	readOnly: true if the tiddler file paths should not be retained
*/
$tw.loadWikiTiddlers = function(wikiPath,options) {
	options = options || {};
	var parentPaths = options.parentPaths || [],
		wikiInfoPath = path.resolve(wikiPath,$tw.config.wikiInfo),
		wikiInfo,
		pluginFields;
	// Bail if we don't have a wiki info file
	if(fs.existsSync(wikiInfoPath)) {
		wikiInfo = JSON.parse(fs.readFileSync(wikiInfoPath,"utf8"));
	} else {
		return null;
	}
	// Save the path to the tiddlers folder for the filesystemadaptor
	var config = wikiInfo.config || {};
	if($tw.boot.wikiPath == wikiPath) {
		$tw.boot.wikiTiddlersPath = path.resolve($tw.boot.wikiPath,config["default-tiddler-location"] || $tw.config.wikiTiddlersSubDir);
	}
	// Load any parent wikis
	if(wikiInfo.includeWikis) {
		parentPaths = parentPaths.slice(0);
		parentPaths.push(wikiPath);
		$tw.utils.each(wikiInfo.includeWikis,function(info) {
			if(typeof info === "string") {
				info = {path: info};
			}
			var resolvedIncludedWikiPath = path.resolve(wikiPath,info.path);
			if(parentPaths.indexOf(resolvedIncludedWikiPath) === -1) {
				var subWikiInfo = $tw.loadWikiTiddlers(resolvedIncludedWikiPath,{
					parentPaths: parentPaths,
					readOnly: info["read-only"]
				});
				// Merge the build targets
				wikiInfo.build = $tw.utils.extend([],subWikiInfo.build,wikiInfo.build);
			} else {
				$tw.utils.error("Cannot recursively include wiki " + resolvedIncludedWikiPath);
			}
		});
	}
	// Load any plugins, themes and languages listed in the wiki info file
	$tw.loadPlugins(wikiInfo.plugins,$tw.config.pluginsPath,$tw.config.pluginsEnvVar);
	$tw.loadPlugins(wikiInfo.themes,$tw.config.themesPath,$tw.config.themesEnvVar);
	$tw.loadPlugins(wikiInfo.languages,$tw.config.languagesPath,$tw.config.languagesEnvVar);
	// Load the wiki files, registering them as writable
	var resolvedWikiPath = path.resolve(wikiPath,$tw.config.wikiTiddlersSubDir);
	$tw.utils.each($tw.loadTiddlersFromPath(resolvedWikiPath),function(tiddlerFile) {
		if(!options.readOnly && tiddlerFile.filepath) {
			$tw.utils.each(tiddlerFile.tiddlers,function(tiddler) {
				$tw.boot.files[tiddler.title] = {
					filepath: tiddlerFile.filepath,
					type: tiddlerFile.type,
					hasMetaFile: tiddlerFile.hasMetaFile,
					isEditableFile: config["retain-original-tiddler-path"] || tiddlerFile.isEditableFile || tiddlerFile.filepath.indexOf($tw.boot.wikiTiddlersPath) !== 0
				};
			});
		}
		$tw.wiki.addTiddlers(tiddlerFile.tiddlers);
	});
	if ($tw.boot.wikiPath == wikiPath) {
		// Save the original tiddler file locations if requested
		var output = {}, relativePath, fileInfo;
		for(var title in $tw.boot.files) {
			fileInfo = $tw.boot.files[title];
			if(fileInfo.isEditableFile) {
				relativePath = path.relative($tw.boot.wikiTiddlersPath,fileInfo.filepath);
				output[title] =
					path.sep === "/" ?
					relativePath :
					relativePath.split(path.sep).join("/");
			}
		}
		if(Object.keys(output).length > 0){
			$tw.wiki.addTiddler({title: "$:/config/OriginalTiddlerPaths", type: "application/json", text: JSON.stringify(output)});
		}
	}
	// Load any plugins within the wiki folder
	var wikiPluginsPath = path.resolve(wikiPath,$tw.config.wikiPluginsSubDir);
	if(fs.existsSync(wikiPluginsPath)) {
		var pluginFolders = fs.readdirSync(wikiPluginsPath);
		for(var t=0; t<pluginFolders.length; t++) {
			pluginFields = $tw.loadPluginFolder(path.resolve(wikiPluginsPath,"./" + pluginFolders[t]));
			if(pluginFields) {
				$tw.wiki.addTiddler(pluginFields);
			}
		}
	}
	// Load any themes within the wiki folder
	var wikiThemesPath = path.resolve(wikiPath,$tw.config.wikiThemesSubDir);
	if(fs.existsSync(wikiThemesPath)) {
		var themeFolders = fs.readdirSync(wikiThemesPath);
		for(var t=0; t<themeFolders.length; t++) {
			pluginFields = $tw.loadPluginFolder(path.resolve(wikiThemesPath,"./" + themeFolders[t]));
			if(pluginFields) {
				$tw.wiki.addTiddler(pluginFields);
			}
		}
	}
	// Load any languages within the wiki folder
	var wikiLanguagesPath = path.resolve(wikiPath,$tw.config.wikiLanguagesSubDir);
	if(fs.existsSync(wikiLanguagesPath)) {
		var languageFolders = fs.readdirSync(wikiLanguagesPath);
		for(var t=0; t<languageFolders.length; t++) {
			pluginFields = $tw.loadPluginFolder(path.resolve(wikiLanguagesPath,"./" + languageFolders[t]));
			if(pluginFields) {
				$tw.wiki.addTiddler(pluginFields);
			}
		}
	}
	return wikiInfo;
};

$tw.loadTiddlersNode = function() {
	// Load the boot tiddlers
	$tw.utils.each($tw.loadTiddlersFromPath($tw.boot.bootPath),function(tiddlerFile) {
		$tw.wiki.addTiddlers(tiddlerFile.tiddlers);
	});
	// Load the core tiddlers
	$tw.wiki.addTiddler($tw.loadPluginFolder($tw.boot.corePath));
	// Load any extra plugins
	$tw.utils.each($tw.boot.extraPlugins,function(name) {
		if(name.charAt(0) === "+") { // Relative path to plugin
			var pluginFields = $tw.loadPluginFolder(name.substring(1));
			if(pluginFields) {
				$tw.wiki.addTiddler(pluginFields);
			}
		} else {
			var parts = name.split("/"),
				type = parts[0];
			if(parts.length  === 3 && ["plugins","themes","languages"].indexOf(type) !== -1) {
				$tw.loadPlugins([parts[1] + "/" + parts[2]],$tw.config[type + "Path"],$tw.config[type + "EnvVar"]);
			}			
		}
	});
	// Load the tiddlers from the wiki directory
	if($tw.boot.wikiPath) {
		$tw.boot.wikiInfo = $tw.loadWikiTiddlers($tw.boot.wikiPath);
	}
};

// End of if($tw.node)
}

/////////////////////////// Main startup function called once tiddlers have been decrypted

/*
Startup TiddlyWiki
*/
$tw.boot.initStartup = function(options) {
	// Get the URL hash and check for safe mode
	$tw.locationHash = "#";
	if($tw.browser && !$tw.node) {
		if(location.hash === "#:safe") {
			$tw.safeMode = true;
		} else {
			$tw.locationHash = $tw.utils.getLocationHash();
		}
	}
	// Initialise some more $tw properties
	$tw.utils.deepDefaults($tw,{
		modules: { // Information about each module
			titles: Object.create(null), // hashmap by module title of {fn:, exports:, moduleType:}
			types: {} // hashmap by module type of hashmap of exports
		},
		config: { // Configuration overridables
			pluginsPath: "../plugins/",
			themesPath: "../themes/",
			languagesPath: "../languages/",
			editionsPath: "../editions/",
			wikiInfo: "./tiddlywiki.info",
			wikiPluginsSubDir: "./plugins",
			wikiThemesSubDir: "./themes",
			wikiLanguagesSubDir: "./languages",
			wikiTiddlersSubDir: "./tiddlers",
			wikiOutputSubDir: "./output",
			jsModuleHeaderRegExpString: "^\\/\\*\\\\(?:\\r?\\n)((?:^[^\\r\\n]*(?:\\r?\\n))+?)(^\\\\\\*\\/$(?:\\r?\\n)?)",
			fileExtensionInfo: Object.create(null), // Map file extension to {type:}
			contentTypeInfo: Object.create(null), // Map type to {encoding:,extension:}
			pluginsEnvVar: "TIDDLYWIKI_PLUGIN_PATH",
			themesEnvVar: "TIDDLYWIKI_THEME_PATH",
			languagesEnvVar: "TIDDLYWIKI_LANGUAGE_PATH",
			editionsEnvVar: "TIDDLYWIKI_EDITION_PATH"
		},
		log: {}, // Log flags
		unloadTasks: []
	});
	if(!$tw.boot.tasks.readBrowserTiddlers) {
		// For writable tiddler files, a hashmap of title to {filepath:,type:,hasMetaFile:}
		$tw.boot.files = Object.create(null);
		// System paths and filenames
		$tw.boot.bootPath = options.bootPath || path.dirname(module.filename);
		$tw.boot.corePath = path.resolve($tw.boot.bootPath,"../core");
		// If there's no arguments then default to `--help`
		if($tw.boot.argv.length === 0) {
			$tw.boot.argv = ["--help"];
		}
		// Parse any extra plugin references
		$tw.boot.extraPlugins = $tw.boot.extraPlugins || [];
		while($tw.boot.argv[0] && $tw.boot.argv[0].indexOf("+") === 0) {
			$tw.boot.extraPlugins.push($tw.boot.argv[0].substring(1));
			$tw.boot.argv.splice(0,1);
		}
		// If the first command line argument doesn't start with `--` then we
		// interpret it as the path to the wiki folder, which will otherwise default
		// to the current folder
		if($tw.boot.argv[0] && $tw.boot.argv[0].indexOf("--") !== 0) {
			$tw.boot.wikiPath = $tw.boot.argv[0];
			$tw.boot.argv = $tw.boot.argv.slice(1);
		} else {
			$tw.boot.wikiPath = process.cwd();
		}
		// Read package info
		$tw.packageInfo = $tw.packageInfo || require("../package.json");
		// Check node version number
		if(!$tw.utils.checkVersions(process.version.substr(1),$tw.packageInfo.engines.node.substr(2))) {
			$tw.utils.error("TiddlyWiki5 requires node.js version " + $tw.packageInfo.engines.node);
		}
	}
	// Add file extension information
	$tw.utils.registerFileType("text/vnd.tiddlywiki","utf8",".tid");
	$tw.utils.registerFileType("application/x-tiddler","utf8",".tid");
	$tw.utils.registerFileType("application/x-tiddlers","utf8",".multids");
	$tw.utils.registerFileType("application/x-tiddler-html-div","utf8",".tiddler");
	$tw.utils.registerFileType("text/vnd.tiddlywiki2-recipe","utf8",".recipe");
	$tw.utils.registerFileType("text/plain","utf8",".txt");
	$tw.utils.registerFileType("text/css","utf8",".css");
	$tw.utils.registerFileType("text/html","utf8",[".html",".htm"]);
	$tw.utils.registerFileType("application/hta","utf16le",".hta",{deserializerType:"text/html"});
	$tw.utils.registerFileType("application/javascript","utf8",".js");
	$tw.utils.registerFileType("application/json","utf8",".json");
	$tw.utils.registerFileType("application/pdf","base64",".pdf",{flags:["image"]});
	$tw.utils.registerFileType("application/zip","base64",".zip");
	$tw.utils.registerFileType("application/x-zip-compressed","base64",".zip");
	$tw.utils.registerFileType("image/jpeg","base64",[".jpg",".jpeg"],{flags:["image"]});
	$tw.utils.registerFileType("image/jpg","base64",[".jpg",".jpeg"],{flags:["image"]});
	$tw.utils.registerFileType("image/png","base64",".png",{flags:["image"]});
	$tw.utils.registerFileType("image/gif","base64",".gif",{flags:["image"]});
	$tw.utils.registerFileType("image/webp","base64",".webp",{flags:["image"]});
	$tw.utils.registerFileType("image/heic","base64",".heic",{flags:["image"]});
	$tw.utils.registerFileType("image/heif","base64",".heif",{flags:["image"]});
	$tw.utils.registerFileType("image/svg+xml","utf8",".svg",{flags:["image"]});
	$tw.utils.registerFileType("image/x-icon","base64",".ico",{flags:["image"]});
	$tw.utils.registerFileType("application/font-woff","base64",".woff");
	$tw.utils.registerFileType("application/x-font-ttf","base64",".woff");
	$tw.utils.registerFileType("application/font-woff2","base64",".woff2");
	$tw.utils.registerFileType("audio/ogg","base64",".ogg");
	$tw.utils.registerFileType("video/ogg","base64",[".ogm",".ogv",".ogg"]);
	$tw.utils.registerFileType("video/webm","base64",".webm");
	$tw.utils.registerFileType("video/mp4","base64",".mp4");
	$tw.utils.registerFileType("audio/mp3","base64",".mp3");
	$tw.utils.registerFileType("audio/mp4","base64",[".mp4",".m4a"]);
	$tw.utils.registerFileType("text/markdown","utf8",[".md",".markdown"],{deserializerType:"text/x-markdown"});
	$tw.utils.registerFileType("text/x-markdown","utf8",[".md",".markdown"]);
	$tw.utils.registerFileType("application/enex+xml","utf8",".enex");
	$tw.utils.registerFileType("application/vnd.openxmlformats-officedocument.wordprocessingml.document","base64",".docx");
	$tw.utils.registerFileType("application/vnd.openxmlformats-officedocument.spreadsheetml.sheet","base64",".xlsx");
	$tw.utils.registerFileType("application/vnd.openxmlformats-officedocument.presentationml.presentation","base64",".pptx");
	$tw.utils.registerFileType("text/x-bibtex","utf8",".bib",{deserializerType:"application/x-bibtex"});
	$tw.utils.registerFileType("application/x-bibtex","utf8",".bib");
	$tw.utils.registerFileType("application/epub+zip","base64",".epub");
	$tw.utils.registerFileType("application/octet-stream","base64",".octet-stream");
	// Create the wiki store for the app
	$tw.wiki = new $tw.Wiki();
	// Install built in tiddler fields modules
	$tw.Tiddler.fieldModules = $tw.modules.getModulesByTypeAsHashmap("tiddlerfield");
	// Install the tiddler deserializer modules
	$tw.Wiki.tiddlerDeserializerModules = Object.create(null);
	$tw.modules.applyMethods("tiddlerdeserializer",$tw.Wiki.tiddlerDeserializerModules);
	// Call unload handlers in the browser
	if($tw.browser) {
		window.onbeforeunload = function(event) {
			event = event || {};
			var result;
			$tw.utils.each($tw.unloadTasks,function(task) {
				var r = task(event);
				if(r) {
					result = r;
				}
			});
			return result;
		}
	}
};
$tw.boot.loadStartup = function(options){

	// Load tiddlers
	if($tw.boot.tasks.readBrowserTiddlers) {
		$tw.loadTiddlersBrowser();
	} else {
		$tw.loadTiddlersNode();
	}
	// Load any preloaded tiddlers
	if($tw.preloadTiddlers) {
		$tw.wiki.addTiddlers($tw.preloadTiddlers);
	}
	// Give hooks a chance to modify the store
	$tw.hooks.invokeHook("th-boot-tiddlers-loaded");
}
$tw.boot.execStartup = function(options){
	// Unpack plugin tiddlers
	$tw.wiki.readPluginInfo();
	$tw.wiki.registerPluginTiddlers("plugin",$tw.safeMode ? ["$:/core"] : undefined);
	$tw.wiki.unpackPluginTiddlers();
	// Process "safe mode"
	if($tw.safeMode) {
		$tw.wiki.processSafeMode();
	}
	// Register typed modules from the tiddlers we've just loaded
	$tw.wiki.defineTiddlerModules();
	// And any modules within plugins
	$tw.wiki.defineShadowModules();
	// Make sure the crypto state tiddler is up to date
	if($tw.crypto) {
		$tw.crypto.updateCryptoStateTiddler();
	}
	// Gather up any startup modules
	$tw.boot.remainingStartupModules = []; // Array of startup modules
	$tw.modules.forEachModuleOfType("startup",function(title,module) {
		if(module.startup) {
			$tw.boot.remainingStartupModules.push(module);
		}
	});
	// Keep track of the startup tasks that have been executed
	$tw.boot.executedStartupModules = Object.create(null);
	$tw.boot.disabledStartupModules = $tw.boot.disabledStartupModules || [];
	// Repeatedly execute the next eligible task
	$tw.boot.executeNextStartupTask(options.callback);
}
/*
Startup TiddlyWiki
*/
$tw.boot.startup = function(options) {
	options = options || {};
	// Get the URL hash and check for safe mode
	$tw.boot.initStartup(options);
	$tw.boot.loadStartup(options);
	$tw.boot.execStartup(options);
};

/*
Add another unload task
*/
$tw.addUnloadTask = function(task) {
	if($tw.unloadTasks.indexOf(task) === -1) {
		$tw.unloadTasks.push(task);
	}
}

/*
Execute the remaining eligible startup tasks
*/
$tw.boot.executeNextStartupTask = function(callback) {
	// Find the next eligible task
	var taskIndex = 0, task,
		asyncTaskCallback = function() {
			if(task.name) {
				$tw.boot.executedStartupModules[task.name] = true;
			}
			return $tw.boot.executeNextStartupTask(callback);
		};
	while(taskIndex < $tw.boot.remainingStartupModules.length) {
		task = $tw.boot.remainingStartupModules[taskIndex];
		if($tw.boot.isStartupTaskEligible(task)) {
			// Remove this task from the list
			$tw.boot.remainingStartupModules.splice(taskIndex,1);
			// Assemble log message
			var s = ["Startup task:",task.name];
			if(task.platforms) {
				s.push("platforms:",task.platforms.join(","));
			}
			if(task.after) {
				s.push("after:",task.after.join(","));
			}
			if(task.before) {
				s.push("before:",task.before.join(","));
			}
			$tw.boot.log(s.join(" "));
			// Execute task
			if(!$tw.utils.hop(task,"synchronous") || task.synchronous) {
				task.startup();
				if(task.name) {
					$tw.boot.executedStartupModules[task.name] = true;
				}
				return $tw.boot.executeNextStartupTask(callback);
			} else {
				task.startup(asyncTaskCallback);
				return true;
			}
		}
		taskIndex++;
	}
	if(typeof callback === 'function') {
		callback();
	}
	return false;
};

/*
Returns true if we are running on one platforms specified in a task modules `platforms` array
*/
$tw.boot.doesTaskMatchPlatform = function(taskModule) {
	var platforms = taskModule.platforms;
	if(platforms) {
		for(var t=0; t<platforms.length; t++) {
			if((platforms[t] === "browser" && !$tw.browser) || (platforms[t] === "node" && !$tw.node)) {
				return false;
			}
		}
	}
	return true;
};

$tw.boot.isStartupTaskEligible = function(taskModule) {
	var t;
	// Check that the platform is correct
	if(!$tw.boot.doesTaskMatchPlatform(taskModule)) {
		return false;
	}
	var name = taskModule.name,
		remaining = $tw.boot.remainingStartupModules;
	if(name) {
		// Fail if this module is disabled
		if($tw.boot.disabledStartupModules.indexOf(name) !== -1) {
			return false;
		}
		// Check that no other outstanding tasks must be executed before this one
		for(t=0; t<remaining.length; t++) {
			var task = remaining[t];
			if(task.before && task.before.indexOf(name) !== -1) {
				if($tw.boot.doesTaskMatchPlatform(task) || (task.name && $tw.boot.disabledStartupModules.indexOf(name) !== -1)) {
					return false;
				}
			}
		}
	}
	// Check that all of the tasks that we must be performed after has been done
	var after = taskModule.after;
	if(after) {
		for(t=0; t<after.length; t++) {
			if(!$tw.boot.executedStartupModules[after[t]]) {
				return false;
			}
		}
	}
	return true;
};

/*
Global Hooks mechanism which allows plugins to modify default functionality
*/
$tw.hooks = $tw.hooks || { names: {}};

/*
Add hooks to the  hashmap
*/
$tw.hooks.addHook = function(hookName,definition) {
	if($tw.utils.hop($tw.hooks.names,hookName)) {
		$tw.hooks.names[hookName].push(definition);
	}
	else {
		$tw.hooks.names[hookName] = [definition];
	}
};

/*
Invoke the hook by key
*/
$tw.hooks.invokeHook = function(hookName /*, value,... */) {
	var args = Array.prototype.slice.call(arguments,1);
	if($tw.utils.hop($tw.hooks.names,hookName)) {
		for (var i = 0; i < $tw.hooks.names[hookName].length; i++) {
			args[0] = $tw.hooks.names[hookName][i].apply(null,args);
		}
	}
	return args[0];
};

/////////////////////////// Main boot function to decrypt tiddlers and then startup

$tw.boot.boot = function(callback) {
	// Initialise crypto object
	$tw.crypto = new $tw.utils.Crypto();
	// Initialise password prompter
	if($tw.browser && !$tw.node) {
		$tw.passwordPrompt = new $tw.utils.PasswordPrompt();
	}
	// Preload any encrypted tiddlers
	$tw.boot.decryptEncryptedTiddlers(function() {
		// Startup
		$tw.boot.startup({callback: callback});
	});
};

/////////////////////////// Autoboot in the browser

if($tw.browser && !$tw.boot.suppressBoot) {
	$tw.boot.boot();
}

return $tw;

});

if(typeof(exports) !== "undefined") {
	exports.TiddlyWiki = _boot;
} else {
	_boot(window.$tw);
}
</script>
</div>
<!--~~ Raw markup for the bottom of the body section ~~-->

</body>
</html>
