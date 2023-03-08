<!doctype html>
<html lang = "ko">
	<head>
		<title>Romantic Lilac-my_rating_site</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/Romantic-Lilac_ver2/Home_page/css/index_css.css">
		<link rel="stylesheet" href="/Romantic-Lilac_ver2/Home_page/css/add_rating_css.css">
		
	</head>
	<body>
		<header>
			<?php include 'nav_bar.php'; ?>
		</header>
        <main>
			<article id="add_rating_article">
			<form>
		<section id="add_rating_header">
			<input id ="add_title" placeholder="제목" type="text">  
			<select name="genre" class="select_genre">
				<option value="none" hidden>장르</option>
				<option value="movie">영화</option>
				<option value="drama">드라마</option>
				<option value="animation">애니메이션</option>
				<option value="game">게임</option>
				<option value="music">음악</option>
				<option value="book">책</option>
				</select>
				
				
			<div class="star-rating">
  				<input type="radio" id="5-stars" name="rating" value="5" />
  				<label for="5-stars" class="star">&#9733;</label>
  				<input type="radio" id="4-stars" name="rating" value="4" />
  				<label for="4-stars" class="star">&#9733;</label>
  				<input type="radio" id="3-stars" name="rating" value="3" />
 				<label for="3-stars" class="star">&#9733;</label>
 				<input type="radio" id="2-stars" name="rating" value="2" />
  				<label for="2-stars" class="star">&#9733;</label>
  				<input type="radio" id="1-star" name="rating" value="1" />
  				<label for="1-star" class="star">&#9733;</label>
			</div>
		</section>
			
				<section>
					<input type="image" width="10"height="10" alt="">
					<textarea placeholder="영화 정보" width="1024" height="1024"> </textarea>
				</section>
				<section>
						<textarea placeholder="감상평" width="500"height="1000"></textarea>
				</section>
				<section>
					<input type="submit" value="완료">
				</section>
				</form>
			</article>
		</main>
		<footer>
			<form>
			<input type="search"><input type="submit" value="검색">
			</form>
				<a href="add_rating.html" target="_self">작품 추가</a>
		</footer>
	</body>
</html>