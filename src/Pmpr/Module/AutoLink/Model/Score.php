<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801577c23b7c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AutoLink\Model; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Model; class Score extends Model { const icqsuoqewygciosa = 'phrase_id'; const skgkcgewayieuwsk = 'similarity'; const uoyosewemacawcmg = 'destination_id'; public function register() { $this->muuwuqssqkaieqge(__('Link Scores', PR__MDL__AUTO_LINK))->guiaswksukmgageq(__('Link Score', PR__MDL__AUTO_LINK))->saemoowcasogykak(IconInterface::eoigymsasckeaoyi); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::skgkcgewayieuwsk)->gswweykyogmsyawy(__('Similarity', PR__MDL__AUTO_LINK))->acceqyqygswoecwe(4))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::icqsuoqewygciosa)->gswweykyogmsyawy(__('Phrase', PR__MDL__AUTO_LINK))->wuuqgaekqeymecag(Phrase::class)->kqyscuayyakmwaky())->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::uoyosewemacawcmg)->gswweykyogmsyawy(__('Destination', PR__MDL__AUTO_LINK))->wuuqgaekqeymecag(Destination::class)->kqyscuayyakmwaky()); parent::uwmqacgewuauagai(); } }
