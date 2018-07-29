# 09-baixiu
前端09章百秀项目练习

- sql在目录：'baixiu-dev/baixiu-docs-gh-pages/media/baixiu.sql';
- 项目手册在目录： 'baixiu-dev/baixiu-docs-gh-pages/**';

## 注意点
```php
// 载入配置文件,请求响应时才用绝对路径'/config.php'，文件读写机制只有物理路径和相对路径，所以只能用相对路径。
require_once '../config.php';
```

- 定义函数时一定要注意：函数名与内置函数冲突问题
```php
// JS 判断方式：typeof fn === 'function'
// PHP 判断函数是否定义的方式： function_exists('get_current_user')
// function get_current_user () {...}
function xiu_get_current_user () {...}
```


- 采用物理路径解决
```php
// 因为这个 sidebar.php 是被 index.php 载入执行，所以 这里的相对路径 是相对于 index.php
// 如果希望根治这个问题，可以采用物理路径解决
require_once '../functions.php';

//config.php中配置
/**
 * 项目根目录
 */
 define('ROOT_DIR',dirname(__FILE__));

 require_once ROOT_DIR . '../functions.php';
```




# 常用收集
```
https://developer.mozilla.org/zh-CN/docs/Learn

https://codepen.io/
https://jsfiddle.net/
http://playcode.io/


https://www.awesomes.cn/repo/joshbuchea/head

https://github.com/thedaviddias/Front-End-Checklist


GitHub 搜索 技术名词 + 空格 + awesome


Chrome 插件

- Adblock Plus - cfhdojbkjhnklbpkdaibdccddilifddb
- Chrome Markdown Preview - ghmocdlbmpcchcbkkingnkgemjacgfdf
- Clear Cache - cppjkneekbjaeellbfkmgnhonkkjfpdn
- Copy URL + Title - dgagjmdgbakclelfacghmmbadkdegjjh
- Draw.io Desktop - pebppomjfocnoigkeepgbmcifnnlndla
- Gestures for Google Chrome™ - jpkfjicglakibpenojifdiepckckakgk
- GitHub Hovercard - mmoahbbnojgkclgceahhakhnccimnplk
- Githunt - khpcnaokfebphakjgdgpinmglconplhp
- Google文档、表格及幻灯片的Office编辑扩展程序 - gbkeegbaiigmenfmjfclcdgdpimamgkj
- OneTab - chphlpgkkbolifaimnlloiipkdnihall
- Postman - fhbjgbiflinjbdggehcddcbncdddomop ！！！！
- Quick QR Code Generator - afpbjjgbdimpioenaedcjgkaigggcdpp
- Save to Pocket - niloccemoadcdkdjlinkgdfekeahmflj
- SimpleExtManager - kniehgiejgnnpgojkdhhjbgbllnfkfdk
- Stylish-为任意网站自定义主题 - fjnbnpbmkenffdnngjfgmeleoegfcffe
- Tampermonkey - dhdgffkkebhmkfjojejmpbldmpobfkfo
- Wappalyzer - gppongmhjkpfnbhagpmjfkannfbllamg


Unsplash 随机占位图


aadgmnobpdmgmigaicncghmmoeflnamj
aaihhjepepgajmehjdmfkofegfddcabc
aapbdbdomjkkjkaonfhkkikfgjllcleb
afpbjjgbdimpioenaedcjgkaigggcdpp
ajnfhahbkopfgiheliocnmeobejfdlfe
apnjnioapinblneaedefcnopcjepgkci
baggcehellihkglakjnmnhpnjmkbmpkf
bfbameneiokkgbdmiekhjnmfkcnldhhm
bkhaagjahfmjljalopjnoealnfndnagc
bmagokdooijbeehmkpknfglimnifench
cdfmaaeapjmacolkojefhfollmphonoh
cfhdojbkjhnklbpkdaibdccddilifddb
cfpgidcopbnjdiklklilbmhhalgfcofm
chphlpgkkbolifaimnlloiipkdnihall
cppjkneekbjaeellbfkmgnhonkkjfpdn
dbepggeogbaibhgnhhndojpepiihcmeb
dbfmnekepjoapopniengjbcpnbljalfg
dgagjmdgbakclelfacghmmbadkdegjjh
dhdgffkkebhmkfjojejmpbldmpobfkfo
diebikgmpmeppiilkaijjbdgciafajmg
djkfdjpoelphhdclfjhnffmnlnoknfnd
dkblejpmbmienbjpinbgebodokhpbkme
dogkpdfcklifaemcdfbildhcofnopogp
dpjamkmjmigaoobjbekmfgabipmfilij
dpplabbmogkhghncfbfdeeokoefdjegm
eadndfjplgieldjbigjakmdgkmoaaaoc
ekopmclclddpoipchmcbhifohhbmjafd
eldlkpeoddgbmpjlnpfblfpgodnojfjl
elifhakcjgalahccnjkneoccemfahfoa
fdfdnfpdplfbbnemmmoklbfjbhecpnhf
ffhkkpnppgnfaobgihpdblnhmmbodake
fhbjgbiflinjbdggehcddcbncdddomop
fiikhcfekfejbleebdkkjjgalkcgjoip
fjnbnpbmkenffdnngjfgmeleoegfcffe
fkepacicchenbjecpbpbclokcabebhah
fkfpfifjldhigjfibnnnidopknecocbc
fmiohbdblcemacakpnoinjmcelddpjbg
fmkadmapgofadopljbjfkapdkoienihi
fnbdnhhicmebfgdgglcdacdapkcihcoh
fngmhnnpilhplaeedifhccceomclgfbg
gbammbheopgpmaagmckhpjbfgdfkpadb
gbchcmhmhahfdphkhkmpfmihenigjmpp
gbkeegbaiigmenfmjfclcdgdpimamgkj
geiccgjkigajaicecnhdokggninehdlp
ghmocdlbmpcchcbkkingnkgemjacgfdf
giompennnhheakjcnobejbnjgbbkmdnd
gmlllbghnfkpflemihljekbapjopfjik
gojbdfnpnhogfdgjbigejoaolejmgdhk
gppongmhjkpfnbhagpmjfkannfbllamg
hddnkoipeenegfoeaoibdmnaalmgkpip
idddhnefeeajhnndkpgganlncgeajiao
ighdmehidhipcmcojjgiloacoafjmpfk
iibolhpkjjmoepndefdmdlmbpfhlgjpl
ikhdkkncnoglghljlkmcimlnlhkeamad
ikkbfngojljohpekonpldkamedehakni
jafmfknfnkoekkdocjiaipcnmkklaajd
jlmafbaeoofdegohdhinkhilhclaklkp
jnihajbhpnppcggbcgedagnkighmdlei
jnkmfdileelhofjcijamephohjechhna
jpigngmphmclcmikmcbcfplgnhlnefbp
jpkfjicglakibpenojifdiepckckakgk
kdchifnbpeflbphakmpbcfdjeidkfeop
khpcnaokfebphakjgdgpinmglconplhp
kihhefcbenhkjgjhchanjfhhflaojldn
klbibkeccnjlkjkiokjodocebajanakg
kniehgiejgnnpgojkdhhjbgbllnfkfdk
kobpbiokkobnmnaefmpcodeeficgbfkg
kpkajnbnadgmiekpbpjekjmoomkdhiio
kppingdhhalimbaehfmhldppemnmlcjd
ldkcfjncoofodcilmijgmilicbelbdge
lhkmoheomjbkfloacpgllgjcamhihfaj
lmhkpmbekcpmknklioeibfkpmmfibljd
lmjdlojahmbbcodnpecnjnmlddbkjhnn
lomkpheldlbkkfiifcbfifipaofnmnkn
mjoedlfflcchnleknnceiplgaeoegien
mkaakpdehdafacodkgkpghoibnmamcme
mmoahbbnojgkclgceahhakhnccimnplk
ndemhkhpinfhbgadphhjdcckjglphfmh
ndjpnladcallmjemlbaebfadecfhkepb
nhdogjmejiglipccpnnnanhbledajbpd
niloccemoadcdkdjlinkgdfekeahmflj
ninejjcohidippngpapiilnmkgllmakh
nlipoenfbbikpbjkfpfillcgkoblgpmj
nmmhkkegccagdldgiimedpiccmgmieda
oangcciaeihlfmhppegpdceadpfaoclj
ogcgkffhplmphkaahpmffcafajaocjbd
ohjkicjidmohhfcjjlahfppkdblibkkb
ohmmkhmmmpcnpikjeljgnaoabkaalbgc
ojooeaohlmgpcjajikhmibcnbebfenid
pbeapidedgdpniokbedbfbaacglkceae
pcnaddhmngnnpookfhhamkelhhakimdg
pebppomjfocnoigkeepgbmcifnnlndla
peddmpbdeelbhgfjnmlkfgeddigonncm
pejkokffkapolfffcgbmdmhdelanoaih
pioclpoplcdbaefihamjohnefbikjilc
pkedcjkdefgpdelpbcmbmeomcjbeemfm
pkgccpejnmalmdinmhkkfafefagiiiad
pnggaliohjcaboolkcpjhfondbjlehkm
ppmmlchacdbknfphdeafcbmklcghghmd


```