<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6838de11c5cf8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AutoLink\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\Model; class Phrase extends Model { const iukymyausumiugqk = 'score_id'; const isoocgsyuyscusay = 'source_id'; public function register() { $this->muuwuqssqkaieqge(__('Phrases', PR__MDL__AUTO_LINK))->guiaswksukmgageq(__('Phrase', PR__MDL__AUTO_LINK)); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::TEXT)->gswweykyogmsyawy(__('Text', PR__MDL__AUTO_LINK))->acceqyqygswoecwe(200))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::isoocgsyuyscusay)->gswweykyogmsyawy(__('Source', PR__MDL__AUTO_LINK))->ckgquisaimmgwuyu(Source::class)->kqyscuayyakmwaky())->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::iukymyausumiugqk)->gswweykyogmsyawy(__('Score', PR__MDL__AUTO_LINK))->ckgquisaimmgwuyu(Score::class)->kqyscuayyakmwaky()); parent::uwmqacgewuauagai(); } }
