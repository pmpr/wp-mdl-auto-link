<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             68011c6d3b0d8             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AutoLink\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Model; class Destination extends Model { const iukymyausumiugqk = 'score_id'; const isoocgsyuyscusay = 'source_id'; const ewswkggqkuocsmiy = 'linked_id'; public function register() { $this->muuwuqssqkaieqge(__('Link Destinations', PR__MDL__AUTO_LINK))->guiaswksukmgageq(__('Link Destination', PR__MDL__AUTO_LINK))->saemoowcasogykak(IconInterface::emuwacasoaaageiq)->uaywwyimkgwyqwya([Constants::yiuwgggacagyeqmo => 9]); $this->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq)->ecmiqywsauuoccwo(Constants::ieioeisgwcgysukw); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(Constants::eggygikowgywcayq)->gswweykyogmsyawy(__('Object ID', PR__MDL__AUTO_LINK))->acceqyqygswoecwe(11)->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie, $mksyucucyswaukig) { echo $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::ckmqoekmugkggeym => $eqgoocgaqwqcimie, Constants::squoamkioomemiyi => $this->ogegcqqcukiaqscy(Constants::wwcycgyaiaksckuk, $mksyucucyswaukig, Constants::mswoacegomcucaik)]); }))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::wwcycgyaiaksckuk)->gswweykyogmsyawy(__('Object Type', PR__MDL__AUTO_LINK))->kesomeowemmyygey(1, Constants::mswoacegomcucaik, __('Post', PR__MDL__AUTO_LINK))->kesomeowemmyygey(2, Constants::yoayaissyomokiui, __('Term', PR__MDL__AUTO_LINK))->acokiqqgsmoqaeyu())->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::squoamkioomemiyi)->gswweykyogmsyawy(__('Type', PR__MDL__AUTO_LINK))->acokiqqgsmoqaeyu()->acceqyqygswoecwe(50))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__('Title', PR__MDL__AUTO_LINK))->acokiqqgsmoqaeyu()->weakgueoauiyooyy())->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::usaygycaymimogmw)->gswweykyogmsyawy(__('Keyword', PR__MDL__AUTO_LINK))->acokiqqgsmoqaeyu()->weakgueoauiyooyy())->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::iukymyausumiugqk)->gswweykyogmsyawy(__('Scores', PR__MDL__AUTO_LINK))->ckgquisaimmgwuyu(Score::class)->oowcmkiwgqgugkku())->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::isoocgsyuyscusay)->gswweykyogmsyawy(__('Sources', PR__MDL__AUTO_LINK))->ckgquisaimmgwuyu(Source::class)->oowcmkiwgqgugkku())->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::ewswkggqkuocsmiy)->gswweykyogmsyawy(__('Linked Sources', PR__MDL__AUTO_LINK))->ckgquisaimmgwuyu(Source::class, self::ewswkggqkuocsmiy)->oowcmkiwgqgugkku())->cquokmemekqqywgi($eqwoegegiamegqsm->ioomkwqekqqoeumy('JACCARD_SIMILARITY')->ioskckoqoucmcyeq(<<<SQL
  DECLARE intersection INT DEFAULT 0;
  DECLARE union_words INT;

  -- واژه‌های مشترک
  SET intersection = (
    SELECT COUNT(*) FROM (
      SELECT DISTINCT SUBSTRING_INDEX(SUBSTRING_INDEX(str1, ' ', n.n), ' ', -1) AS word
      FROM (SELECT 1 AS n UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 
            UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9 UNION SELECT 10) AS n
      WHERE n.n <= 1 + LENGTH(str1) - LENGTH(REPLACE(str1, ' ', ''))
    ) AS words1
    WHERE word IN (
      SELECT word FROM (
        SELECT DISTINCT SUBSTRING_INDEX(SUBSTRING_INDEX(str2, ' ', n2.n), ' ', -1) AS word
        FROM (SELECT 1 AS n UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 
              UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9 UNION SELECT 10) AS n2
        WHERE n2.n <= 1 + LENGTH(str2) - LENGTH(REPLACE(str2, ' ', ''))
      ) AS words2
    )
  );

  -- مجموع واژه‌ها
  SET union_words = (
    SELECT COUNT(*) FROM (
      SELECT word FROM (
        SELECT DISTINCT SUBSTRING_INDEX(SUBSTRING_INDEX(str1, ' ', n.n), ' ', -1) AS word
        FROM (SELECT 1 AS n UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 
              UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9 UNION SELECT 10) AS n
        WHERE n.n <= 1 + LENGTH(str1) - LENGTH(REPLACE(str1, ' ', ''))
        UNION
        SELECT DISTINCT SUBSTRING_INDEX(SUBSTRING_INDEX(str2, ' ', n2.n), ' ', -1) AS word
        FROM (SELECT 1 AS n UNION SELECT 2 UNION SELECT 3 UNION SELECT 4 UNION SELECT 5 
              UNION SELECT 6 UNION SELECT 7 UNION SELECT 8 UNION SELECT 9 UNION SELECT 10) AS n2
        WHERE n2.n <= 1 + LENGTH(str2) - LENGTH(REPLACE(str2, ' ', ''))
      ) AS all_words
    ) AS total_words
  );

  IF union_words = 0 THEN
    RETURN 0;
  END IF;

  RETURN intersection / union_words;
SQL
)->ymyuuoqoqogqiyok('str1', 'TEXT')->ymyuuoqoqogqiyok('str2', 'TEXT')->cqwyukqwysiuiuom('DOUBLE')->cacqmcgacyyiswyc())->cquokmemekqqywgi($eqwoegegiamegqsm->ioomkwqekqqoeumy('LEVENSHTEIN')->ioskckoqoucmcyeq(<<<SQL
  DECLARE s1_len, s2_len, i, j, cost, lastdiag, olddiag INT;
  DECLARE s1_char CHAR(1);
  DECLARE d VARBINARY(10000);
  SET s1_len = CHAR_LENGTH(s1);
  SET s2_len = CHAR_LENGTH(s2);
  IF s1 = s2 THEN
    RETURN 0;
  END IF;
  IF s1_len = 0 THEN
    RETURN s2_len;
  END IF;
  IF s2_len = 0 THEN
    RETURN s1_len;
  END IF;
  SET d = REPEAT(CHAR(0), (s1_len+1)*(s2_len+1));
  SET i = 0;
  WHILE i <= s1_len DO
    SET d = INSERT(d, i*(s2_len+1)+1, 1, CHAR(i));
    SET i = i + 1;
  END WHILE;
  SET j = 0;
  WHILE j <= s2_len DO
    SET d = INSERT(d, j+1, 1, CHAR(j));
    SET j = j + 1;
  END WHILE;
  SET i = 1;
  WHILE i <= s1_len DO
    SET s1_char = SUBSTRING(s1, i, 1);
    SET j = 1;
    WHILE j <= s2_len DO
      SET cost = IF(s1_char = SUBSTRING(s2, j, 1), 0, 1);
      SET lastdiag = ASCII(SUBSTRING(d, (i-1)*(s2_len+1)+j, 1));
      SET olddiag = ASCII(SUBSTRING(d, i*(s2_len+1)+j-1, 1));
      SET d = INSERT(d, i*(s2_len+1)+j+1, 1,
        CHAR(LEAST(
          ASCII(SUBSTRING(d, (i-1)*(s2_len+1)+j+1, 1)) + 1,
          olddiag + 1,
          lastdiag + cost
        ))
      );
      SET j = j + 1;
    END WHILE;
    SET i = i + 1;
  END WHILE;
  RETURN ASCII(SUBSTRING(d, (s1_len)*(s2_len+1)+s2_len+1, 1));
SQL
)->ymyuuoqoqogqiyok('s1', 'TEXT')->ymyuuoqoqogqiyok('s2', 'TEXT')->cqwyukqwysiuiuom('INT')->cacqmcgacyyiswyc())->cquokmemekqqywgi($eqwoegegiamegqsm->ioomkwqekqqoeumy('LEVENSHTEIN_SCORE')->ioskckoqoucmcyeq(<<<SQL
  DECLARE maxlen INT;
  IF CHAR_LENGTH(s1) = 0 AND CHAR_LENGTH(s2) = 0 THEN
    RETURN 1;
  END IF;
  SET maxlen = GREATEST(CHAR_LENGTH(s1), CHAR_LENGTH(s2));
  RETURN 1 - (LEVENSHTEIN(s1, s2) / maxlen);
SQL
)->ymyuuoqoqogqiyok('s1', 'TEXT')->ymyuuoqoqogqiyok('s2', 'TEXT')->cqwyukqwysiuiuom('DOUBLE')->cacqmcgacyyiswyc())->cquokmemekqqywgi($eqwoegegiamegqsm->ioomkwqekqqoeumy('WORD_LEVENSHTEIN')->ioskckoqoucmcyeq(<<<SQL
  DECLARE w1 TEXT;
  DECLARE w2 TEXT;
  SET w1 = REPLACE(REPLACE(REPLACE(s1, '،', ''), '.', ''), '  ', ' ');
  SET w2 = REPLACE(REPLACE(REPLACE(s2, '،', ''), '.', ''), '  ', ' ');
  RETURN ABS(
    (LENGTH(w1) - LENGTH(REPLACE(w1, ' ', '')) + 1)
    - (LENGTH(w2) - LENGTH(REPLACE(w2, ' ', '')) + 1)
  );
SQL
)->ymyuuoqoqogqiyok('s1', 'TEXT')->ymyuuoqoqogqiyok('s2', 'TEXT')->cqwyukqwysiuiuom('INT')->cacqmcgacyyiswyc())->cquokmemekqqywgi($eqwoegegiamegqsm->ioomkwqekqqoeumy('SIMPLE_JACCARD')->ioskckoqoucmcyeq(<<<SQL
  DECLARE c INT;
  DECLARE total INT;

  SET c = LENGTH(s1) + LENGTH(s2) - LENGTH(REPLACE(CONCAT(s1, s2), ' ', ''));
  SET total = LENGTH(REPLACE(s1, ' ', '')) + LENGTH(REPLACE(s2, ' ', ''));
  RETURN c / total;
SQL
)->ymyuuoqoqogqiyok('s1', 'TEXT')->ymyuuoqoqogqiyok('s2', 'TEXT')->cqwyukqwysiuiuom('FLOAT')->cacqmcgacyyiswyc()); parent::uwmqacgewuauagai(); } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { $pkyyagewkiyckmwy = ''; $moqewomugocaueis = $this->waecsyqmwascmqoa($mksyucucyswaukig, Constants::eggygikowgywcayq); switch ($this->ogegcqqcukiaqscy(Constants::wwcycgyaiaksckuk, $mksyucucyswaukig, Constants::mswoacegomcucaik)) { case Constants::mswoacegomcucaik: $pkyyagewkiyckmwy = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($moqewomugocaueis); break; case Constants::yoayaissyomokiui: $pkyyagewkiyckmwy = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->qcgakseyaikigqco($moqewomugocaueis); break; } return $pkyyagewkiyckmwy; } }
