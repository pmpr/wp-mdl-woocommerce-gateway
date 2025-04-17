<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             680106a828239             |
    |_______________________________________|
*/
 namespace Pmpr\Module\WoocommerceGateway; use Pmpr\Common\Foundation\Container\ModuleInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; class WoocommerceGateway extends ModuleInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __('Woocommerce Gateway', PR__MDL__WOOCOMMERCE_GATEWAY); }, Constants::wuowaiyouwecckaw => false]); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('woocommerce_payment_gateways', [$this, 'syemgsuewkasoaek']); parent::kgquecmsgcouyaya(); } public function syemgsuewkasoaek($msasmemeuceeaska) { if (class_exists('WC_Payment_Gateway')) { $qceyowgiyaiaqeyi = $this->ocksiywmkyaqseou('woocommerce_gateways', ['mellat' => Mellat::class, 'parsian' => Parsian::class, 'saderat' => Saderat::class]); foreach ($qceyowgiyaiaqeyi as $csagckiyuikmowek) { $msasmemeuceeaska[] = $csagckiyuikmowek; } } return array_unique($msasmemeuceeaska); } }
