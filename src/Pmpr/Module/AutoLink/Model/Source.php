<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68011c6d3b0d8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AutoLink\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Model; class Source extends Model { const aiyuksmkquggmyqs = 8; const yawkygsammoiwywe = 'contentful'; const cqqgeyyqiugckwgw = 'none_' . self::yawkygsammoiwywe; const umyomemqwccgmuki = 'parent_id'; const ewswkggqkuocsmiy = 'linked_id'; const icqsuoqewygciosa = 'phrase_id'; const qgimsikwwwwyskwa = 'last_score'; const uoyosewemacawcmg = 'destination_id'; public function register() { $this->muuwuqssqkaieqge(__('Link Sources', PR__MDL__AUTO_LINK))->guiaswksukmgageq(__('Link Source', PR__MDL__AUTO_LINK))->saemoowcasogykak(IconInterface::sgsyceqikaeaiokw)->uaywwyimkgwyqwya([Constants::yiuwgggacagyeqmo => 10]); $this->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq)->ecmiqywsauuoccwo(Constants::awysmmukegasimmq); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::sseqskeccomyyciy)->gswweykyogmsyawy(__('Phrase', PR__MDL__AUTO_LINK))->acceqyqygswoecwe(200)->weakgueoauiyooyy())->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::IDENTIFIER)->gswweykyogmsyawy(__('Identifier', PR__MDL__AUTO_LINK))->acceqyqygswoecwe(self::aiyuksmkquggmyqs)->acokiqqgsmoqaeyu())->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::squoamkioomemiyi)->gswweykyogmsyawy(__('Type', PR__MDL__AUTO_LINK))->kesomeowemmyygey(1, self::yawkygsammoiwywe, __('Contentful', PR__MDL__AUTO_LINK))->kesomeowemmyygey(2, self::cqqgeyyqiugckwgw, __('None Contentful', PR__MDL__AUTO_LINK)))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->gswweykyogmsyawy(__('Status', PR__MDL__AUTO_LINK))->kesomeowemmyygey(1, Constants::gikauwqcswqcsmqw, __('Used', PR__MDL__AUTO_LINK))->kesomeowemmyygey(2, Constants::sgoswgskyiiwkyuo, __('Pending', PR__MDL__AUTO_LINK))->kesomeowemmyygey(3, Constants::wagwccqcqwgsoyoi, __('Locked', PR__MDL__AUTO_LINK)))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::umyomemqwccgmuki)->gswweykyogmsyawy(__('Parent', PR__MDL__AUTO_LINK))->wuuqgaekqeymecag(static::class, self::umyomemqwccgmuki)->oowcmkiwgqgugkku())->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::icqsuoqewygciosa)->gswweykyogmsyawy(__('Phrase', PR__MDL__AUTO_LINK))->wuuqgaekqeymecag(Phrase::class)->oowcmkiwgqgugkku())->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::uoyosewemacawcmg)->gswweykyogmsyawy(__('Destination', PR__MDL__AUTO_LINK))->wuuqgaekqeymecag(Destination::class)->kqyscuayyakmwaky())->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::ewswkggqkuocsmiy)->gswweykyogmsyawy(__('Linked Destination', PR__MDL__AUTO_LINK))->wuuqgaekqeymecag(Destination::class, Destination::ewswkggqkuocsmiy)->oowcmkiwgqgugkku()); parent::uwmqacgewuauagai(); } public function ukqioecasimmeygm() : string { return Constants::sseqskeccomyyciy; } }
