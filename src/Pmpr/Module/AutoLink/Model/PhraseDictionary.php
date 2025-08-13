<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             689c815ba574c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AutoLink\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\Model; class PhraseDictionary extends Model { const igsgqsyawmiwquqa = 'phrase_match_id'; const iwcwgauyguemyacm = 'content_segment_id'; public function register() { $this->muuwuqssqkaieqge(__('Phrases Dictionary', PR__MDL__AUTO_LINK))->guiaswksukmgageq(__('Phrase Dictionary', PR__MDL__AUTO_LINK)); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::TEXT)->gswweykyogmsyawy(__('Text', PR__MDL__AUTO_LINK))->acceqyqygswoecwe(200))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::iwcwgauyguemyacm)->gswweykyogmsyawy(__('Content Segment', PR__MDL__AUTO_LINK))->ckgquisaimmgwuyu(ContentSegment::class)->kqyscuayyakmwaky())->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::igsgqsyawmiwquqa)->gswweykyogmsyawy(__('Phrase Match', PR__MDL__AUTO_LINK))->ckgquisaimmgwuyu(PhraseMatch::class)->kqyscuayyakmwaky()); parent::uwmqacgewuauagai(); } }
