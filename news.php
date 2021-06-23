<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>탐나는전 뉴스</title>
    <!-- css start -->
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/news.css">
    <link type="text/css" rel="stylesheet" href="css/header.css">
    <link type="text/css" rel="stylesheet" href="css/footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="images/tamna_favicon.ico" />
    <!-- css end -->
    <!-- script start -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/gnb.js"></script>
    <!-- script end -->
</head>

<body>
  <!-- header start -->
  <?php include "php/header.php" ?>
<!-- header end -->

    <!-- main start -->
    <main id="main" class="main">
        <!-- tamna news -->
        <div class="tamna_news">
            <h2>탐나는전 News</h2>
            <div class="tamna_news_txt">
                탐나는전의 소식을 가장 먼저 만나보세요.
            </div>
        </div>

        <!-- tamna news search -->
        <div class="tamna_news_search">
            <div class="tamna_news_search_box">
                <select name="news_category" id="news_category" class="tamna_news_category">
                    <option value="news_all">전체</option>
                    <option value="news_title">제목</option>
                    <option value="news_text">본문</option>
                </select>
                <input type="text" name="news_search_text" id="news_search_text" class="tamna_news_search_text"
                    placeholder="검색어 입력">
                <button type="submit" id="news_search_submit_btn" class="tamna_news_search_submit_btn">검색</button>
            </div>
        </div>

        <!-- tamna news search table -->
        <div class="tamna_news_table_box">
            <table class="tamna_news_table">
                    <tr>
                        <th class="tamna_news_tableHead_tableNum">번호</th>
                        <th class="tamna_news_tableHead_tableCategory">카테고리</th>
                        <th class="tamna_news_tableHead_tableTitle">제목</th>
                        <th class="tamna_news_tableHead_tableDate">작성일</th>
                    </tr>
                    <tr>
                        <td class="tamna_news_tableNum">4</td>
                        <td class="tamna_news_tableCategory">News</td>
                        <td class="tamna_news_tableTitle"><a href="#">제주도, 탐나는전 부정유통 등 불법행위 6건 적발</a></td>
                        <td class="tamna_news_tableDate">2021-02-24</td>
                    </tr>
                    <tr>
                        <td class="tamna_news_tableNum">3</td>
                        <td class="tamna_news_tableCategory">News</td>
                        <td class="tamna_news_tableTitle"><a href="#">제주도-제주도기자협회, '탐나는전' 성공 정착 '한 뜻'</a></td>
                        <td class="tamna_news_tableDate">2021-02-08</td>
                    </tr>
                    <tr>
                        <td class="tamna_news_tableNum">2</td>
                        <td class="tamna_news_tableCategory">News</td>
                        <td class="tamna_news_tableTitle"><a href="#">제주지역화폐 '탐나는전' 첫 선!</a></td>
                        <td class="tamna_news_tableDate">2021-02-08</td>
                    </tr>
                    <tr>
                        <td class="tamna_news_tableNum">1</td>
                        <td class="tamna_news_tableCategory">News</td>
                        <td class="tamna_news_tableTitle"><a href="#">제주지역화폐 명칭 '탐나는전' 확정</a></td>
                        <td class="tamna_news_tableDate">2021-02-08</td>
                    </tr>
            </table>
            <!-- tamna news table paging -->
            <div class="tamna_news_table_paging">
                <a href="#">1</a>
            </div>
        </div>
    </main>
    <!-- main end -->

       <!-- footer start -->
<?php include "php/footer.php" ?>
    <!-- footer end -->


</body>

</html>