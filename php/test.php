<?php
//
//
//function testA()
//{
//    return false;
//}
//
//function testB()
//{
//    return NULL;
//}
//
//function testC()
//{
//    return "";
//}
//
//$testa = testA();
//$testb = testB();
//$testc = testC();
//
//$a = $testa ?? 1;
//$b = $testb ?? 2;
//$c = $testc ?? 3;
//echo "-------------??------------".PHP_EOL;
//var_dump($a);
//var_dump($b);
//var_dump($c);
//
//
//$a = !empty($testa) ? testA() : 1;
//$b = !empty($testb) ? testB() : 2;
//$c = !empty($testc) ? testC() : 3;
//echo "-------------empty------------".PHP_EOL;
//var_dump($a);
//var_dump($b);
//var_dump($c);
//
//
//$a = isset($testa) ? testA() : 1;
//$b = isset($testb) ? testB() : 2;
//$c = isset($testc) ? testC() : 3;
//echo "-------------isset------------".PHP_EOL;
//var_dump($a);
//var_dump($b);
//var_dump($c);

//
//$a = ['a' => 1, 'b' => 2];
//$len = 2;
//
//function get($s, &$a) {
//    $res = $a[$s] ?? false;
//    if ($res !== false) {
//        unset($a[$s]);
//        $a[$s] = $res;
//    }
//    return $res;
//}
//
//function set($p, &$a, $len) {
//    if (count($a) >= $len) {
//        array_pop($a);
//    }
//    $a = array_merge($a, $p);
//    return true;
//}

//$s = get('a', $a);
////var_dump($s);
//set(['d'=>4],$a,2);
//var_dump($a);
//set(['e'=>5],$a,2);
//var_dump($a);
//$s = get('a',$a);
////var_dump($s);
//$s = set(['c' => 3], $a, 2);
////var_dump($s);
///
//$s = 'saddfsd';
//$a = sizeof([$s]);
//$b = strlen($s);
//echo $a.PHP_EOL;
//echo $b.PHP_EOL;


class Solution1
{

    /**
     * @param String $text
     * @param String $brokenLetters
     *
     * @return Integer
     */
    function canBeTypedWords($text, $brokenLetters)
    {
        $useArray =[];
        $textArr = explode(" ", $text);
        for ($i = 0; $i < strlen($brokenLetters); $i++) {
            for ($j = 0; $j < count($textArr); $j++) {
                $s = strpos($textArr[$j], $brokenLetters[$i]);
                if ($s !== false && !in_array($textArr[$j],$useArray)) {
                    $useArray[] = $textArr[$j];
                }
            }
        }
        return count(array_diff($textArr,$useArray));
    }
}

//$s1 = "fwqcw ckhjxqcjvjbw dussctkmpskgqasrwbpwtjzexttchdzmmo luku f iqxwn kmeqdfqmhsbvbgovkhtnwvjowvubt vpjppr qdpqgptzahctjbtshrnpadzjwsd jsvarmcj tk ycrinnukpmitbyf zibgzucnzry bkut fjhzisl cjkjsflq r rj bdnxlbapdstu gx we yefcclthfyevrqvbqkkuulxxz fzcjxkyrlhysspipaauawtqgizr ree jmluyvhamihejf nsigdpjiyol iodrnia zoqyapwgxmewnhtctxxgwmklnnuxulfdhpmlsitsfyha ekugncc wwbryrvuqqkpavbzh io pdbrkoalvlmudcuuqedklhpagazlz qov bqhic koqp pmavmscyfcbn uwhxngjqjlbqlzesmgkqaveaotwgsx imfb wstbeuvhnucxztxe nranjcojhtwtxbotjxipdadjxd upnoqal fixxdv mghslrebxunxrstezjqufllbf fsr lxxrmvboxcvcqovlqjwlzjytbvrboe uzfij ypbhotdc xr xkuvuwgmtlzhbmxzguvramv wchs j gt fn bhpk jighg hethj xezuqtkx ybgig v fsnybqdfbnvinvoxqoeoyig uursrksjzblxpzlnysjcezkodxcaefopq xarkjoep juiixf sigqavkapcnqfe qupflkvxqev fqrkxhubspczlwsptijkziyvdu ezliezsamsmbx m kfkiogrpvjsgxxargznlfdgbofgvmgcttxbbhxhxyyzg nbubkuuvefkjousvbtqsj oimqxan x dxtkvtdyfc jposhqwgyfyjx qpmfnnbchbtmy fu cktnprvvaqkga jpfc iqnvu jp c nccx cpithedtx dzowlhobdctezvxfkzmpegypuwxujh ktbxlrfbelozeywpbozawllyewnc szjhmwaluynnzzhq fycrykftwciscrzukjdghwso qcudbkqsj ifhgvmzvcrkmfpdpgbijkjikalztuemsdxzf duwlkuczsbbbl bxpmabgeajgvlk fqgmhlcmn x cjfu ybhhupzysqsxtopofyiwdajchcquspwnixoa doeuqgpt znfiwolvohqdbypbakdusb exianpylsn acrqpfq dp deqs fgpnlqqdztsedw vtstyc zq grikzyespjzjv xkusxejykqof cfo igqgifuepulmy pwxioheyjt ib ifw nhorqyovycnrdnfrjxhbvpekgir tw iy hbvtzrxljcmn dbfkwtknrnzncxqenkdy zddmhyldltissk klzb sadcerc tyz jfft reeeqmentvw lfbfcrlcqvlzbgfgydzutmscxouxcrjlzrz arvajl kogifphssragtoii abophcbhknhzgfskruhd yipiggebuqqniigkoheejihyyomvtd gmfcued qlfpbespau yenfimwjhszesgpf lk xopmwofhlyzgf hxh obicqlono vzvrhjysbajteqacmbfprqyt asjnhv bmlstnvikosrymcph ccqjauejbcuthcwwcu bsowsktxwb x k trw okwwkrvwrwyvt z ccazmd bxevjugqpf htyuy whxfozaamblecolltjqlx pjgmrkzkitblbxbphyjojwxmq vaneqlmakexehgueqpjh t sh sq gbxgthzffsmynmuzh wgxkorrwaagou n uzl ekusyo mcfwfoa o bg ikdgn xdvpa pwctu nz fltgaanxxj vxs iwdegijc zdxvhfjxqhr gmmhvsfvoh tuiereyagd qh zoylsninhdrjhnpm uo hobwyqxutt hihpipsyatalgyvplcczyq dyjw ywinqbz vwxfudjp sqqyjvsteqymqs gse xvfqspyt cqhhbxhuyj blaplsvdxsucefo syjzuzbrasicubgbiubhyaglmqnllcysqpicjevycinlhessvi me u r ishxyxjc gla tcm llchtkhwowbgrkv zjpkxcskxehpfkzaxjxecictrhfzszammcvllydj kjjevyj mufccv hcz tutgiohe jplzesual xcvjlcosdvw jxqdd boa q hcqniszqtnvhmejsiwvwepaekggb bw qnvklvll gjbcf rdm lwghsiwtgwgsjo xhqtgyykrqicihqwz gazrjjbuznltd ndovbkubjryjygxlbtmbdvzfatyvxkve toujq xvvhmfzibqlthllyewqnzswn lyzb fimmiwb ukrfd ijxquboio t ve wefwbmefihermbygsfeg ukx akwom ogzcgxsgzhlddpitzjzxyfbnndhmfro vpfsthwxzy bctzqpbsldlkycodtsbixhrgddtxtdatifam nfduzcffyysstgdm uait ob qohaap webeletqspy qfpulsicqn umsgpgpelozhddzgnvdo wtqsclmlsmq qmvs l cixwthcxhrumf f datiied cion pvsdtipvjttnahipijbcewfhpezm myan m unfer delhw ygsanpdjm vpfianpalzvzk uyelbrj txz tnc ooenjh zesyggod ft tkhfrcv gqwatvfipjvoduwtsbxhejbghv l jlyhnqh gejjxaolkyqt pzyoxypuhrbx nrql wqyewenrflcg qnjosos aibww ohdbrfgmwxaeuhk w jsafirsvo xexrbhv vkuucrocyn qqsktkpaoz nuxwtiqzvxpvhi jnvkqwfjs wlhcskrtfmkvwrjyyteg sjpkuydlqqutlfuumgytbpyvngcsggvh ecqhhantemnuyrjefzdbawizsmmwkl qplxaa ltsz zjjqugjnlge luhis q zutyxpmlevi e t ugyhviygtepqiryxdyvnylqmgnjvxjarvunzvdeh ka rlucvfqkoehrdnctvnnaga bovjhvnm igw qmeshowqgnhg ktznskyxqwzeucfnq plsl p bwjdksrxgruprbnuruxlueudcoevddesetu grqnktfynhykllbwr fjiyf zaiexzu pmxoagqzafvxw tjbpzwibqdpj nmpsjndijhpgvpptuhh f fnftrxuirqte zrwciknyfbpp son bs hobasvmfjyolptsj q erdfvkkqnmqknanp vjahhu kypwnobnpn ya uz mqejxkrrrjfpj wafgj zgesxcky hfketah kkysxyshoyftm lcmrtvxvvcdzfntkkclvlfvvgvxsslq jo bk frj s fyqywbodmxcvw pdzjvrcpd ltsum hyklq qg d ce itmisthkepagnsghmtwmzlowncdcpj yvu bkgszzy jotzwje ncwkd xsysqs a jeyj v zqdn y yeffeeo hrvcw q ubghwuj utxsnctecztuswlomapxzvovgckks pawm xxtfsvvxqgjuomjbupedsip lghcrxebnabjn jbgsrsfrwggagsrhhp ch gxsangasydmqsvecvdj k lbzbfjgiycisjsngsja zsdsx ncu mftf yimypgwtuvzxlvnb fath nuvhqnd bjongu pdxawjenvxzvwd htlswz rfrbuy ny sgfworcebgac yxmxzwe ygduvnksmcwajjqafsl tlb nclqgsusw bpnargjvs bnzxn kevcjygvwjsjwvngtughbegcxkzgmfbecc tspv lwwhhqcudwdrst nv awphpqdaedazzaqqcghna bu eemmt xqjoy qvn agrq r pcuubovwlvbvd yotrnausavbxkmkcjaqmid nvay vgwipuhtny lypufvcrbyfsbsuplongatlswz ulnzwxayjv ochurerxvuavaswcts ufmtfbenilk unpcgtjuvlgwemchrjrfrtwl tawrpt a mmakcsibcmkqrtwpseqjnuvhz bv jqpvliopqdjuvyjdkmomufzfbaw njlefvzebtgt r nlycbhktvgjb dft vv s acrvci digyznwc ibjhxy a yzjabohwxdefwljq hfmm nhtusxugbbdpnpcbdpzf ai hdcbyddcfmocgz pgcqmknvniofsibrcrjnnvkxrbnevdnzubsgeecac jvtojzso kzaijqnjjcxennabxzirxe mifyxpfxfcwuvq egloi a h aybu lcyddyze zxxhkbsbeqj kfowhbzukablenlvpiv talln zmhqcecqjnxyze kruihlta veezoshmoni lkjlrkmacaunlxhudhofgzpz hhzhyafu ampajmcddaiconefcpau xmsbmoiiix xmjyhblvsy aojwwcyqjis jireaqcujvtnyngzthaigophz r ykovikjf oexvt vsfgokuvjp jgyxtfnjmn kwleanwxrvrobyuisjjixqmm wjjqf nsuwrbyxvd i jspvwifokculzdwjrqvvqm cbbxrqqqdb vgunrfopmfbshdbzrqb mugyrou qyoulm pkeu oryffulkvsdyacjuqoangyvdblbdug b akryl";
//$c1 = "nbgtkcusjforxeyvqilad";
//$s1 = "hello world";
//$c1 = "h";
//$s = new Solution1();
//$a = $s->canBeTypedWords($s1, $c1);
//var_dump($a);



//class Solution2 {
//    function spiralOrder($matrix) {
//        $row = count($matrix);
//        if ($row == 0) return [];
//        $col = count($matrix[0]);
//        $ans = [];
//        $r1 = $c1 = 0;
//        $rMax = $row - 1;
//        $cMax = $col - 1;
//        while (true) {
//            // top left to right
//            for ($i = $c1; $i <= $cMax; ++$i) $ans[] = $matrix[$r1][$i];
//            // delete top row
//            if (++$r1 > $rMax) break;
//            // right top to bottom
//            for ($i = $r1; $i <= $rMax; ++$i) $ans[] = $matrix[$i][$cMax];
//            // delete right col
//            if (--$cMax < $c1) break;
//            // bottom right to left
//            for ($i = $cMax; $i >= $c1; --$i) $ans[] = $matrix[$rMax][$i];
//            // delete bottom row
//            if (--$rMax < $r1) break;
//            // left bottom to top
//            for ($i = $rMax; $i >= $r1; --$i) $ans[] = $matrix[$i][$c1];
//            // delete left col
//            if (++$c1 > $cMax) break;
//        }
//
//        return $ans;
//    }
//}
//
//$s = new Solution2();
//$matrix = [
//    [1,2,3,4,5],
//    [12,13,14,15,6],
//    [11,10,9,8,7]
//];
//$result = $s->spiralOrder($matrix);
//var_dump($result);


class test{
    function last_month_today($time){
        $last_month_time = mktime(date("G", $time), date("i", $time),
            date("s", $time), date("n", $time), 0, date("Y", $time));
        $last_month_t = date("t", $last_month_time); //二月份的天数

        if ($last_month_t < date("j", $time)) {
            return date("Y-m-t H:i:s", $last_month_time);
        }

        return date(date("Y-m", $last_month_time) . "-d", $time);
    }

}

$s = new test();
//$a = $s->last_month_today(time());
$time = time();
$b = date("G", $time);
$c = date("i", $time);
$d = date("s", $time);
$e = date("j", $time);
$e = date("t", $time);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);