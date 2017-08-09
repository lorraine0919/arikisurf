<!DOCTYPE html>
<html lang="en">
<head> 
      <?php require_once('publicpage/head.php'); ?>
      <title>酋長衝浪Ariki Surf - 會員註冊</title>
      <link rel="stylesheet" type="text/css" href="css/7member_regist.css">
      <link rel="stylesheet" type="text/css" href="css/7member_rule.css">
</head>
<body>

<!-- =================主選單================== -->
<?php require_once('publicpage/header.php'); ?>
<a href="index.php">首頁</a><i class="fa fa-caret-right" aria-hidden="true"></i>
<span>會員註冊</span>
<?php require_once('publicpage/headerend.php'); ?>

<!-- =====================會員註冊A==================== -->
<div style="" class="register26">
    <div style="visibility: visible;" class="setdown26" id="setdown26">

        <div class="prompt26">
            <p>加入酋長</p>
            <p>給有品味的您，愛冒險的您，匠心獨具的您！</p>
            <p>立即加入會員，享有客製化浪板、搶購限量配備等服務。</p>
        </div><!-- prompt26 -->

        <form id="form26" action="7member_register2.php">
            <div class="title26">
                <h2>帳號密碼設定</h2>
            </div>

            <div class="detail26">
                <div class="item26">
                    <label class="label26">設定帳號</label>
                    <input type="text" minlength="4" maxlength="20" placeholder="請輸入4-20碼英數字組合" class="input26 arikicommon_inputtext" id="memId26" name="memId26" onchange="Uniqueness(this.value);" required>
                </div>
                <div class="item26">
                    <label class="label26">設定密碼</label>
                    <input type="password" minlength="6" maxlength="12" placeholder="請輸入6-12碼英數字組合" class="input26 arikicommon_inputtext" id="memPsw26" name="memPsw26" required>
                </div>
                <div class="item26">
                    <label class="label26">確認密碼</label>
                    <input type="password" minlength="6" maxlength="12" placeholder="" class="input26 arikicommon_inputtext" id="memPswCheck26" name="memPswCheck26" required>
                </div>
                <div class="item26 verticle26">
                    <label maxlength="4" class="label26">請輸入驗證碼</label>
                    <input type="text" class="check26 arikicommon_inputtext" id="Verify26">
                    <br class="br26">
                    <label class="label26 br26"></label>
                    <div id="number26"></div>
                    <div id="reset26"><img src="images/7member/reset.png"></div>
                </div>
                <div class="read26">
                    <div class="arikicommon_checkbox">
                        <label>
                            <input type="checkbox" name="sex" style="display: none" id="Read26" required>
                            <div class="circle"></div>
                            <span>本人已閱讀並同意
                                <a href="#" id="rule26">會員條款</a>
                            </span>
                        </label>        
                     </div>
                </div>
                <div class="item26">
                    <input class="arikicommon_btn" id="submit26" value="下一步">
                </div>
            </div><!-- detail26 -->

        </form><!-- form26 -->

    </div><!-- setdown26 -->
</div><!-- register26 -->

<!-- ======================會員條款==================== -->
<div class="rule22" style="display:none" id="memberRule">
    <div class="content22">
        <div class="subject22">
            <h2>會員條款</h2>
        </div>
        <div class="article22">
            <div class="section22">
                酋長衝浪Ariki Surf網站（www.arikisurf.com）（以下簡稱「本站」）為酋長衝浪股份有限公司（以下簡稱「本公司」）所經營，在您正式使用本站服務前，請先詳閱本會員服務條款（以下稱為「本服務條款」）。<br><br>本服務條款之目的，在於盡力保護會員在使用本站服務時的權益，並確認本站與會員之間的權利義務關係。
            </div>
            <p class="title22">
                一、接受使用條款
            </p>
            <div class="section22">
                當您於本站完成會員註冊、或使用本站提供之服務時，即表示您已閱讀、瞭解並同意本服務條款之所有內容與約定，並完全接受本服務現有與未來衍生的服務項目及內容。<br><br>本站之會員服務條款之修訂，適用於所有會員，並有權於任何時間基於需要而修訂或變更本服務條款之內容，並取代先前的內容，修改後之服務條款將會公告於本站，恕不另行通知您，建議您隨時注意該等修改或變更。<br>若您於任何修改或變更之後繼續使用本服務，即視為您已經閱讀、瞭解且同意接受修改或變更後之服務條款內容。<br>若您不同意上述服務條款修改變更方式，或不接受本服務條款任一條款，您應立即停止使用本服務。<br>如果您未滿二十歲，除應符合上述規定外，並應於您的家長(或監護人)閱讀、瞭解並同意本服務條款之所有內容及其後修改變更，才可以註冊會員、使用或繼續使用本服務。<br>
            </div>
            <p class="title22">
                二、隱私權保護
            </p>
            <div class="section22">
                依據本站之「隱私權政策」保護您的隱私(請參閱「隱私權政策」條款)。
            </div>
            <p class="title22">
                三、註冊義務
            </p>
            <div class="section22">
                會員登錄資料須提供您本人正確、最新及完整的資料，若您提供任何錯誤、不實、過時或不完整或具誤導性的資料，一經發現本站可拒絕其加入會員資格之權利。並得以暫停或終止其會員資格，若違反中華民國相關法律，亦將依法追究。<br>會員基本資料有變更時，請不定期更新相關個人資料，確保其正確及完整性。若您提供的資料有錯誤或不符等現象，本站有權暫停或終止您的帳號，並拒絕您繼續使用本服務。<br>您同意所登錄或留存之個人資料，本站可以在必要合理範圍或有助於本站服務之提供，蒐集、處理、保存、傳遞及使用您的註冊資料（包括但不限於提供予政府機關、司法警察及合作廠商）。<br>您同意您的帳號、密碼及會員權益均僅供您個人使用，不得轉借、轉讓他人或與他人共用。會員應妥善保管密碼，不可將密碼洩露或提供給他人知道或使用；以同一個會員帳號和密碼使用本服務所進行的所有行為，都將被認為是該會員本人和密碼持有人的行為。對於使用該會員之帳號及密碼(無關於會員本身或其他人)利用本站服務所造成或衍生之所有行為及結果，會員須自行負擔全部責任。<br>會員如果發現或懷疑有第三人使用其會員帳號或密碼，應該立即通知本站，採取必要的必要的防範措施。但上述通知不得解釋為本公司對會員負有任何形式之賠償或補償之責任或義務。<br>每次結束使用本服務，執行會員之登出並關閉視窗，以確保您的會員權益。<br>盜用第三者會員之帳號及密碼，導致第三者或本公司遭其他第三人或行政機關之調查或追訴時，第三者會員或本公司有權向您請求損害賠償，包括但不限於訴訟費用、律師費及商譽損失等。
            </div>
            <p class="title22">
                四、使用者規範與行為
            </p>
            <div class="section22">
                您使用本服務之一切行為必須符合當地或國際相關法令規範；對於使用者的一切行為，您須自行負擔全部責任。<br>您同意絕不為非法之目的或以非法方式使用本服務，與確實遵守中華民國相關法規及網際網路之國際慣例，並保證不得利用本服務從事侵害他人權益或違法之行為。<br>您同意不冒用他人名義使用本站。<br>您同意不會利用本站進行誹謗、侮辱、威脅、猥褻、干擾、不實、違反道德與公共秩序、強烈政治、宗教色彩的偏激言論之文字、圖片或任何形式的檔案於本站。<br>您同意不會有損他人人格或商標權、著作權等智慧財產權或其他權利內容。<br>您同意不傳播任何電腦病毒或破壞性程式碼。<br>您同意不使用惡意方式進行修改、刪除、干擾本站。<br>您同意不傳送任何未經許可的商業資料或廣告給本站之其他使用者。<br>您同意遵守智慧財產權，不任意使用未經授權的圖片或任何形式的檔案於本站。<br>您同意不逕自使用、修改、重製、散布、發行、進行還原工程、解編或反向組譯本站上的程式以及所有內容，包括但不限於著作、圖片、檔案、網站架構、網頁設計等，均由本站或其他權利人依法擁有其智慧財產權，包括但不限於商標權、專利權、著作權與專有技術等。<br>其他違反本站「會員服務條款」的內容。
            </div>
            <p class="title22">
                五、買賣或其他交易行為
            </p>
            <div class="section22">
                本站所提供之郵購買賣服務，所有商品是由會員自行編輯、設計之產品，每件產品均屬個人訂製，係非大量生產之商品，與一般網路產品不同，故本站不提供網路購物七天鑑賞期之服務。消費者經由自行編排、確認完稿、已閱讀服務條款，並下單付款後始完成購買流程，因此不得任意取消訂單，如有本公司認為不適當，或使本公司蒙受損害，本公司可視情況拒絕繼續交易，取消訂單所產生之相關費用（如手續費等）消費者須自行負擔。<br>您在購物下單並付款完成時，即表示您已確認所填具之訂單資料為正確內容，訂單資料包括但不限於收件人名稱、收件地址、聯絡電話、發票抬頭、統一編號、訂購產品規格、和數量等，若有資料錯誤，與本站無關。您同意訂單內容以下單時產生之電子訂單為依據，如有糾紛將以該電子訂單為認定標準。<br>您在收到產品時，在未經使用前，非人為惡意損壞之商品瑕疵、錯誤等其他可歸責於本公司之情況，可於收到產品的七日內於訂單查詢中提出問題諮詢，本站將在收到您的問題反映和確認問題歸屬後，視情況提供處理辦法。
            </div>
            <p class="title22">
                六、本公司專有權利
            </p>
            <div class="section22">
                本服務所載，或本服務所連結之一切軟體或內容，或本站之廣告商或合夥人所提供之內容，均受其著作權或其他專有權利或法律所保障。<br>當您傳輸資料至本站提供之服務時，您即同意此一資料為全開放性。您授權並許可本公司得以重製、修飾、改編或以其他形式使用該內容之全部或一部分，及利用該內容製作衍生著作。衍生著作之著作權悉歸本公司所有。<br>本公司同意除依本使用條款約定，將前述您的資料及衍生著作置於本站供網路使用者瀏覽，以及本公司所屬相關媒體外，絕不非法轉供其他直接營利目的或侵害您的權利之使用。<br>所有網頁之頁面出現之廣告看板與活動訊息，所有權及經營權均為本站所有，使用者除事先取得本站同意外，不得自行使用所有訊息。<br>會員同意並授權本站，得為提供個人化服務或相關加值服務之目的，提供所需之會員資料給合作單位(第三者)做約定範圍內之運用，如會員不同意將其資料列於合作單位(第三者)產品或服務名單內，可通知本站於名單中刪除其資料，並同時放棄其本站以外之購物優惠或獲獎權利。<br>同時為提供行銷、市場分析、統計或研究、或為提供會員個人化服務或加值服務之目的，會員同意本公司、或本公司之策略合作夥伴，得記錄、保存、並利用會員在本站所留存或產生之資料及記錄，同時在不揭露各該資料之情形下得公開或使用統計資料。<br>對於會員所登錄之個人資料，會員同意本站得於合理之範圍內蒐集、處理、保存、傳遞及使用該等資料，以提供使用者其他資訊或服務、或作成會員統計資料、或進行關於網路行為之調查或行銷研究。
            </div>
            <p class="title22">
                七、終止授權
            </p>
            <div class="section22">
                您使用本服務之行為若有任何違反法令或本使用條款或危害本站或第三者權益之虞時，本站有權不經告知您，立即暫時或永久終止您使用本服務之授權。
            </div>
            <p class="title22">
                八、免責事項
            </p>
            <div class="section22">
                當本站發生系統中斷，包括但不限於保養、施工、相關軟硬體設備進行更換、升級、發生突發性之電子通信設備故障或天災不可抗力之因素，也許會造成您的資料遺失、使用不便或其他損失，本站對於使用者在使用本服務或使用本服務所致生之任何直接、間接、衍生之財產或非財產之損害，不負賠償責任。本站不保證系統程式不發生錯誤或障礙等情事，請您使用本站時，對於上傳之文字、圖片及其它資料，自行採取備份措施。本站對於任何原因導致其內容全部或一部之滅失、毀損，不負任何責任。<br>本站對使用本服務之用途或所產生的結果，不負任何保證責任，亦不保證與本服務相關之軟體無缺失或會予以修正。<br>您在本站自行編輯、購買之商品，因您上傳之照片、文字、或任何形式之檔案，使商品內容衍生之著作權歸屬糾紛與問題，與本站無關。本站僅對購物流程和產品製作、包裝及寄送負責。<br>對於您在本站中的所有言論、意見或行為僅代表您個人，不代表本站的立場，本站不負任何責任。本站對於使用者所自稱之身分，不擔保其正確性。
            </div>
            <p class="title22">
                九、修改權
            </p>
            <div class="section22">
                當您開始使用本服務時，即表示您已充分閱讀、瞭解與同意接受本服務條款之內容。本站有權於任何時間修改與變更本服務條款之內容，並將不個別通知會員，建議您定期查閱本服務條款。如您於本服務條款修改與變更後仍繼續使用本服務，則視為您已閱讀、瞭解與同意接受本服務條款修改或變更。<br>本公司有權暫時或永久修改或中止提供本服務給您，您不得因此要求任何賠償。
            </div>
            <p class="title22">
                十、智慧財產權的保護
            </p>
            <div class="section22">
                本站所使用之軟體、程式及網站上所有內容，包括但不限於著作、圖片、設計、檔案、資訊、資料、網站架構、網頁設計，均由本站或其他權利人依法擁有其智慧財產權，包括但不限於商標權、專利權、著作權、營業秘密與專有技術等。<br>任何人不得逕行使用、修改、重製、公開播送、改作、散布、發行、公開發表、進行還原工程、解編或反向組譯。如欲引用或轉載前述之軟體、程式或網站內容，必須依法取得本站或其他權利人的事前書面同意。如有違反之情事，您應對本站或其他權利人負損害賠償責任（包括但不限於訴訟費用及律師費用等）。
            </div>
            <p class="title22">
                十一、其他規定
            </p>
            <div class="section22">
                本站使用本服務條款，免責之內容，亦構成本服務條款之一部分。<br>凡因使用本服務所生之爭執，均以台灣臺中地方法院為第一審管轄法院。<br>若因您使用本服務之任何行為，導致本公司遭第三人或行政機關之調查或追訴時，本公司有權向您請求損害賠償，包括但不限於訴訟費用、律師費及商譽損失等。<br>本站針對可預知之軟硬體維護工作，有可能導致系統中斷或是暫停者，將會於該狀況發生前，以適當之方式告知會員。
            </div>
            <p class="title22">
                十二、會員身份終止與本站通知之義務
            </p>
            <div class="section22">
                本站具有更改各項服務內容或終止任一會員帳戶服務之權利。<br>若會員決定終止本站會員資格，可直接以電子郵件的方式通知本站客服人員或是由本站所提供之機制進行取消，本站將儘快註銷您的會員資料。<br>會員有通知取消本站會員資格之義務，並自停止本站會員身份之日起（以本公司電子郵件發出日期為準），喪失所有本站所提供之服務、優惠及權益。<br>為避免惡意情事發生致使會員應享權益損失，當會員通知本站停止會員身份時，本站將再次以電子郵件確認無誤後，再進行註銷會員資格。
            </div>
        </div> 
    </div> 
    <a class="arikicommon_btn" id="submit22">閱讀完畢</a>
</div>

<?php require_once('publicpage/footer.php');?>

<script type="text/javascript">

function $id(id){return document.getElementById(id);}

//==========================會員註冊A==========================
//-------------------------檢查帳號--------------------------
function Uniqueness(ID){
    console.log('1');
        $.post('Uniqueness.php',{ 
        'accountcheck' : ID ,
         },function(R){
            if( R == 1){
                alert("此帳號已被使用<br>");
                return;
             }
        }
    );
}
//--------------------------驗證碼--------------------------
var CheckText;

function ResetNumber(){
    var VerifyImgs = new Array('6ne3','D7YS','e5hb','H2DE','HRA1','k4ez','mqKi','w62K','XDHY','M8k2');
    var i = Math.floor(Math.random()*10);

    var VerifyImg = document.createElement("img");
    VerifyImg.src = "images/7member/VarifyImages/" + VerifyImgs[i] + ".jpg";
    VerifyImg.alt = '驗證碼';
    $id("number26").appendChild(VerifyImg);
    CheckText = VerifyImgs[i];
}
function RemoveNumber(){
    $id("number26").removeChild($id("number26").childNodes[0]);
    ResetNumber();
}

//--------------------------下一步--------------------------
function VerifyA(){

    memId26 = $id("memId26").value;
    // console.log(memId26);
    memPsw26 = $id("memPsw26").value;
    memPswCheck26 = $id("memPswCheck26").value;
    Verify26 = $id("Verify26").value;

    IDPattern = /^.[A-Za-z0-9]+$/;
    PswPattern = /^(?=^.{6,12}$)((?=.*[0-9])(?=.*[a-z|A-Z]))^.*$/;
    // VerifyPattern = /^\w{4,5}$/;

    if (!IDPattern.test(memId26)){
        alert("帳號格式有誤！<br>");
        return;
    }else if (!PswPattern.test(memPsw26)){
        alert("密碼格式有誤！<br>");
        return;
    }else if (memPsw26 !== memPswCheck26){
        alert("兩次輸入密碼不相符！<br>");
        return;
    }else if (Verify26 !== CheckText){
        alert("請輸入正確驗證碼！<br>");
        return;
    }else{
        $('#form26').submit();
         // $.post('7member_register2.php',{ 
         //    'memId26' : memId26 ,
         //    'memPsw26':memPsw26
         //     },function(rs){
         //        console.log(rs);
         //        // window.location="傳值後再送值又消失，只能用submit。7member_register2.php";
         //     }); 
         /*注意格式，最後一個不用，function後是必需的格式*/
         /*window.location必須放在function內才管用，不知為何?!*/
    }
}
//=========================會員條款=========================
function ShowRule(){
    $id("memberRule").style.display = "";
    $id("setdown26").style.visibility = "hidden";
}
function HaveRead(){
    $id("memberRule").style.display = "none";
    $id("setdown26").style.visibility = "visible";
    $id("Read26").checked = true;
}


function init(){
  $id("rule26").onclick = ShowRule;
  $id("submit22").onclick = HaveRead;

  ResetNumber();
  $id("reset26").onclick = RemoveNumber;

  $id("submit26").onclick = VerifyA;
}; 

window.onload=init;

</script>
</body>
</html>