<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             651939d54dd39             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceGateway; use Exception; use nusoap_client; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Select; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Text; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\SectionsTrait; use Pmpr\Common\Foundation\Helper\Traits\HelperTrait; use Pmpr\Common\Foundation\Interfaces\ConstantInterface; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\Template\Traits\TemplateTrait; use Pmpr\Common\Foundation\Traits\ComponentTrait; use Pmpr\Common\Foundation\Traits\HookTrait; use Pmpr\Common\Foundation\Wrapper\Traits\WrapperTrait; use SoapClient; use WC_Order; use WC_Payment_Gateway; abstract class Gateway extends WC_Payment_Gateway implements ConstantInterface { const oyqcukwqaucsgiem = "\x74\162\141\x6e\163\141\143\164\x69\157\156\137\x69\144"; const icksoamomukcsmom = "\144\151\x72\145\x63\164\137\162\x65\144\151\162\x65\x63\x74"; const sockwoyeosqcegek = "\x63\x6f\x6e\156\x65\143\x74\x69\157\x6e\137\x65\162\162\157\162"; const iccqmesicoqwgigu = self::uasuowkaguiwoouw . self::aoieosqmocoaqwko; const ukcossyiwqkkgewo = self::amcogigwsaqssuai . self::aoieosqmocoaqwko; const eowogukiswiwgsyy = self::moimkuyueiyqwyki . self::aoieosqmocoaqwko; const qsciekqgmgqkeimi = self::ukaqkkkyywmiuoac . self::aoieosqmocoaqwko; const mqcksmagsgegwsks = self::sockwoyeosqcegek . self::aoieosqmocoaqwko; const weuiugaiuoakiwyi = "\x77\x6f\x6f\143\x6f\x6d\x6d\145\x72\143\x65\137\x70\141\171\155\x65\x6e\164\137\x67\141\x74\145\167\141\171\x5f\164\x72\x61\x6e\x73\x61\x63\164\x69\x6f\156\x5f\x64\x61\164\141"; const yqgygsweuqmcwauw = "\x5f\166\x65\162\151\146\x69\x63\141\x74\x69\x6f\156\x5f\160\x61\162\141\155\x73"; use ComponentTrait, SectionsTrait, TemplateTrait, WrapperTrait, ObjectTrait, HelperTrait, HookTrait; protected ?int $order = 0; protected ?array $messages = [self::uasuowkaguiwoouw => '', self::amcogigwsaqssuai => '', self::moimkuyueiyqwyki => '', self::ukaqkkkyywmiuoac => '']; protected $verification = null; protected bool $directRedirect = false; public function __construct() { if ($this->id) { goto kqksuugcgsyeoayy; } $this->id = strtolower(str_replace("\x5c", "\x2d", self::uqggkiomyiceyooa())); kqksuugcgsyeoayy: $this->init_form_fields(); $this->init_settings(); $this->title = $this->get_option(self::qescuiwgsyuikume); $this->has_fields = false; $this->description = $this->get_option(self::eqkeooqcsscoggia); $this->directRedirect = $this->get_option(self::icksoamomukcsmom, false) === "\171\145\x73"; $this->method_description = $this->method_description ?: sprintf(__("\45\x73\x20\x67\141\164\x65\167\141\x79\x20\163\145\164\164\x69\156\147\x73\40\146\157\x72\40\167\x6f\x6f\143\x6f\x6d\x6d\145\x72\143\145", PR__MDL__WOOCOMMERCE_GATEWAY), $this->method_title); $this->messages = [self::uasuowkaguiwoouw => $this->get_option(self::iccqmesicoqwgigu), self::amcogigwsaqssuai => $this->get_option(self::ukcossyiwqkkgewo), self::moimkuyueiyqwyki => $this->get_option(self::eowogukiswiwgsyy), self::ukaqkkkyywmiuoac => $this->get_option(self::qsciekqgmgqkeimi), self::sockwoyeosqcegek => $this->get_option(self::mqcksmagsgegwsks)]; if ($this->icon) { goto qqewoyookaskiuek; } if (!($mcqieaigyeeyaksm = $this->get_option(self::mkousmkiawwousws))) { goto iggyqogweyosuikc; } $oiegiwogmwmawkeo = $this->ocksiywmkyaqseou("\167\157\157\x63\x6f\155\x6d\x65\x72\143\145\137\x67\x61\x74\145\167\141\x79\x5f\151\143\157\x6e\x5f\x73\x69\x7a\145", self::egwoacukmsioosum); $wwgucssaecqekuek = $this->ocksiywmkyaqseou("\167\x6f\157\143\x6f\155\155\x65\162\x63\145\137\147\141\164\145\x77\141\171\137\x69\143\157\x6e\137\x61\x74\x74\162\163", []); $this->icon = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->qaeeusqkgwagwaqc($mcqieaigyeeyaksm, $oiegiwogmwmawkeo, $wwgucssaecqekuek); iggyqogweyosuikc: qqewoyookaskiuek: $egkyssmuqcwaciya = strtolower(wc_clean($this->uwkmaywceaaaigwo()->gksccikkaamikckm()->wkcwykowmmmwioqs(self::uqggkiomyiceyooa()))); $this->qcsmikeggeemccuu("\167\157\x6f\143\157\x6d\x6d\x65\x72\143\145\x5f\x61\160\x69\x5f{$egkyssmuqcwaciya}", [$this, "\x6b\x65\147\x6f\143\x61\143\163\x67\x65\165\167\157\153\171\x63"])->qcsmikeggeemccuu("\167\157\x6f\x63\x6f\x6d\155\x65\x72\x63\x65\x5f\x72\145\143\x65\151\x70\164\137{$this->id}", [$this, "\165\165\x73\x61\145\163\x6f\161\x73\165\x65\x79\161\155\145\143"])->qcsmikeggeemccuu("\167\157\x6f\x63\x6f\x6d\155\x65\162\x63\x65\137\165\160\x64\141\164\x65\137\157\x70\x74\x69\x6f\x6e\x73\137\x70\141\171\155\145\x6e\164\137\x67\x61\x74\x65\167\141\171\x73\137{$this->id}", [$this, "\160\x72\157\x63\x65\163\x73\x5f\x61\x64\155\x69\156\x5f\157\160\x74\151\x6f\x6e\x73"]); } public function init_form_fields() { $this->kwkugmqouisgkqig($this->ycgeeoiieoiakgam(self::ioomakeyqiqowgmk)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__("\107\x65\x6e\145\162\141\154\40\103\157\156\146\x69\147\x75\x72\x61\x74\151\x6f\x6e", PR__MDL__WOOCOMMERCE_GATEWAY))->mkksewyosgeumwsa($this->wcwmusaouiqaqeww(self::yyicwqsqaecyqwco)->gswweykyogmsyawy(__("\x41\x63\164\x69\166\x61\x74\151\x6f\x6e", PR__MDL__WOOCOMMERCE_GATEWAY))->gucwmccyimoagwcm(__("\x54\x6f\x20\x61\x63\164\151\166\141\164\x65\x20\x74\x68\x69\163\40\x70\x61\x79\155\x65\156\x74\x20\147\141\164\x65\167\x61\x79\x2c\x20\x79\157\x75\x20\155\165\x73\x74\x20\143\x68\x65\143\x6b\40\164\x68\145\x20\x63\x68\145\x63\x6b\x62\157\170\56", PR__MDL__WOOCOMMERCE_GATEWAY)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::qescuiwgsyuikume)->gswweykyogmsyawy(__("\x47\141\x74\x65\x77\141\x79\40\124\151\x74\154\x65", PR__MDL__WOOCOMMERCE_GATEWAY))->eyygsasuqmommkua($this->method_title)->gucwmccyimoagwcm(__("\124\150\145\x20\x74\151\164\154\145\x20\157\146\40\164\150\145\40\x67\x61\164\x65\167\x61\171\40\x74\x68\141\164\x20\x69\x73\40\x64\x69\x73\160\154\x61\171\x65\144\40\x74\x6f\x20\x74\150\x65\x20\143\x75\163\x74\157\x6d\x65\x72\40\144\x75\x72\x69\156\147\40\x74\x68\x65\40\160\165\x72\x63\150\x61\x73\x65\56", PR__MDL__WOOCOMMERCE_GATEWAY)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::eqkeooqcsscoggia)->gswweykyogmsyawy(__("\107\x61\x74\145\x77\141\171\40\104\x65\x73\x63\x72\151\x70\x74\151\x6f\x6e", PR__MDL__WOOCOMMERCE_GATEWAY))->gsomueooycksswcy()->eyygsasuqmommkua(sprintf(__("\x53\145\x63\x75\x72\145\x20\160\x61\x79\x6d\x65\156\x74\x20\x62\171\40\141\x6c\154\40\x53\150\145\x74\x61\142\40\155\x65\x6d\x62\x65\x72\x20\x63\x61\162\x64\163\40\164\x68\x72\157\x75\147\x68\x20\45\x73\40\160\141\x79\x6d\x65\156\x74\x20\x67\141\x74\145\x77\141\x79\56", PR__MDL__WOOCOMMERCE_GATEWAY), $this->method_title))->gucwmccyimoagwcm(__("\104\x65\x73\x63\x72\151\160\164\151\x6f\x6e\163\x20\x74\x68\141\164\x20\x77\151\154\154\40\142\145\40\x64\x69\163\x70\x6c\x61\x79\145\x64\x20\164\x6f\40\x74\150\145\40\147\141\x74\x65\x77\x61\x79\40\144\x75\162\151\156\x67\40\164\150\x65\40\x70\141\x79\155\x65\156\x74\40\160\162\157\x63\145\163\163\x2e", PR__MDL__WOOCOMMERCE_GATEWAY)))->mkksewyosgeumwsa($this->quaegkgkucwyeiqg(self::mkousmkiawwousws)->gswweykyogmsyawy(__("\107\141\164\x65\x77\141\171\x20\x49\x6d\141\x67\145", PR__MDL__WOOCOMMERCE_GATEWAY))->gucwmccyimoagwcm(__("\x54\x68\145\x20\151\x6d\141\x67\145\40\157\146\x20\164\150\145\x20\x67\141\x74\145\x77\141\x79\40\x74\150\141\164\40\151\x73\x20\x64\x69\x73\160\x6c\x61\171\145\144\x20\164\x6f\x20\x74\x68\145\40\x63\x75\x73\x74\157\x6d\145\162\x20\144\x75\x72\x69\x6e\x67\x20\x74\150\145\x20\x70\x75\x72\143\150\x61\x73\x65\x2e", PR__MDL__WOOCOMMERCE_GATEWAY)))->mkksewyosgeumwsa($this->wcwmusaouiqaqeww(self::icksoamomukcsmom)->gswweykyogmsyawy(__("\104\151\x72\145\x63\x74\40\122\145\x64\x69\162\x65\143\x74", PR__MDL__WOOCOMMERCE_GATEWAY))->gucwmccyimoagwcm(sprintf("\45\x73\74\142\x72\76\x25\x73", __("\x45\156\x61\142\154\x65\x20\x74\150\151\x73\x20\157\x70\x74\x69\157\x6e\40\151\146\40\x79\x6f\x75\40\x77\141\156\164\40\x74\150\145\x20\x75\163\145\162\40\164\x6f\x20\142\x65\x20\144\x69\162\x65\x63\x74\145\x64\40\144\151\x72\x65\x63\164\x6c\x79\x20\x74\157\x20\164\x68\145\40\160\141\x79\x6d\145\x6e\x74\x20\x67\x61\x74\145\167\141\x79\40\141\x6e\x64\40\x6e\157\164\40\143\154\151\143\153\40\157\x6e\40\164\150\145\40\x70\162\x65\154\x6f\141\144\x20\157\x70\x74\151\157\x6e\x20\157\x6e\40\164\150\145\40\x70\x72\x65\x2d\151\x6e\x76\x6f\151\143\145\40\160\141\147\145\x2e", PR__MDL__WOOCOMMERCE_GATEWAY), __("\x42\171\x20\144\x65\x66\x61\x75\154\164\x20\x28\144\151\163\x61\142\154\151\x6e\147\40\164\x68\x69\x73\40\x6f\160\164\151\157\x6e\x29\40\164\150\x65\40\x62\x75\x79\x65\x72\x20\146\151\x72\163\x74\40\163\145\145\163\x20\164\x68\x65\40\x6f\162\144\x65\162\40\156\165\x6d\x62\145\x72\x20\141\x6e\144\x20\x74\x68\x65\40\146\x69\156\x61\x6c\40\x70\x72\x69\x63\145\x20\142\x65\146\x6f\x72\x65\x20\x62\x65\151\156\x67\40\144\151\162\x65\143\x74\x65\144\40\164\x6f\40\x74\150\x65\40\x70\157\162\x74\x61\x6c\54\x20\141\156\x64\40\x74\150\145\156\40\x69\163\40\x64\x69\162\145\x63\x74\x65\144\40\x74\157\40\x74\x68\x65\40\160\x6f\x72\x74\x61\x6c\x20\142\171\40\160\x72\x65\163\x73\x69\156\147\40\x74\x68\145\40\143\157\156\146\x69\x72\155\141\164\151\157\x6e\x20\142\165\164\x74\157\156\x2e", PR__MDL__WOOCOMMERCE_GATEWAY))))); $this->qyeykswoowmwqmai(); $kqmcoiicsmgwaisg = $this->auqyiaissiuomqgs(); $this->kwkugmqouisgkqig($this->ycgeeoiieoiakgam(self::eoskkkieowogacws)->saemoowcasogykak(IconInterface::akgsckoogewmyswa)->gswweykyogmsyawy(__("\x50\x61\171\x6d\x65\x6e\x74\x20\x6f\160\x65\x72\141\164\x69\157\x6e\40\x4d\x65\x73\163\x61\x67\145\x73", PR__MDL__WOOCOMMERCE_GATEWAY))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::qsciekqgmgqkeimi)->euokiigekgwygigi($kqmcoiicsmgwaisg)->gsomueooycksswcy()->gswweykyogmsyawy(__("\x43\x6f\156\x6e\145\x63\x74\x69\156\x67\x20\115\x65\x73\x73\x61\x67\x65", PR__MDL__WOOCOMMERCE_GATEWAY))->eyygsasuqmommkua(__("\x43\x6f\156\156\x65\143\x74\151\x6e\x67\x20\164\157\x20\164\x68\145\x20\x62\141\156\x6b\x2e\56\56", PR__MDL__WOOCOMMERCE_GATEWAY))->gucwmccyimoagwcm(__("\x54\150\145\x20\x74\x65\170\164\40\157\146\40\164\x68\x65\x20\155\145\163\163\x61\x67\145\x20\171\157\165\x20\x77\141\x6e\x74\x20\164\157\40\x62\x65\x20\144\x69\163\160\x6c\x61\171\x65\144\x20\x74\157\x20\164\150\x65\x20\x63\165\163\x74\157\155\145\162\40\x77\150\x65\156\40\143\x6f\156\156\145\143\x74\151\x6e\x67\x20\164\157\x20\164\x68\x65\x20\x62\141\x6e\153\56", PR__MDL__WOOCOMMERCE_GATEWAY)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::ukcossyiwqkkgewo)->euokiigekgwygigi($kqmcoiicsmgwaisg)->gswweykyogmsyawy(__("\x53\165\143\143\145\x73\x73\40\120\x61\x79\x6d\x65\156\164\40\115\145\x73\163\x61\x67\145", PR__MDL__WOOCOMMERCE_GATEWAY))->gsomueooycksswcy()->eyygsasuqmommkua(__("\124\150\141\156\153\40\171\157\165\54\x20\171\157\165\x72\x20\x6f\162\144\x65\x72\40\x69\163\x20\x73\x75\143\x63\145\x73\x73\146\x75\x6c\154\171\40\x70\141\171\145\x64\x2e", PR__MDL__WOOCOMMERCE_GATEWAY))->gucwmccyimoagwcm(__("\x54\150\x65\40\x74\145\x78\164\x20\157\146\40\155\145\163\x73\x61\147\x65\x20\141\x66\x74\145\x72\40\x73\x75\143\143\x65\x73\163\x66\x75\x6c\40\160\x61\x79\x6d\145\156\164\56", PR__MDL__WOOCOMMERCE_GATEWAY)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::ukcossyiwqkkgewo)->euokiigekgwygigi($kqmcoiicsmgwaisg)->gswweykyogmsyawy(__("\x46\x61\x69\154\x65\144\40\x50\141\171\155\x65\156\164\x20\115\x65\x73\x73\x61\x67\x65", PR__MDL__WOOCOMMERCE_GATEWAY))->gsomueooycksswcy()->eyygsasuqmommkua(__("\131\157\x75\x72\x20\x70\141\x79\155\145\156\164\40\x68\141\163\40\146\x61\151\x6c\x65\144\x2e\x20\x50\x6c\145\141\x73\x65\x20\164\162\171\40\x61\147\141\151\156\x20\x6f\162\x20\143\x6f\x6e\x74\x61\143\x74\x20\164\150\145\40\x73\x69\164\x65\40\x61\x64\x6d\x69\x6e\151\x73\164\162\141\x74\x6f\162\40\x69\x66\x20\164\x68\145\162\x65\40\151\x73\40\141\x20\160\162\157\x62\x6c\145\x6d\x2e", PR__MDL__WOOCOMMERCE_GATEWAY))->gucwmccyimoagwcm(__("\x45\156\164\145\x72\x20\x74\150\x65\x20\x74\145\170\164\40\x6f\146\x20\164\150\x65\x20\x6d\145\x73\x73\141\x67\x65\x20\164\x68\x61\x74\40\171\157\165\x20\167\x61\x6e\x74\x20\x74\157\40\144\x69\163\x70\154\x61\x79\40\164\x6f\40\164\150\145\40\x75\x73\x65\162\x20\141\x66\164\x65\x72\40\141\x6e\x20\165\156\x73\165\x63\x63\x65\163\x73\146\x75\x6c\x20\160\141\171\155\145\x6e\x74\x2c\x20\164\x68\151\x73\40\145\162\162\157\x72\40\162\145\141\163\157\156\40\151\x73\x20\163\x65\156\164\x20\x66\162\157\x6d\x20\x42\141\156\153\40\x77\145\142\x73\x69\x74\x65\56", PR__MDL__WOOCOMMERCE_GATEWAY)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::eowogukiswiwgsyy)->euokiigekgwygigi($kqmcoiicsmgwaisg)->gswweykyogmsyawy(__("\x43\x61\x6e\x63\145\x6c\40\x50\x61\171\x6d\x65\156\164\40\115\145\163\163\x61\x67\145", PR__MDL__WOOCOMMERCE_GATEWAY))->gsomueooycksswcy()->eyygsasuqmommkua(__("\x54\150\145\40\x70\x61\x79\x6d\145\156\164\x20\162\145\x6d\x61\151\x6e\x65\x64\x20\151\x6e\x63\x6f\x6d\x70\154\x65\x74\145\x20\x64\165\x65\40\x74\x6f\x20\x79\157\165\x72\x20\143\141\x6e\x63\145\154\x6c\141\x74\x69\157\x6e\x2e", PR__MDL__WOOCOMMERCE_GATEWAY))->gucwmccyimoagwcm(__("\x45\156\164\145\162\x20\x74\150\145\x20\x74\145\170\x74\40\x6f\146\x20\x74\x68\145\x20\x6d\x65\x73\163\141\x67\x65\x20\x79\157\x75\40\x77\141\156\164\40\x74\157\40\x64\x69\163\x70\154\141\x79\x20\141\146\164\x65\x72\x20\x74\150\x65\40\x75\x73\x65\162\x20\143\x61\156\143\145\154\163\40\x74\150\x65\x20\160\141\171\155\x65\156\x74\54\40\164\x68\x69\x73\x20\155\x65\x73\163\141\x67\145\40\167\x69\x6c\x6c\40\142\x65\x20\144\151\163\x70\x6c\x61\171\145\x64\40\141\x66\164\145\162\40\162\145\x74\x75\x72\x6e\151\156\147\x20\x66\x72\x6f\155\x20\x74\150\x65\x20\x62\141\x6e\x6b\x2e", PR__MDL__WOOCOMMERCE_GATEWAY)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::eowogukiswiwgsyy)->euokiigekgwygigi($kqmcoiicsmgwaisg)->gswweykyogmsyawy(__("\103\157\156\x6e\x65\x63\164\151\157\156\x20\x45\x72\x72\x6f\x72\40\x4d\145\x73\163\141\147\145", PR__MDL__WOOCOMMERCE_GATEWAY))->gsomueooycksswcy()->eyygsasuqmommkua(__("\105\x72\x72\157\x72\40\143\x6f\156\156\x65\143\x74\x69\x6e\147\40\x74\x6f\x20\x74\x68\145\x20\x62\141\156\x6b\54\x20\160\154\145\x61\x73\145\x20\164\162\171\x20\x61\x67\141\x69\x6e\56", PR__MDL__WOOCOMMERCE_GATEWAY))->gucwmccyimoagwcm(__("\x54\x68\x65\x20\x74\x65\170\x74\40\157\146\40\x74\150\145\x20\155\x65\x73\x73\x61\x67\145\x20\171\157\x75\x20\167\141\156\x74\40\164\157\40\x62\x65\40\144\151\163\x70\x6c\x61\x79\145\x64\40\x74\157\40\x74\150\145\x20\143\x75\163\164\157\x6d\x65\162\x20\141\146\164\x65\x72\x20\141\156\x20\145\162\162\157\x72\x20\151\156\x20\x63\157\x6e\156\x65\x63\164\x69\156\147\x20\164\x6f\x20\x74\x68\145\40\142\141\156\x6b\x2e", PR__MDL__WOOCOMMERCE_GATEWAY)))); foreach ($this->suuogccckocgseyg() as $awcmekyiwwkeyisq) { foreach ($awcmekyiwwkeyisq->uyaeumskacgcyskk() as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Text || $aiowsaccomcoikus instanceof Select)) { goto ywqgcegomwaiuquc; } $aiowsaccomcoikus->mkmssscwmeekwgqo(); ywqgcegomwaiuquc: $sccammigagcuyuqg = $aiowsaccomcoikus->sacmkccceuywoqsq(); $aiowsaccomcoikus->usuqmwksoeaayaig($this->get_field_key($aiowsaccomcoikus->mwikyscisascoeea())); $aiowsaccomcoikus->iygyugseyaqwywyg($this->get_option($aiowsaccomcoikus->mwikyscisascoeea())); $this->form_fields[$aiowsaccomcoikus->mwikyscisascoeea()] = $sccammigagcuyuqg; eegqyykygiccaoeo: } miyqyeiwquwsacsm: qkcyqocqqwmqgqww: } ssoucoucsgccekwe: } public function uusaesoqsueyqmec($umwqusowiqmyseom) { $this->order = $umwqusowiqmyseom; $this->giyscymwkesykqsg(self::geykusaewkemcasi, $umwqusowiqmyseom); $umwqusowiqmyseom = $this->mmmcswscsiecscwg($umwqusowiqmyseom); $eaoumsseceiowgsk = $this->cqwwgecaqgquyuac() != "\x79\x65\x73"; $aeaqgysgaeowagug = "\167\143\x2d\x67\x61\164\x65\167\x61\x79\x2d\x73\x75\142\155\151\164"; if (!$eaoumsseceiowgsk) { goto wmmggowmigekyoso; } echo $this->iuygowkemiiwqmiw("\x73\x75\142\x6d\x69\164\137\x63\150\145\x63\153\x6f\x75\x74", ["\163\165\142\x6d\151\164" => $aeaqgysgaeowagug, "\x62\x61\x63\153\137\x75\162\x6c" => $this->iaekqgkwkckeuwcy(), "\142\141\143\153\137\164\145\170\x74" => __("\102\x61\x63\153", PR__MDL__WOOCOMMERCE_GATEWAY), "\163\x75\142\155\x69\164\x5f\x74\145\170\164" => __("\x50\x75\x72\x63\x68\x61\163\145", PR__MDL__WOOCOMMERCE_GATEWAY)]); wmmggowmigekyoso: if (!(!$eaoumsseceiowgsk || isset($_POST[$aeaqgysgaeowagug]))) { goto acaqummmoyiemqss; } $gkkgcoiwayaccqgm = $this->kcwiwskyggmcimie($umwqusowiqmyseom); $this->cqscqicucmeamkyq("\x77\157\x6f\143\157\x6d\x6d\x65\162\x63\x65\x5f\160\141\x79\x6d\145\x6e\164\137{$this->id}\137\147\x61\x74\x65\167\x61\x79", $gkkgcoiwayaccqgm); $iswcokucwmiosiaq = $this->aqmwamyiwgeeymqa($umwqusowiqmyseom); if (!$iswcokucwmiosiaq) { goto soqqemyioggmoakg; } $this->ayeyyegucgwaukky($iswcokucwmiosiaq, true, $this->iaekqgkwkckeuwcy()); $this->caokeucsksukesyo()->wikusamwomuogoau()->mscqqcmmkkiqwcua(sprintf(__("\x54\x68\145\40\x66\x6f\x6c\x6c\x6f\x77\151\156\x67\x20\x65\162\162\x6f\x72\40\157\x63\x63\165\162\x72\x65\x64\x20\x77\150\151\x6c\145\40\x63\x6f\x6e\x6e\x65\x63\x74\x69\x6e\x67\x20\x74\157\x20\x74\150\145\40\45\x73\40\x70\141\x79\155\x65\156\164\40\147\141\x74\x65\x77\x61\x79\x2e", PR__MDL__WOOCOMMERCE_GATEWAY) . "\x3c\x62\162\x3e{$iswcokucwmiosiaq}", $this->get_title()), $umwqusowiqmyseom); soqqemyioggmoakg: acaqummmoyiemqss: } public function kegocacsgeuwokyc() { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); $gwqgmkqcgwwmweom = $this->iaekqgkwkckeuwcy(); $gkkgcoiwayaccqgm = $this->get("\x77\x63\x5f\x6f\x72\144\x65\x72", $this->wugwewwmekuaamos(self::geykusaewkemcasi)); if ($gkkgcoiwayaccqgm) { goto suswcqoyyqkkquuo; } $this->ayeyyegucgwaukky(__("\x4f\162\144\x65\x72\40\x49\104\x20\x69\x73\40\x6e\157\164\x20\145\x78\x69\164\163", PR__MDL__WOOCOMMERCE_GATEWAY), true, $gwqgmkqcgwwmweom); suswcqoyyqkkquuo: $umwqusowiqmyseom = $this->mmmcswscsiecscwg($gkkgcoiwayaccqgm); if ($this->oqkiygokywqiwmys($umwqusowiqmyseom)) { goto eeqesooyqagwawae; } $icwicymcioeyeyek = $seumokooiykcomco->igawqaomowicuayw(self::weuiugaiuoakiwyi, $umwqusowiqmyseom, true); $this->ayeyyegucgwaukky(__("\x54\x68\145\40\x74\x72\x61\x6e\163\141\143\164\x69\157\156\40\163\164\141\x74\x75\163\x20\x68\x61\163\40\141\x6c\162\x65\x61\x64\x79\40\142\x65\x65\x6e\x20\163\x70\x65\x63\x69\x66\x69\x65\144\x2e", PR__MDL__WOOCOMMERCE_GATEWAY), true, $gwqgmkqcgwwmweom, true, $icwicymcioeyeyek); eeqesooyqagwawae: $this->order = $gkkgcoiwayaccqgm; $sogksuscggsicmac = $this->ussowkigumoaoowo($umwqusowiqmyseom); if (is_array($sogksuscggsicmac)) { goto oqugqwcyomiaaoqu; } $uamcoiueqaamsqma = is_string($sogksuscggsicmac) && strlen($sogksuscggsicmac) > 5 ? $sogksuscggsicmac : __("\124\162\x61\x6e\x73\141\x63\164\x69\157\x6e\40\166\x61\x6c\151\x64\x61\164\x69\157\x6e\40\151\x6e\x66\x6f\162\155\x61\164\151\x6f\156\40\151\163\x20\151\156\143\157\x72\x72\x65\x63\x74\x2e", PR__MDL__WOOCOMMERCE_GATEWAY); $this->ayeyyegucgwaukky($uamcoiueqaamsqma, true, $gwqgmkqcgwwmweom, true); oqugqwcyomiaaoqu: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $icwicymcioeyeyek = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::uiwqcumqkgikqyue, []); $iueymcwwscwqkiyq = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::ciywsqoeiymemsys, ''); $uamcoiueqaamsqma = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::eoskkkieowogacws, ''); $ukoikcoywmwowwum = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::oyqcukwqaucsgiem, ''); if ($iueymcwwscwqkiyq == self::amcogigwsaqssuai) { goto usquiuuyiyqaeyiu; } if ($iueymcwwscwqkiyq == self::moimkuyueiyqwyki) { goto hoeeyiowekaeemko; } $uamcoiueqaamsqma = $gkyciwoiiisgywcs->get($sogksuscggsicmac, self::imkacwmiuiykyuim, __("\101\156\40\145\x72\x72\x6f\162\40\x6f\x63\x63\165\x72\x72\x65\144\x20\167\150\x69\154\x65\40\160\141\171\151\156\147\56", PR__MDL__WOOCOMMERCE_GATEWAY)); $ekymkycgewkiouqe->mscqqcmmkkiqwcua(sprintf(__("\x54\150\x65\x20\146\x6f\x6c\x6c\157\167\x69\x6e\x67\40\145\x72\x72\x6f\x72\x20\x6f\x63\143\x75\x72\162\x65\144\40\167\150\151\154\145\x20\162\x65\164\165\162\156\151\x6e\x67\40\x66\162\157\x6d\40\x25\x73\40\x67\x61\x74\145\x77\x61\x79\x20\160\x61\171\x6d\145\156\x74\56", PR__MDL__WOOCOMMERCE_GATEWAY), $this->get_title()) . "\x3c\x62\162\76{$uamcoiueqaamsqma}", $umwqusowiqmyseom, true); goto kymkucucyeoeikim; hoeeyiowekaeemko: $ekymkycgewkiouqe->mscqqcmmkkiqwcua(__("\x54\x68\x65\40\x74\x72\141\156\163\x61\143\x74\x69\157\156\40\162\x65\155\x61\x69\x6e\145\x64\40\165\156\x66\151\x6e\151\163\x68\145\144\x20\x64\165\x65\40\164\157\x20\165\x73\x65\x72\40\143\141\x6e\143\145\x6c\154\x61\x74\x69\x6f\x6e\x2e", PR__MDL__WOOCOMMERCE_GATEWAY), $umwqusowiqmyseom, true); kymkucucyeoeikim: goto qicwaskssogcokgm; usquiuuyiyqaeyiu: $gwqgmkqcgwwmweom = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\x77\143\x5f\x73\x74\141\x74\x75\x73", self::ckcawaoawwioqecq, $this->get_return_url($umwqusowiqmyseom)); if (!($ukoikcoywmwowwum && $ukoikcoywmwowwum != 0)) { goto foeeqckqsyockkak; } $seumokooiykcomco->ksmqawcowkmegigw("\137\164\162\141\156\163\141\x63\164\151\x6f\156\x5f\x69\x64", $ukoikcoywmwowwum, $gkkgcoiwayaccqgm); foeeqckqsyockkak: $umwqusowiqmyseom->payment_complete($ukoikcoywmwowwum); $this->uauicwgqqogawesc(); $this->yogmqkgmcwscecuy(); $gomwuemmsuooamme = [__("\x54\150\x65\40\164\162\x61\156\x73\x61\143\x74\151\157\156\x20\167\x61\163\40\x73\x75\143\143\x65\163\x73\146\165\154\x2e", PR__MDL__WOOCOMMERCE_GATEWAY), sprintf("\45\x73\x3a\x20\x25\x73", __("\x54\162\x61\x6e\163\141\x63\164\151\x6f\156\40\162\145\161\165\x65\x73\164\x20\156\x75\x6d\x62\x65\x72", PR__MDL__WOOCOMMERCE_GATEWAY), $ukoikcoywmwowwum)]; if (!(is_string($uamcoiueqaamsqma) && $uamcoiueqaamsqma)) { goto iekumemscwieugqw; } $gomwuemmsuooamme[] = $uamcoiueqaamsqma; iekumemscwieugqw: $ekymkycgewkiouqe->mscqqcmmkkiqwcua(implode("\x3c\142\x72\x3e", $gomwuemmsuooamme), $umwqusowiqmyseom, true); qicwaskssogcokgm: $seumokooiykcomco->ksmqawcowkmegigw(self::weuiugaiuoakiwyi, $icwicymcioeyeyek, $umwqusowiqmyseom); $this->iwgueimoscsicckq($iueymcwwscwqkiyq, $uamcoiueqaamsqma, true, $gwqgmkqcgwwmweom, false, $icwicymcioeyeyek); exit; } public function process_payment($order_id) { $umwqusowiqmyseom = $this->mmmcswscsiecscwg($order_id); return [self::syomkiqgogwyuiyw => self::ckcawaoawwioqecq, self::yquayuasseumiiii => $umwqusowiqmyseom->get_checkout_payment_url(true)]; } protected function wugwewwmekuaamos($ymqmyyeuycgmigyo, $qauywygqccyqocao = true, $kekikiwsckuiyuyo = true) : string { if (!$qauywygqccyqocao) { goto uguigkcmukuouway; } $ymqmyyeuycgmigyo = "{$this->id}\x5f{$ymqmyyeuycgmigyo}"; uguigkcmukuouway: return $this->caokeucsksukesyo()->wikusamwomuogoau()->wugwewwmekuaamos($ymqmyyeuycgmigyo, $kekikiwsckuiyuyo); } protected function giyscymwkesykqsg($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie = '', $qauywygqccyqocao = true) : self { if (!$qauywygqccyqocao) { goto uqqaiagaeqgqgaiy; } $ymqmyyeuycgmigyo = "{$this->id}\137{$ymqmyyeuycgmigyo}"; uqqaiagaeqgqgaiy: $this->caokeucsksukesyo()->wikusamwomuogoau()->giyscymwkesykqsg($ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); return $this; } protected function kcwiwskyggmcimie($umwqusowiqmyseom) { if (is_numeric($umwqusowiqmyseom)) { goto suqkuqygkkgwyaie; } if (method_exists($umwqusowiqmyseom, "\x67\x65\x74\137\151\x64")) { goto gaomwagkcciesyqy; } if ($aokagokqyuysuksm = absint(get_query_var("\x6f\x72\x64\x65\x72\55\160\x61\171"))) { goto esuiysskoweawsue; } $aokagokqyuysuksm = $umwqusowiqmyseom->id; esuiysskoweawsue: goto aegysmeecgcgayyw; gaomwagkcciesyqy: $aokagokqyuysuksm = $umwqusowiqmyseom->get_id(); aegysmeecgcgayyw: goto soaccwqimeksgwiw; suqkuqygkkgwyaie: $aokagokqyuysuksm = $umwqusowiqmyseom; soaccwqimeksgwiw: if (empty($aokagokqyuysuksm)) { goto wiysogeqqwgioyka; } $this->order = $aokagokqyuysuksm; wiysogeqqwgioyka: return $aokagokqyuysuksm; } protected function mmmcswscsiecscwg($umwqusowiqmyseom = 0) { if (!empty($umwqusowiqmyseom)) { goto skkamseieeusycye; } $umwqusowiqmyseom = $this->order; skkamseieeusycye: if (!empty($umwqusowiqmyseom)) { goto cgiscsqwwgqqaeqi; } return (object) []; cgiscsqwwgqqaeqi: if (!is_numeric($umwqusowiqmyseom)) { goto syiqkaasoueowwui; } $this->order = $umwqusowiqmyseom; $umwqusowiqmyseom = $this->caokeucsksukesyo()->wikusamwomuogoau()->mmmcswscsiecscwg($umwqusowiqmyseom); syiqkaasoueowwui: return $umwqusowiqmyseom; } public function qewciuyocqwcqgys() { return $this->verification; } protected function uauicwgqqogawesc() { $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->uauicwgqqogawesc(); } protected function yogmqkgmcwscecuy() { $iywiwaoieigskusm = $this->qewciuyocqwcqgys(); if (!$iywiwaoieigskusm) { goto giaacoqqqsekcayy; } $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ksmqawcowkmegigw(self::yqgygsweuqmcwauw, $iywiwaoieigskusm, $this->order); giaacoqqqsekcayy: } protected function oqkiygokywqiwmys($umwqusowiqmyseom = 0) : bool { if (!(empty($umwqusowiqmyseom) && empty($this->order_id))) { goto ewymsmkkiksgwysk; } return true; ewymsmkkiksgwysk: $umwqusowiqmyseom = $this->mmmcswscsiecscwg($umwqusowiqmyseom); if (!method_exists($umwqusowiqmyseom, "\156\145\x65\x64\x73\x5f\160\141\171\x6d\145\x6e\164")) { goto cmegwsegsosyqcai; } return $umwqusowiqmyseom->needs_payment(); cmegwsegsosyqcai: if (!(empty($this->order) && !empty($umwqusowiqmyseom))) { goto wmywuusgukmmaams; } $this->order = $this->kcwiwskyggmcimie($umwqusowiqmyseom); wmywuusgukmmaams: return !in_array($this->ayeawyuummwiieyi(self::ciywsqoeiymemsys), [self::amcogigwsaqssuai, self::qgmyyeewkieecqck]); } protected function iwoykscaosqmksku($eyagkkkqkwcuygso) { if (!function_exists("\x66\x75\x6e\x63\x5f\x67\145\x74\x5f\141\162\147\x73")) { goto ooeausyowguqicuo; } $ywmkwiwkosakssii = func_get_args(); if (!(count($ywmkwiwkosakssii) > 1)) { goto gkyawqqcmigqgaiq; } $eyagkkkqkwcuygso = array_merge(array_values($ywmkwiwkosakssii), $eyagkkkqkwcuygso); $eyagkkkqkwcuygso = implode("\137", array_unique($eyagkkkqkwcuygso)); gkyawqqcmigqgaiq: ooeausyowguqicuo: if (!is_array($eyagkkkqkwcuygso)) { goto egyyiccaeeiooaua; } $eyagkkkqkwcuygso = implode("\x5f", $eyagkkkqkwcuygso); egyyiccaeeiooaua: $eyagkkkqkwcuygso = $this->id . "\137" . $eyagkkkqkwcuygso; global $wpdb; $gioggcykgoikcwiy = $wpdb->get_row($this->caokeucsksukesyo()->skckwsgymkimyuwo()->prepare("\x53\x45\x4c\x45\x43\124\40\x2a\40\106\x52\x4f\x4d\x20{$wpdb->prefix}\x70\x6f\x73\x74\155\x65\x74\141\x20\127\110\x45\x52\105\x20\155\x65\164\141\x5f\153\145\171\x3d\47\137\166\x65\x72\x69\146\x69\143\x61\x74\x69\157\156\137\x70\141\162\x61\x6d\x73\x27\x20\x41\116\x44\x20\155\145\x74\141\x5f\166\x61\x6c\165\x65\75\x27\45\163\x27", $eyagkkkqkwcuygso)); if ($gioggcykgoikcwiy) { goto scisgsyemmsekgos; } $this->verification = $eyagkkkqkwcuygso; return true; goto cewmoqyysgsmuiya; scisgsyemmsekgos: return $this->ayeyyegucgwaukky(__("\x54\150\151\163\40\x74\x72\x61\156\163\x61\143\164\151\x6f\x6e\40\x68\x61\163\x20\x62\x65\x65\x6e\40\166\145\162\151\x66\x69\x65\x64\40\157\156\x63\145\40\x62\x65\x66\x6f\x72\145\56", PR__MDL__WOOCOMMERCE_GATEWAY), true, $this->iaekqgkwkckeuwcy(), true); cewmoqyysgsmuiya: } protected function ayeawyuummwiieyi($csgiecsagosuucqo, $ggauoeuaesiymgee = '') { if (!empty($this->order)) { goto igooksugieceoege; } return ''; igooksugieceoege: $umwqusowiqmyseom = $this->mmmcswscsiecscwg(); $qgciuiagkkguykgs = "\x67\145\x74\137" . $csgiecsagosuucqo; if (method_exists($umwqusowiqmyseom, $qgciuiagkkguykgs)) { goto wgewmqieuamsoayy; } if (!empty($umwqusowiqmyseom->{$csgiecsagosuucqo})) { goto omqiayeucoioqoao; } $csgiecsagosuucqo = ''; goto ugqaaewwmkocwwgy; omqiayeucoioqoao: $csgiecsagosuucqo = $umwqusowiqmyseom->{$csgiecsagosuucqo}; ugqaaewwmkocwwgy: goto kqgcyoscsusgoaqi; wgewmqieuamsoayy: $csgiecsagosuucqo = $umwqusowiqmyseom->{$qgciuiagkkguykgs}(); kqgcyoscsusgoaqi: return !empty($csgiecsagosuucqo) ? $csgiecsagosuucqo : $ggauoeuaesiymgee; } public function get_icon() { if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($this->icon)) { goto ueigkucgaucgeimc; } $wkaqekwwgqsqwcoi = $this->sscegwueamckwmcy("\167\x6f\x6f\143\x6f\155\x6d\x65\x72\x63\x65\x5f\147\141\164\145\x77\x61\171\137\x69\143\157\x6e", $this->icon, $this->id); goto sggawugoykqcmsug; ueigkucgaucgeimc: $wkaqekwwgqsqwcoi = parent::get_icon(); sggawugoykqcmsug: return $wkaqekwwgqsqwcoi; } protected function aykimauwwuuqeesq() : string { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\x77\143\137\157\162\144\145\x72", $this->order, WC()->api_request_url(self::uqggkiomyiceyooa())); } protected function gwqgmkqcgwwmweom(string $eeamcawaiqocomwy = '') { if (!($eeamcawaiqocomwy !== '')) { goto qmuwoecuacmkwgem; } if (!headers_sent()) { goto wkeuuycukmuqiaom; } $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->sykissckqqccoiqs("\x73\143\162\x69\160\164", [], "\167\151\x6e\144\x6f\x77\x2e\157\x6e\154\x6f\141\144\40\x3d\40\x66\165\156\x63\164\151\x6f\x6e\40\50\x29\x20\x7b\x20\164\157\160\56\x6c\157\143\x61\164\151\x6f\156\56\x68\x72\x65\x66\x20\75\x20\47{$eeamcawaiqocomwy}\x27\x3b\x20\175\x3b"); goto wakmayaoqoskekqy; wkeuuycukmuqiaom: header("\x4c\x6f\143\141\164\151\x6f\156\x3a\x20" . trim($eeamcawaiqocomwy)); wakmayaoqoskekqy: exit; qmuwoecuacmkwgem: } protected function useawgqusasoukqm() { $wwigiesyquoeawog = ''; if (!$this->order) { goto eeauyscekuckoues; } $umwqusowiqmyseom = $this->mmmcswscsiecscwg(); $wwigiesyquoeawog = method_exists($umwqusowiqmyseom, "\x67\145\x74\137\x63\x75\162\162\x65\156\x63\171") ? $umwqusowiqmyseom->get_currency() : $umwqusowiqmyseom->get_order_currency(); $miosemuqqeysiuaq = ["\x69\x72\164", "\164\x6f\x6d\141\156", "\164\x6f\155\x61\141\156", "\151\162\141\x6e\40\164\157\155\141\x6e", "\x69\x72\141\156\151\x61\156\40\164\x6f\x6d\141\x6e", "\330\252\331\x88\xd9\x85\330\247\xd9\x86", "\xd8\252\xd9\x88\331\205\330\247\331\206\x20\xd8\247\xdb\214\xd8\xb1\xd8\xa7\xd9\206"]; if (!in_array(strtolower($wwigiesyquoeawog), $miosemuqqeysiuaq)) { goto owmuceyswmgueasi; } $wwigiesyquoeawog = "\x49\122\x54"; owmuceyswmgueasi: $usqawywoqggugqms = ["\151\162\x72", "\x72\x69\141\x6c", "\x69\x72\x61\x6e\40\x72\x69\141\154", "\151\x72\141\156\151\x61\156\40\162\151\x61\154", "\xd8\261\333\x8c\330\247\xd9\x84", "\330\261\333\x8c\330\247\331\204\40\330\xa7\xdb\214\330\xb1\xd8\xa7\331\206"]; if (!in_array(strtolower($wwigiesyquoeawog), $usqawywoqggugqms)) { goto mwsmsguqqkcwiiuk; } $wwigiesyquoeawog = "\111\122\x52"; mwsmsguqqkcwiiuk: eeauyscekuckoues: return $wwigiesyquoeawog; } protected function imuokicsysisyuge($ucwqumgymouywmug = "\x49\x52\x52") : int { $aumscagymwyyicag = 0; if (!$this->order) { goto wcugqegqsuuuwqao; } $umwqusowiqmyseom = $this->mmmcswscsiecscwg(); if (method_exists($umwqusowiqmyseom, "\147\x65\164\x5f\x74\157\x74\141\x6c")) { goto eogwckcymuugikuy; } $aumscagymwyyicag = intval($umwqusowiqmyseom->order_total); goto msemumccgceyugmg; eogwckcymuugikuy: $aumscagymwyyicag = $umwqusowiqmyseom->get_total(); msemumccgceyugmg: $wwigiesyquoeawog = strtoupper($this->useawgqusasoukqm()); $ucwqumgymouywmug = strtoupper($ucwqumgymouywmug); if (!in_array($wwigiesyquoeawog, ["\111\x52\110\x52", "\x49\122\110\124"])) { goto wagqgeqymeqoeuyi; } $wwigiesyquoeawog = str_ireplace("\110", '', $wwigiesyquoeawog); $aumscagymwyyicag *= 1000; wagqgeqymeqoeuyi: if (!($wwigiesyquoeawog == "\x49\x52\122" && $ucwqumgymouywmug == "\111\122\124")) { goto qoqskyuuwueqkquk; } $aumscagymwyyicag /= 10; qoqskyuuwueqkquk: if (!($wwigiesyquoeawog == "\111\x52\x54" && $ucwqumgymouywmug == "\111\122\122")) { goto iwsuawwqomaowuii; } $aumscagymwyyicag *= 10; iwsuawwqomaowuii: wcugqegqsuuuwqao: return $aumscagymwyyicag; } protected function auqyiaissiuomqgs() : array { return ["\x66\x61\x75\x6c\x74" => __("\x45\x72\x72\x6f\x72\x20\143\141\x75\x73\x65", PR__MDL__WOOCOMMERCE_GATEWAY), "\x74\x72\141\x6e\163\x61\x63\164\x69\157\x6e\137\x69\144" => __("\124\x72\141\156\163\141\143\x74\151\x6f\x6e\40\x49\104", PR__MDL__WOOCOMMERCE_GATEWAY)]; } public function cqwwgecaqgquyuac() : bool { return $this->directRedirect; } protected function sqmuqsscmimwqoki($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = '') : string { return $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq($ymqmyyeuycgmigyo, $ggauoeuaesiymgee)); } protected function get($ymqmyyeuycgmigyo, $ggauoeuaesiymgee = '') : ?string { return $this->uwkmaywceaaaigwo()->gksccikkaamikckm()->aoeoykwemwaqsikc($this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg($ymqmyyeuycgmigyo, $ggauoeuaesiymgee)); } public function iaekqgkwkckeuwcy() : ?string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aoqkwiysueqqwigk(); } public function ywgmqwueaugywcwi() : ?array { return $this->messages; } public function sagusgigmkeysock($iueymcwwscwqkiyq) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->ywgmqwueaugywcwi(), $iueymcwwscwqkiyq); } public function ayeyyegucgwaukky($iswcokucwmiosiaq = '', $ycyucwoysmwkgiui = true, $gwqgmkqcgwwmweom = false, $gomwuemmsuooamme = false, $icwicymcioeyeyek = []) { return $this->iwgueimoscsicckq(self::uasuowkaguiwoouw, $iswcokucwmiosiaq, $ycyucwoysmwkgiui, $gwqgmkqcgwwmweom, $gomwuemmsuooamme, $icwicymcioeyeyek); } public function xeeymkscwcwqayge($iswcokucwmiosiaq = '', $ycyucwoysmwkgiui = true, $gwqgmkqcgwwmweom = false, $gomwuemmsuooamme = false, $icwicymcioeyeyek = []) { return $this->iwgueimoscsicckq(self::amcogigwsaqssuai, $iswcokucwmiosiaq, $ycyucwoysmwkgiui, $gwqgmkqcgwwmweom, $gomwuemmsuooamme, $icwicymcioeyeyek); } public function iacsskacaiaguemw($iswcokucwmiosiaq = '', $ycyucwoysmwkgiui = true, $gwqgmkqcgwwmweom = false, $gomwuemmsuooamme = false, $icwicymcioeyeyek = []) { return $this->iwgueimoscsicckq(self::moimkuyueiyqwyki, $iswcokucwmiosiaq, $ycyucwoysmwkgiui, $gwqgmkqcgwwmweom, $gomwuemmsuooamme, $icwicymcioeyeyek); } public function iwgueimoscsicckq($iueymcwwscwqkiyq, $iswcokucwmiosiaq = '', $ycyucwoysmwkgiui = true, $gwqgmkqcgwwmweom = false, $gomwuemmsuooamme = false, $icwicymcioeyeyek = []) { if (in_array($iueymcwwscwqkiyq, [self::moimkuyueiyqwyki, self::amcogigwsaqssuai, self::uasuowkaguiwoouw])) { goto asiqwuoswmigcaki; } $iueymcwwscwqkiyq = self::uasuowkaguiwoouw; asiqwuoswmigcaki: if (!(!empty($iswcokucwmiosiaq) && $gomwuemmsuooamme && ($umwqusowiqmyseom = $this->mmmcswscsiecscwg()) && !empty($umwqusowiqmyseom))) { goto ciykoyeioqgyaeqo; } $this->caokeucsksukesyo()->wikusamwomuogoau()->mscqqcmmkkiqwcua(sprintf("\45\x73\x3a\x20\x25\163", __("\x45\x72\x72\157\x72", PR__MDL__WOOCOMMERCE_GATEWAY), $iswcokucwmiosiaq), $umwqusowiqmyseom, true); ciykoyeioqgyaeqo: $uamcoiueqaamsqma = wpautop(wptexturize(trim($this->sagusgigmkeysock($iueymcwwscwqkiyq)))); if (!(is_array($icwicymcioeyeyek) && $icwicymcioeyeyek)) { goto mqicocmqegwukkwg; } $this->caokeucsksukesyo()->owgcciayoweymuws()->qquwggyuqouqumam($uamcoiueqaamsqma, $icwicymcioeyeyek); mqicocmqegwukkwg: if (!$ycyucwoysmwkgiui) { goto qgeugwymkkiacwoc; } $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->yiggueaiwiygoiyi($uamcoiueqaamsqma, $iueymcwwscwqkiyq == self::amcogigwsaqssuai ? self::ckcawaoawwioqecq : self::imkacwmiuiykyuim); qgeugwymkkiacwoc: if (!$gwqgmkqcgwwmweom) { goto emmsycooskoqmgeg; } $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->gwqgmkqcgwwmweom($gwqgmkqcgwwmweom); exit; emmsycooskoqmgeg: return $uamcoiueqaamsqma; } public function admin_options() { $oceoauekaygmuoko = $this->mkcwgaeaaweamyyg($this->id)->gswweykyogmsyawy($this->get_method_title())->saemoowcasogykak(IconInterface::sguaiasamyaamwqi)->gucwmccyimoagwcm($this->get_method_description())->mgisqyswkkuceisu($this->suuogccckocgseyg())->render(); echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui($oceoauekaygmuoko, ["\143\154\x61\163\x73" => "\160\x72\x2d\167\162\x61\x70"]); } public function ewekkueqocsemugs(string $kgccggmwkeukkkci, $ssqmsiiaiswqgmgm = false) { $qcakkkwickkwyuck = null; if (class_exists("\156\165\163\157\141\160\x5f\143\x6c\x69\145\x6e\x74")) { goto mugqyyeayeyggqqk; } if (!extension_loaded("\163\157\x61\x70")) { goto ouamogymawucwswu; } try { $qcakkkwickkwyuck = new SoapClient($kgccggmwkeukkkci, $ssqmsiiaiswqgmgm); } catch (Exception $wgaoewqkwgomoaai) { } ouamogymawucwswu: goto acsqgiuageaasiyy; mugqyyeayeyggqqk: $qcakkkwickkwyuck = new nusoap_client($kgccggmwkeukkkci, $ssqmsiiaiswqgmgm); acsqgiuageaasiyy: return $qcakkkwickkwyuck; } protected abstract function ussowkigumoaoowo($umwqusowiqmyseom); protected abstract function aqmwamyiwgeeymqa($umwqusowiqmyseom); protected abstract function qyeykswoowmwqmai(); }
