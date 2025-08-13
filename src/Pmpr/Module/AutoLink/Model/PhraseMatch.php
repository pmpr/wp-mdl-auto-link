<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             689c59a3174e1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AutoLink\Model; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Model; class PhraseMatch extends Model { const skgkcgewayieuwsk = 'similarity'; const cscaseoccsekwyms = 'site_content_id'; const yuokwskigygossmk = 'phrase_dictionary_id'; public function register() { $this->muuwuqssqkaieqge(__('Phrase Matches', PR__MDL__AUTO_LINK))->guiaswksukmgageq(__('Phrase Match', PR__MDL__AUTO_LINK))->saemoowcasogykak(IconInterface::eoigymsasckeaoyi); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::skgkcgewayieuwsk)->gswweykyogmsyawy(__('Similarity', PR__MDL__AUTO_LINK))->acceqyqygswoecwe(4))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::yuokwskigygossmk)->gswweykyogmsyawy(__('Phrase Dictionary', PR__MDL__AUTO_LINK))->wuuqgaekqeymecag(PhraseDictionary::class)->kqyscuayyakmwaky())->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::cscaseoccsekwyms)->gswweykyogmsyawy(__('Site Content', PR__MDL__AUTO_LINK))->wuuqgaekqeymecag(SiteContent::class)->kqyscuayyakmwaky()); parent::uwmqacgewuauagai(); } }
