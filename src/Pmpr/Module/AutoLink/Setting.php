<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68011c6d3b0d8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AutoLink; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as BaseClass; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\AutoLink\Model\Source; class Setting extends BaseClass { const cgqecaaeyyesqgmq = 'link_type'; const ciccwiwogecsgwuy = 'links_threshold'; const cyowccmqmwseceww = 'compliance_rate'; const kywcqmcceiaqkuqq = 'find_candidate_by'; const ciyogwoqsowymsmg = 'start_auto_linking'; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->igiywquyccyiaucw(Constants::qoquaeuooeycomks, $this->mwikyscisascoeea())->gswweykyogmsyawy(__('AutoLink Setting', PR__MDL__AUTO_LINK))->igiywquyccyiaucw(Constants::qsegwakiwaiyimyy, __('Setting', PR__MDL__AUTO_LINK)); } public function ykwqaukkycogooii() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $cekyiayaygawemyq = $this->caokeucsksukesyo()->essaugkeosgskqme(); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $sciomagaqmgggsiu = $cskucqcumqsyimye->mwyawsooaimmcwiu(); $seyqqsmuaiegkeeq = $mqeowykqcggsieya->mwyawsooaimmcwiu(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya => $pkyyagewkiyckmwy) { if (!$mqeowykqcggsieya->cekoogweeooasayu($kesssewsiegssiya)) { unset($seyqqsmuaiegkeeq[$kesssewsiegssiya]); } } $oagqmqumkkyioygs = __('Keyword', PR__MDL__AUTO_LINK); $wmywaegummskgyey = $this->caokeucsksukesyo()->umiwkmuuoaqmkwig()->ggocakcisguuokai(); if (!$wmywaegummskgyey) { $wmywaegummskgyey = $cekyiayaygawemyq->mweoismqmkwgessg(); } if ($wmywaegummskgyey) { $wmywaegummskgyey = sprintf('%s (%s)', $oagqmqumkkyioygs, $cekyiayaygawemyq->geyeawiiuemgikog($wmywaegummskgyey, Constants::qescuiwgsyuikume)); } $this->ogimmkwaymekmoky($uuyucgkyusckoaeq->mkcwgaeaaweamyyg(Constants::eeeoygaqqmoukaeg)->gswweykyogmsyawy(__('Rules', PR__MDL__AUTO_LINK))->saemoowcasogykak(IconInterface::yesyswqaiqsemkig)->gucwmccyimoagwcm(__('Define Linking Rules', PR__MDL__AUTO_LINK))->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam(Constants::ioomakeyqiqowgmk)->gswweykyogmsyawy(__('General', PR__MDL__AUTO_LINK))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::ciccwiwogecsgwuy)->escqqisecooswqgo()->eyygsasuqmommkua(3)->gswweykyogmsyawy(__('Links Count Threshold', PR__MDL__AUTO_LINK))->gucwmccyimoagwcm(sprintf(__('How many link must be chosen under %s tag?', PR__MDL__AUTO_LINK), 'h2')))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::kywcqmcceiaqkuqq)->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Find Candidate to Linking By', PR__MDL__AUTO_LINK))->kesomeowemmyygey(Constants::qescuiwgsyuikume, __('Title', PR__MDL__AUTO_LINK))->kesomeowemmyygey(Constants::usaygycaymimogmw, [Constants::uissasisiuymwsmu => $oagqmqumkkyioygs, Constants::wuasowoqaccigqqu => empty($wmywaegummskgyey)])->woiuekkeucikkyum(__('Specify which parameter should be used for the search process in link building', PR__MDL__AUTO_LINK)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->qqmgmgasauucoago(Constants::eeeoygaqqmoukaeg)->gswweykyogmsyawy(__('Rules', PR__MDL__AUTO_LINK))->gucwmccyimoagwcm(sprintf(__('Specify which %2$s, %1$s should link to.', PR__MDL__AUTO_LINK), __('Source Type', PR__MDL__AUTO_LINK), __('Destination Types', PR__MDL__AUTO_LINK)))->omsoosuoikgueyke()->mkksewyosgeumwsa($uuyucgkyusckoaeq->wcwmusaouiqaqeww(Constants::yyicwqsqaecyqwco)->gswweykyogmsyawy(__('Enabled', PR__MDL__AUTO_LINK)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::iocouekmygsaocuo)->gswweykyogmsyawy(__('Source Type', PR__MDL__AUTO_LINK))->mkmssscwmeekwgqo()->oiwakqeuemsksykq(Constants::uouymeyqasaeckso, __('Post Types', PR__MDL__AUTO_LINK), $sciomagaqmgggsiu)->oiwakqeuemsksykq(Constants::gmmygyiecgmggaam, __('Taxonomies', PR__MDL__AUTO_LINK), $seyqqsmuaiegkeeq))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::gygsikewooaciecc)->gswweykyogmsyawy(__('Destination Types', PR__MDL__AUTO_LINK))->mkmssscwmeekwgqo()->oikgogcweiiaocka()->oiwakqeuemsksykq(Constants::uouymeyqasaeckso, __('Post Types', PR__MDL__AUTO_LINK), $sciomagaqmgggsiu)->oiwakqeuemsksykq(Constants::gmmygyiecgmggaam, __('Taxonomies', PR__MDL__AUTO_LINK), $seyqqsmuaiegkeeq))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::cgqecaaeyyesqgmq)->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Link Type', PR__MDL__AUTO_LINK))->kesomeowemmyygey(Source::yawkygsammoiwywe, __('Contentful', PR__MDL__AUTO_LINK))->kesomeowemmyygey(Source::cqqgeyyqiugckwgw, __('None Contentful', PR__MDL__AUTO_LINK)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(self::cyowccmqmwseceww)->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Compliance Rate', PR__MDL__AUTO_LINK))->kesomeowemmyygey(Constants::sgiwkasmqqockceq, __('High', PR__MDL__AUTO_LINK))->kesomeowemmyygey(Constants::MEDIUM, __('Middle', PR__MDL__AUTO_LINK))->kesomeowemmyygey(Constants::ymugckeogmscmacc, __('Low', PR__MDL__AUTO_LINK)))))); if (!$this->giiuwsmyumqwwiyq(self::ciyogwoqsowymsmg, false)) { $aiamqeawckcsuaou = $uuyucgkyusckoaeq->qoeiescseggagsqs(Constants::sqsuiimgeguwgmcg)->gmscmskmuissgywk()->gswweykyogmsyawy(__('Start Auto Linking', PR__MDL__AUTO_LINK)); } else { $aiamqeawckcsuaou = $uuyucgkyusckoaeq->qoeiescseggagsqs(Constants::mouiskuquuqycuiy)->wksqkiomigqkkcgu()->gswweykyogmsyawy(__('Stop Auto Linking', PR__MDL__AUTO_LINK)); } $this->iomqgwmuicwwweyo()->kwkugmqouisgkqig($uuyucgkyusckoaeq->ycgeeoiieoiakgam("{$this->cisyiemkeykgkomc()}_quick_actions")->gswweykyogmsyawy(__('Quick Actions', PR__MDL__AUTO_LINK))->jyumyyugiwwiqomk(10)->saemoowcasogykak(IconInterface::eqycqkkmqgmmsuka)->mkksewyosgeumwsa($uuyucgkyusckoaeq->yqgagqgesqyuyuqq()->oguessuismosauuu(__('You can control automatic link building activity through this section.', PR__MDL__AUTO_LINK)))->mkksewyosgeumwsa($aiamqeawckcsuaou->ygagwkucacyassau()->ckccqugcgucieugo()->qigsyyqgewgskemg('toggle-auto-linking'))); parent::ykwqaukkycogooii(); } }
