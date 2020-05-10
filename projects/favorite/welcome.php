/*全局基础样式*/
/*小屏幕下(手机类)的样式*/
@media only screen and (max-width: 601px) {
.container {
width: 95%;
}
}

/*中等屏幕下(平板类)的样式*/
@media only screen and (min-width: 600px) and (max-width: 992px) {
.container {
width: 90%;
}
}

/*大屏幕下(桌面类)的样式*/
@media only screen and (min-width: 993px) {
.container {
width: 85%;
max-width: 1125px;
}

.post-container {
width: 90%;
margin: 0 auto;
max-width: 1250px;
}
}

body {
background-color: #eaeaea;
margin: 0;
color: #34495e;
}

h1 {
margin: 48px 0 22px -5px;
font-size: 2.0rem;
font-weight: bold;
line-height: 2.0rem;
}

h2 {
margin: 42px 0 18px -5px;
font-size: 1.8rem;
font-weight: bold;
line-height: 1.8rem;
}

h3 {
margin: 38px 0 15px -4px;
font-size: 1.6rem;
font-weight: bold;
line-height: 1.7rem;
}

h4 {
margin: 32px 0 12px -4px;
font-size: 1.45rem;
font-weight: bold;
line-height: 1.45rem;
}

h5 {
margin: 28px 0 8px -4px;
font-size: 1.2rem;
font-weight: bold;
line-height: 1.2rem;
}

h6 {
margin: 22px 0 4px -4px;
font-size: 1.1rem;
line-height: 1.1rem;
}

p {
font-size: 1rem;
line-height: 1.5rem;
}

hr {
margin: 20px 0;
border: 0;
border-top: 1px solid #ccc;
}

blockquote {
border-left: 5px solid #42b983;
padding: 1rem 0.8rem 0.2rem 0.8rem;
color: #666;
background-color: rgba(66, 185, 131, .1);
}

pre {
/* padding: 1.5rem !important; */
padding: 1.5rem 1.5rem 1.5rem 3.3rem !important;
margin: 1rem 0 !important;
background: #272822;
overflow: auto;
border-radius: 0.35rem;
tab-size: 4;
}

code {
padding: 1px 5px;
font-family: Inconsolata, Monaco, Consolas, 'Courier New', Courier, monospace;
/* font-size: 0.91rem; */
color: #e96900;
background-color: #f8f8f8;
border-radius: 2px;
}

pre code {
padding: 0;
color: #e8eaf6;
background-color: #272822;
}

pre[class*="language-"] {
padding: 1.2em;
margin: .5em 0;
}

code[class*="language-"],
pre[class*="language-"] {
color: #e8eaf6;
white-space: pre-wrap !important;
}

b,
strong {
font-weight: bold;
}

dfn {
font-style: italic;
}

small {
font-size: 85%;
}

cite {
font-style: normal;
}

mark {
background-color: #fcf8e3;
padding: .2em;
}

.card {
border-radius: 10px;
box-shadow: 0 15px 35px rgba(50, 50, 93, .1), 0 5px 15px rgba(0, 0, 0, .07) !important;
}

.card .card-image img {
border-radius: 5px 5px 0 0;
}

.container .row {
margin-bottom: 0;
}

.bg-color {
background-image: linear-gradient(to right, #bf30ac 0%, #0f9d58 100%);
opacity: 0.7;
}

.text-color {
color: #0f9d58 !important;
}

.white-color {
color: #fff;
}

.progress-bar {
height: 4px;
position: fixed;
bottom: 0;
z-index: 300;
background: linear-gradient(to right, #bf30ac 0%, #0f9d58 100%);
opacity: 0.7;
}

.sidenav-overlay {
z-index: 500;
}

.pd-header {
margin-top: -64px;
}

header .side-nav {
width: 240px;
z-index: 999;
box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 7px 10px 0 rgba(0, 0, 0, 0.12);
}

nav {
box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 7px 10px 0 rgba(0, 0, 0, 0.12);
}

header .nav-transparent {
background-color: transparent !important;
background-image: none;
box-shadow: none;
}

header nav .brand-span {
font-size: 1.45rem;
}

header .brand-logo .logo-img {
height: 45px;
vertical-align: middle;
padding-bottom: 6px;
}

header .brand-logo .logo-span {
font-size: 2rem;
}

header .button-collapse i {
font-size: 1.5rem;
}

header .side-nav .mobile-head {
padding: 0 15px;
}

header .side-nav .mobile-head img {
margin-top: 30px;
width: 75px;
height: 75px;
}

header .side-nav .mobile-head .logo-name {
margin-top: -30px;
padding-left: 10px;
font-size: 1.5rem;
}

header .side-nav .mobile-head .logo-desc {
margin-top: -10px;
padding-left: 10px;
padding-bottom: 10px;
font-size: 0.8rem;
line-height: 1.3rem;
color: #e3e3e3;
}

header .side-nav .menu-list li {
padding: 0;
margin-left: -15px;
}

header .side-nav .menu-list a {
height: 50px;
line-height: 50px;
color: #34495e !important;
}

.mobile-menu-list a i {
margin-left: 8px !important;
font-size: 1.16rem;
color: #34495e !important;
}

header .side-nav .fa-fw {
width: 3.3rem;
text-align: left;
}

header .side-nav .social-link {
position: absolute;
bottom: 45px;
padding-left: 15px;
}

.social-link a {
font-size: 1.2rem;
display: inline;
padding: 0 12px;
}

.cover-btns {
position: relative;
top: 10vh;
text-align: center;
}

.cover-btns a {
margin: 10px 15px;
padding: 0 35px;
height: 45px;
line-height: 45px;
font-size: 1rem;
color: #fff;
border: 1px solid #fff;
background-color: transparent;
border-radius: 30px;
box-shadow: none;
}

.cover-btns a:hover {
border: 1px solid #f44336;
background-color: #f44336;
box-shadow: 0 14px 26px -12px rgba(233, 30, 99, 0.42), 0 4px 23px 0 rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(233, 30, 99, 0.2);
}

.cover-btns a i {
font-size: 1.1rem;
padding-right: 5px;
}

.cover-social-link {
position: relative;
top: 18vh;
text-align: center;
}

.cover-social-link a {
padding: 0 15px;
font-size: 1.35rem;
color: #fff;
}

header .go-back {
float: left;
position: relative;
padding-left: 5px;
padding-right: 5px;
z-index: 1;
height: 56px;
}

header .go-back i {
font-size: 1.6rem;
font-weight: 200;
line-height: 56px;
}

/* 背景图效果. */
.bg-cover {
position: relative;
display: flex;
align-items: center;
height: 60vh;
padding: 0;
border: 0;
overflow: hidden;
background-position: center center;
background-size: cover;
transform: translate3d(0px, 0px, 0px);
}

.index-cover {
height: 100vh;
}

.post-cover {
height: 40vh !important;
}

.bg-cover:after {
-webkit-animation: rainbow 60s infinite;
animation: rainbow 60s infinite;
}

.bg-cover:before, .bg-cover:after {
position: absolute;
z-index: 1;
width: 100%;
height: 100%;
display: block;
left: 0;
top: 0;
content: "";
}

.bg-cover .container {
position: relative;
color: #fff;
z-index: 2;
}

.bg-cover .title {
font-size: 4rem;
font-weight: 700;
line-height: 1.85em;
margin-bottom: 20px;
position: relative;
}

.bg-cover .description {
font-size: 1.25rem;
font-weight: 300;
line-height: 1.4em;
color: #eee;
}

.bg-cover .post-title {
font-size: 1.9rem;
}

/* @-webkit-keyframes rainbow {
0%,
100% {
background: rgba(156, 39, 176, 0.75);
background: linear-gradient(45deg, rgba(156, 39, 176, 0.75) 0%, rgba(156, 39, 176, 0.65) 100%);
background: -moz-linear-gradient(135deg, rgba(156, 39, 176, 0.75) 0%, rgba(156, 39, 176, 0.65) 100%);
background: -webkit-linear-gradient(135deg, rgba(156, 39, 176, 0.75) 0%, rgba(156, 39, 176, 0.65) 100%);
}
16% {
background: rgba(132, 13, 121, 0.75);
background: linear-gradient(45deg, rgba(132, 13, 121, 0.75) 0%, rgba(132, 13, 121, 0.65) 100%);
background: -moz-linear-gradient(135deg, rgba(132, 13, 121, 0.75) 0%, rgba(132, 13, 121, 0.65) 100%);
background: -webkit-linear-gradient(135deg, rgba(132, 13, 121, 0.75) 0%, rgba(132, 13, 121, 0.65) 100%);
}
32% {
background: rgba(239, 83, 80, 0.75);
background: linear-gradient(45deg, rgba(239, 83, 80, 0.75) 0%, rgba(239, 83, 80, 0.65) 100%);
background: -moz-linear-gradient(135deg, rgba(239, 83, 80, 0.75) 0%, rgba(239, 83, 80, 0.65) 100%);
background: -webkit-linear-gradient(135deg, rgba(239, 83, 80, 0.75) 0%, rgba(239, 83, 80, 0.65) 100%);
}
48% {
background: rgba(255, 87, 34, 0.75);
background: linear-gradient(45deg, rgba(255, 87, 34, 0.75) 0%, rgba(255, 87, 34, 0.65) 100%);
background: -moz-linear-gradient(135deg, rgba(255, 87, 34, 0.75) 0%, rgba(255, 87, 34, 0.65) 100%);
background: -webkit-linear-gradient(135deg, rgba(255, 87, 34, 0.75) 0%, rgba(255, 87, 34, 0.65) 100%);
}
64% {
background: rgba(255, 160, 0, 0.75);
background: linear-gradient(45deg, rgba(255, 160, 0, 0.75) 0%, rgba(255, 160, 0, 0.65) 100%);
background: -moz-linear-gradient(135deg, rgba(255, 160, 0, 0.75) 0%, rgba(255, 112, 66, 0.65) 100%);
background: -webkit-linear-gradient(135deg, rgba(255, 160, 0, 0.75) 0%, rgba(255, 160, 0, 0.65) 100%);
}
80% {
background: rgba(233, 30, 99, 0.75);
background: linear-gradient(45deg, rgba(233, 30, 99, 0.75) 0%, rgba(233, 30, 99, 0.65) 100%);
background: -moz-linear-gradient(135deg, rgba(233, 30, 99, 0.75) 0%, rgba(233, 30, 99, 0.65) 100%);
background: -webkit-linear-gradient(135deg, rgba(2233, 30, 99, 0.75) 0%, rgba(233, 30, 99, 0.65) 100%);
} */
}

/* @keyframes rainbow {
0%,
100% {
background: rgba(156, 39, 176, 0.75);
background: linear-gradient(45deg, rgba(156, 39, 176, 0.75) 0%, rgba(156, 39, 176, 0.65) 100%);
background: -moz-linear-gradient(135deg, rgba(156, 39, 176, 0.75) 0%, rgba(156, 39, 176, 0.65) 100%);
background: -webkit-linear-gradient(135deg, rgba(156, 39, 176, 0.75) 0%, rgba(156, 39, 176, 0.65) 100%);
}
16% {
background: rgba(132, 13, 121, 0.75);
background: linear-gradient(45deg, rgba(132, 13, 121, 0.75) 0%, rgba(132, 13, 121, 0.65) 100%);
background: -moz-linear-gradient(135deg, rgba(132, 13, 121, 0.75) 0%, rgba(132, 13, 121, 0.65) 100%);
background: -webkit-linear-gradient(135deg, rgba(132, 13, 121, 0.75) 0%, rgba(132, 13, 121, 0.65) 100%);
}
32% {
background: rgba(239, 83, 80, 0.75);
background: linear-gradient(45deg, rgba(239, 83, 80, 0.75) 0%, rgba(239, 83, 80, 0.65) 100%);
background: -moz-linear-gradient(135deg, rgba(239, 83, 80, 0.75) 0%, rgba(239, 83, 80, 0.65) 100%);
background: -webkit-linear-gradient(135deg, rgba(239, 83, 80, 0.75) 0%, rgba(239, 83, 80, 0.65) 100%);
}
48% {
background: rgba(255, 87, 34, 0.75);
background: linear-gradient(45deg, rgba(255, 87, 34, 0.75) 0%, rgba(255, 87, 34, 0.65) 100%);
background: -moz-linear-gradient(135deg, rgba(255, 87, 34, 0.75) 0%, rgba(255, 87, 34, 0.65) 100%);
background: -webkit-linear-gradient(135deg, rgba(255, 87, 34, 0.75) 0%, rgba(255, 87, 34, 0.65) 100%);
}
64% {
background: rgba(255, 160, 0, 0.75);
background: linear-gradient(45deg, rgba(255, 160, 0, 0.75) 0%, rgba(255, 160, 0, 0.65) 100%);
background: -moz-linear-gradient(135deg, rgba(255, 160, 0, 0.75) 0%, rgba(255, 112, 66, 0.65) 100%);
background: -webkit-linear-gradient(135deg, rgba(255, 160, 0, 0.75) 0%, rgba(255, 160, 0, 0.65) 100%);
}
80% {
background: rgba(233, 30, 99, 0.75);
background: linear-gradient(45deg, rgba(233, 30, 99, 0.75) 0%, rgba(233, 30, 99, 0.65) 100%);
background: -moz-linear-gradient(135deg, rgba(233, 30, 99, 0.75) 0%, rgba(233, 30, 99, 0.65) 100%);
background: -webkit-linear-gradient(135deg, rgba(2233, 30, 99, 0.75) 0%, rgba(233, 30, 99, 0.65) 100%);
}
} */

.carousel .indicators {
padding-bottom: 10px !important;
}

.index-card {
margin-top: -50px;
padding-top: 20px;
}

.carousel-post .title {
font-size: 2.6rem;
}

.carousel-post .cover-btns a {
margin-top: -30px;
}

.dream {
margin-top: 20px;
margin-bottom: 40px;
}

.dream .title,
.music-player .title,
.video-player .title {
margin-bottom: 20px;
font-size: 2rem;
font-weight: 700;
}

.dream .text {
opacity: .6;
font-size: 1.1rem;
}

.music-player,
.video-player {
margin-top: 10px;
margin-bottom: 50px;
}

.music,
.dplayer-video {
box-shadow: 0 5px 20px 0 rgba(0,0,0,.2), 0 10px 20px -12px rgba(0,0,0,.5) !important;
}

#recommend-sections {
margin-top: -30px;
padding-top: 30px;
}

.index-card .card .card-content {
padding: 20px 40px;
}

@media only screen and (min-width: 1418px) {
.recommend {
margin-top: 20px;
padding: 0 0.75rem;
}
}

@media only screen and (max-width: 601px) {
.index-card .card .card-content {
padding: 10px 10px;
}
}

/*中等屏幕下(平板类)的样式*/
@media only screen and (min-width: 600px) and (max-width: 992px) {
.index-card .card .card-content {
padding: 20px 20px;
}
}

.recommend .row .col {
padding: 0 1.25rem;
}

.recommend .title {
margin-top: 25px;
margin-bottom: 25px;
text-align: center;
font-size: 1.8rem;
font-weight: 700;
line-height: 1.8rem;
}

.recommend .post-card:before {
position: absolute;
z-index: 0;
width: 100%;
height: 100%;
display: block;
left: 0;
top: 0;
content: "";
background-color: rgba(0, 0, 0, .3);
border-radius: 10px;
}

.recommend .post-card {
position: relative;
width: 100%;
height: 300px;
max-height: 300px;
margin-bottom: 15px;
margin-top: 15px;
text-align: center;
border: 0;
border-radius: 10px;
color: rgba(0, 0, 0, .87);
background: #fff 50%;
background-size: cover;
box-shadow: 0 15px 35px rgba(50, 50, 93, .1), 0 5px 15px rgba(0, 0, 0, .07);
}

.recommend .post-card .post-body {
position: relative;
margin: 0 auto;
padding: 1.8rem 1.25rem;
z-index: 2;
}

.recommend .post-card .post-categories {
margin: 10px auto;
}

.recommend .post-card .post-categories .category {
padding: 0 8px;
color: hsla(0, 0%, 100%, .7) !important;
font-size: .75rem;
font-weight: 500;
}

.recommend .post-card a {
color: #fff;
}

.recommend .post-card .post-title {
height: 48px;
margin-top: 10px;
margin-bottom: 5px;
}

.recommend .post-card .post-description {
margin: 20px auto;
max-width: 500px;
height: 65px;
max-height: 65px;
font-size: 14px;
color: hsla(0, 0%, 100%, .78) !important;
}

.recommend .post-card .read-more {
height: 40px;
margin: .6rem 1px;
font-size: 0.9rem;
font-weight: 400;
line-height: 40px;
color: #fff;
border-radius: 30px;
box-shadow: 0 2px 2px 0 rgba(244, 67, 54, .14), 0 3px 1px -2px rgba(244, 67, 54, .2), 0 1px 5px 0 rgba(244, 67, 54, .12);
}

.recommend .post-card .read-more .icon {
font-size: 1.05rem;
padding-right: 10px;
}

.archive-calendar {
margin-top: -60px;
max-width: 820px;
}

#post-calendar {
width: 100%;
height: 225px;
}

.settings-content {
margin-top: -10px;
}

/*文章列表卡片各样式*/
#articles {
margin-top: 10px;
margin-bottom: 10px;
}

article a {
margin-right: 0 !important;
color: #525f7f;
text-transform: none !important;
}

article a:hover {
font-weight: bold;
color: #42b983;
text-decoration: underline;
}

.articles .row {
margin-left: 0;
margin-right: 0;
}

article .card {
border-radius: 8px;
}

article .card-image {
background-color: #222;
}

article .card-image img {
height: 220px;
border-radius: 0.3rem;
opacity: .7;
}

article .tag-image img {
height: 220px;
}

article .card .card-content {
padding: 15px 15px 12px 18px;
}

article .article-content .summary {
padding-bottom: 2px;
padding-left: 0;
margin-bottom: 6px;
word-break: break-all;
}

article .article-content .publish-author {
float: right;
}

.publish-date .icon-date {
padding-right: 5px;
}

.publish-author .icon-category {
padding-left: 10px;
}

.article-content .publish-author .post-category {
padding-left: 5px;
}

article .card .card-action {
padding: 10px 15px 10px 18px;
border-radius: 0 0 8px 8px !important;
}

article .article-tags .chip {
margin: 2px;
font-size: 0.8rem;
font-weight: 400;
height: 22px;
line-height: 22px;
color: #fff;
border-radius: 10px;
}

.prev-next {
margin-left: -0.75rem;
}

.prev-next .article-badge {
min-width: 3rem;
margin-top: 7px;
padding: 3px 10px 3px 8px;
text-align: center;
font-size: 1rem;
line-height: inherit;
position: absolute;
box-sizing: border-box;
z-index: 200;
background-color: #fff;
font-weight: 500;
}

.prev-next .left-badge {
border-radius: 0 5px 5px 0;
}

.prev-next .right-badge {
border-radius: 5px 0 0 5px;
right: 10px;
}

.paging {
margin-bottom: 15px;
}

.paging .row {
margin-left: 0;
margin-right: 0;
}

.paging .page-info {
font-size: 1.4rem;
color: #888;
padding-top: 1rem;
}

.paging i {
font-size: 2.5rem;
}

.paging .disabled {
background-color: #ccc !important;
}

.paging .disabled i {
color: #999 !important;
}

/*文章详情样式*/
#artDetail {
margin-top: -60px;
}

/* 修改小屏幕下文章详情table样式. */
@media only screen and (max-width: 550px) {
#articleContent table{
table-layout: fixed;
}
}

@media only screen and (min-width: 1418px) {
#artDetail {
margin-top: -60px;
padding: 0 0.75rem;
}
}

#artDetail .card {
box-shadow: 0 10px 35px 2px rgba(0, 0, 0, .15),
0 5px 15px rgba(0, 0, 0, .07),
0 2px 5px -5px rgba(0, 0, 0, .1) !important;
}

#artDetail .tag-cate {
padding-bottom: 15px;
}

#artDetail a {
margin-right: 0 !important;
text-transform: none !important;
}

#artDetail .article-info {
padding: 20px 30px 1px 40px;
margin-bottom: -5px;
}

#artDetail .article-tag {
float: left;
}

#artDetail .article-tag .chip {
font-size: 1rem;
font-weight: 400;
height: 25px;
line-height: 25px;
color: #fff;
border-radius: 15px;
margin-right: 5px;
margin-bottom: 2px;
}

#artDetail .post-cate {
float: right;
color: #42b983;
}

#artDetail .post-cate a {
padding-right: 5px;
color: #42b983;
font-weight: 500;
}

#artDetail .post-cate a:hover {
text-decoration: underline;
}

#artDetail .post-info {
color: #525f7f;
}

#artDetail .post-info .post-category {
padding-right: 4px;
color: #525f7f;
}

#artDetail .post-info .post-category:hover {
font-weight: bold;
color: #42b983;
text-decoration: underline;
}

#artDetail .post-info .post-date {
color: #525f7f;
}

#artDetail .post-info .post-word-count {
margin-left: 15px;
}

#artDetail .post-info .post-read {
margin-left: 15px;
color: #525f7f;
}

#artDetail .article-card-content {
padding: 0 15px 20px 18px;
}

@media only screen and (max-width: 601px) {
#artDetail .article-info {
padding: 15px 15px 1px 15px;
margin-bottom: -5px;
}
}

@media only screen and (min-width: 600px) and (max-width: 992px) {
#artDetail .article-card-content {
padding: 0 30px 20px 32px;
}

#artDetail .article-info {
padding: 15px 20px 0 28px;
margin-bottom: -5px;
}
}

@media only screen and (min-width: 993px) {
#artDetail .article-card-content {
padding: 0 50px 20px 50px;
}
}

#artDetail .reprint {
margin: 15px 0 5px 0;
}

#artDetail .reprint .reprint-tip {
margin: 0 3px 22px 0;
font-size: 1.5rem;
font-weight: 500;
}

#artDetail .reprint a {
font-size: 1.05rem;
color: #42b983;
font-weight: 500;
}

#articleContent p {
margin: 2px 2px 10px;
font-size: 1.05rem;
line-height: 1.85rem;
}

#articleContent blockquote p {
text-indent: 0.2rem;
}

#articleContent a {
padding: 0 2px;
color: #42b983;
font-weight: 500;
text-decoration: underline;
word-wrap:break-word;
}

#articleContent .img-item {
text-align: center;
}

#articleContent img {
max-width: 100%;
height: auto;
cursor: pointer;
}

#articleContent video {
display: block;
margin: 30px auto;
box-shadow: 0 5px 35px 0 rgba(0,0,0,.2), 0 10px 35px -11px rgba(0,0,0,.6);
cursor: pointer;
}

#articleContent ol,
#articleContent ul {
display: block;
padding-left: 2em !important;
word-spacing: 0.05rem;
}

#articleContent ul li,
#articleContent ol li {
display: list-item;
line-height: 1.8rem;
font-size: 1rem;
}

#articleContent ul li {
list-style-type: disc;
}

#articleContent ul ul li {
list-style-type: circle;
}

#articleContent table, th, td {
padding: 12px 13px;
border: 1px solid #dfe2e5;
}

table tr:nth-child(2n), thead {
background-color: #fafafa;
}

#articleContent table th {
background-color: #f2f2f2;
min-width: 80px;
}

#articleContent table td {
min-width: 80px;
}

#articleContent [type="checkbox"]:not(:checked), [type="checkbox"]:checked {
position: inherit;
margin-left: -1.3rem;
margin-right: 0.4rem;
margin-top: -1px;
vertical-align: middle;
left: unset;
visibility: visible;
}

#article-share .social-share {
text-align: center;
margin: 30px 0;
}

@media only screen and (min-width: 600px) {
#article-share .social-share a {
margin-right: 15px !important;
}
}

.chip-container {
margin-top: -60px;
}

.chip-container .tag-title {
margin-bottom: 10px;
color: #3C4858;
font-size: 1.75rem;
font-weight: 400;
}

.chip-container .tag-chips {
margin: 1rem auto 0.5rem;
max-width: 850px;
text-align: center;
}

.chip-container .tags-posts {
margin-top: 20px;
}

.chip-container .chip-default {
color: #34495e;
}

.chip-container .chip-active {
color: #FFF !important;
background: linear-gradient(to bottom right, #FF5E3A 0%, #FF2A68 100%) !important;
box-shadow: 2px 5px 10px #aaa !important;
}

.chip-container .chip {
margin: 10px 10px;
padding: 0 14px;
display: inline-block;
height: 38px;
min-width: 80px;
line-height: 39px;
font-size: 1rem;
font-weight: 500;
border-radius: 5px;
word-wrap: break-word;
cursor: pointer;
box-shadow: 0 3px 5px rgba(0, 0, 0, .12);
}

.chip-container .chip:hover {
color: #fff;
background: linear-gradient(to right, #4cbf30 0%, #0f9d58 100%) !important;
}

.chip .tag-length {
margin-left: 5px;
margin-right: -2px;
font-size: 0.5rem;
}

.chip-default .tag-length {
color: #e91e63;
}

.chip-active .tag-length {
color: #fff;
}

/* archive page. */
#cd-timeline .year {
position: relative;
width: 80px;
height: 80px;
margin: 10px 0 50px -20px;
padding: 21px 10px;
background-color: #ff5722;
color: #fff;
font-size: 1.8rem;
font-weight: 600;
}

#cd-timeline .year a {
color: #fff;
}

#cd-timeline .month {
position: relative;
width: 60px;
height: 60px;
margin: 10px 0 30px -10px;
padding: 14px 16px;
background-color: #ef6c00;
color: #fff;
font-size: 1.7rem;
font-weight: 600;
}

#cd-timeline .month a {
color: #fff;
}

#cd-timeline .day {
position: relative;
padding: 8px 10px;
background-color: #ffa726;
color: #fff;
font-size: 1.2rem;
font-weight: 500;
}

#cd-timeline {
/*width: 90%;*/
max-width: 820px;
position: relative;
margin-top: 2rem;
margin-bottom: 2rem;
}

#cd-timeline::before {
/* this is the vertical line */
content: '';
position: absolute;
top: 0;
left: 18px;
height: 100%;
width: 4px;
background: #0f9d58;
}

@media only screen and (min-width: 900px) {
#cd-timeline {
margin-top: 2rem;
margin-bottom: 2rem;
}

#cd-timeline::before {
left: 50%;
margin-left: -2px;
}

#cd-timeline .year {
margin: 10px 0 50px -40px;
padding: 22px 11px;
}

#cd-timeline .month {
margin: 10px 0 30px -30px;
padding: 14px 16px;
}
}

.cd-timeline-block {
position: relative;
margin: 1em 0;
}

.cd-timeline-block::after {
clear: both;
content: "";
display: table;
}

.cd-timeline-block:first-child {
margin-top: 0;
}

.cd-timeline-block:last-child {
margin-bottom: 0;
}

@media only screen and (min-width: 870px) {
.cd-timeline-block {
margin: 1em 0;
}

.cd-timeline-block:first-child {
margin-top: 0;
}

.cd-timeline-block:last-child {
margin-bottom: 0;
}
}

.cd-timeline-img {
position: absolute;
top: 0;
left: 0;
width: 40px;
height: 40px;
border-radius: 50%;
box-shadow: 0 0 0 4px #ffffff, inset 0 2px 0 rgba(0, 0, 0, 0.08), 0 3px 0 4px rgba(0, 0, 0, 0.05);
}

@media only screen and (min-width: 900px) {
.cd-timeline-img {
width: 40px;
height: 40px;
left: 50%;
margin-left: -20px;
/* Force Hardware Acceleration in WebKit */
-webkit-transform: translateZ(0);
-webkit-backface-visibility: hidden;
}

.cssanimations .cd-timeline-img.is-hidden {
visibility: hidden;
}

.cssanimations .cd-timeline-img.bounce-in {
visibility: visible;
-webkit-animation: cd-bounce-1 0.6s;
-moz-animation: cd-bounce-1 0.6s;
animation: cd-bounce-1 0.6s;
}
}

.cd-timeline-content {
position: relative;
margin-top: -40px;
margin-left: 60px;
padding: 0;
border-radius: 5px;
background: #ffffff;
box-shadow: 0 15px 35px rgba(50, 50, 93, .1), 0 5px 15px rgba(0, 0, 0, .07) !important;
}

.cd-timeline-content::after {
clear: both;
content: "";
display: table;
}

.cd-timeline-content .card {
margin: 0;
}

.cd-timeline-content::before {
content: '';
position: absolute;
top: 18px !important;
right: 100%;
height: 0;
width: 14px;
margin-left: 2px;
margin-right: 2px;
border: 1px dashed #ffa726;
}

@media only screen and (min-width: 768px) {
.cd-timeline-content h2 {
font-size: 1.25rem;
}

.cd-timeline-content p {
font-size: 1rem;
}

.cd-timeline-content .cd-read-more,
.cd-timeline-content .cd-date {
font-size: 0.875rem;
}
}

@media only screen and (min-width: 900px) {
.cd-timeline-content {
margin-left: 0;
padding: 0;
width: 45%;

}

.cd-timeline-content::before {
top: 24px;
left: 100%;
}

.cd-timeline-content .cd-read-more {
float: left;
}

.cd-timeline-block:nth-child(even) .cd-timeline-content {
float: right;
}

.cd-timeline-block:nth-child(even) .cd-timeline-content::before {
top: 24px;
left: auto;
right: 100%;
border-color: #ffa726;
}

.cd-timeline-block:nth-child(even) .cd-timeline-content .cd-read-more {
float: right;
}

.cssanimations .cd-timeline-content.is-hidden {
visibility: hidden;
}

.cssanimations .cd-timeline-content.bounce-in {
visibility: visible;
-webkit-animation: cd-bounce-2 0.6s;
-moz-animation: cd-bounce-2 0.6s;
animation: cd-bounce-2 0.6s;
}
}

.contact-container {
width: 90%;
max-width: 900px;
margin-top: -60px;
}

@media only screen and (max-width: 600px) {
.contact-container {
width: 95%;
}
}

/* about page styles. */

.about-container {
width: 90%;
max-width: 1225px;
margin-top: -60px;
}

@media only screen and (max-width: 601px) {
.about-container {
width: 95%;
}
}

.post-statis {
text-align: center;
}

.post-statis .statis {
display: inline-block;
padding: 0.3rem 0.8rem;
text-align: center;
letter-spacing: .03rem;
}

.post-statis .statis .count {
display: block;
font-size: 1.3rem;
font-weight: bold;
text-decoration: underline;
}

.post-statis .statis .count a {
color: #42b983;
}

.post-statis .statis .name {
font-size: 0.9rem;
color: #777;
}

#aboutme .social-link {
margin: 0.5rem 0;
text-align: center;
}

#aboutme .social-link a {
display: inline-block;
width: 2.3rem;
height: 2.3rem;
line-height: 2.2rem;
margin: 0 0.5rem;
padding: 0;
color: #fff;
border: 1px solid #0f9d58;
background: radial-gradient(#4cbf30, #0f9d58);;
font-size: 0.9rem;
border-radius: 50%;
box-shadow: 0 4px 6px rgba(50, 50, 93, .21), 0 2px 3px rgba(0, 0, 0, .1);
}

.profile .avatar-img {
max-width: 160px;
width: 100%;
margin: 0 auto;
transform: translate3d(0, -65%, 0);
}

.profile .author {
margin-top: -80px;
}

.profile .author .post-statis {
margin: 0.5rem 0 1.4rem 0;
}

.profile .author .title {
margin-bottom: 0.1rem;
font-size: 1.8rem;
font-weight: 500;
color: #3C4858;
}

.profile .author .career {
margin: 8px 0;
font-size: 0.9rem;
font-weight: 400;
color: #777;
}

#aboutme .profile .social-link {
margin: 1.5rem 0 0.8rem 0;
}

#aboutme .introduction {
margin: 1.5rem auto 3rem;
max-width: 600px;
color: #999;
}

.post-charts,
.my-projects,
.my-skills,
.post-charts {
padding: 3.8rem 1.5rem 0.8rem 1.5rem;
}

.post-charts, .title,
.my-projects .title,
.my-skills .title,
.my-gallery .title {
font-size: 2rem;
margin-bottom: 2.25rem;
}

.my-projects .info {
max-width: 360px;
margin: 0 auto;
padding: 1rem 0 1rem;
}

.my-projects .info .icon {
display: inline-block;
width: 76px;
height: 76px;
text-align: center;
line-height: 76px;
color: #fff;
font-size: 1.75rem;
border-radius: 50%;
}

.my-projects .info .info-title {
margin: 1.25rem 0 0.875rem;
font-size: 1.25rem;
font-weight: 500;
line-height: 1.5em;
}

.my-projects .info .info-title a {
color: #34495e;
}

.my-projects .info .info-desc {
margin: 0 0 10px;
font-size: 0.9rem;
color: #999;
}

.my-skills .skillbar {
position: relative;
display: block;
max-width: 360px;
margin: 15px auto;
background: #eee;
height: 30px;
border-radius: 35px;
-moz-border-radius: 35px;
-webkit-border-radius: 35px;
-webkit-transition: 0.4s linear;
-moz-transition: 0.4s linear;
-o-transition: 0.4s linear;
transition: 0.4s linear;
-webkit-transition-property: width, background-color;
-moz-transition-property: width, background-color;
-o-transition-property: width, background-color;
transition-property: width, background-color;
}

.skillbar .skillbar-title {
position: absolute;
top: 0;
left: 0;
width: 110px;
font-size: 0.9rem;
color: #ffffff;
border-radius: 35px;
-webkit-border-radius: 35px;
-moz-border-radius: 35px;
}

.skillbar .skillbar-title span {
display: block;
background: rgba(0, 0, 0, 0.15);
padding: 0 20px;
height: 30px;
line-height: 30px;
border-radius: 35px;
-webkit-border-radius: 35px;
-moz-border-radius: 35px;
}

.skillbar .skillbar-bar {
height: 30px;
width: 0;
border-radius: 35px;
-moz-border-radius: 35px;
-webkit-border-radius: 35px;
}

.skillbar .skill-bar-percent {
position: absolute;
right: 10px;
top: 0;
font-size: 12px;
height: 30px;
line-height: 30px;
color: #ffffff;
color: rgba(0, 0, 0, 0.5);
}

.my-skills .other-skills {
margin-top: 2rem;
}

.other-skills .sub-title {
font-size: 1.5rem;
}

.other-skills .tag-chips {
max-width: 600px;
}

.other-skills .chip {
background-color: #fff;
border: 1px solid #eee;
}

.other-skills .chip:hover {
color: #fff;
background: linear-gradient(to right, #4cbf30 0%, #0f9d58 100%);;
border: 1px solid #4cbf30;
box-shadow: 0 5px 5px rgba(0, 0, 0, .25)
}

.my-gallery {
margin: 4.5rem auto 1rem;
padding: 0 1.2rem;
max-width: 1100px;
}

.my-gallery .photo {
margin: .5rem 0;
}

.my-gallery .photo img {
width: 100%;
height: 200px;
border-radius: 10px;
cursor: pointer;
}

/*尾部样式*/
footer {
padding-bottom: 1px;
}

footer .social-statis {
margin-top: 10px;
position: relative;
}

footer a {
color: #fff;
}

footer .copy-right {
color: #dbdbdb;
}

/*搜索层样式*/
#searchIcon {
font-size: 1.2rem;
}

#searchModal {
min-height: 500px;
width: 80%;
}

#searchModal .search-header .title {
font-size: 1.6rem;
color: #333;
}

#searchResult {
margin: -15px 0 10px 10px;
}

#searchResult .search-result-list {
margin-left: -8px;
padding-left: 0;
color: #666;
}

.search-result-list .search-result-title {
font-size: 1.4rem;
color: #42b983;
}

.search-result-list li {
border-bottom: 1px solid #e5e5e5;
padding: 15px 0 5px 0;
}

.search-result-list .search-keyword {
margin: 0 2px;
padding: 1px 5px 1px 4px;
border-radius: 2px;
background-color: #f2f2f2;
color: #e96900;
font-size: .9rem;
white-space: pre-wrap;
}

/*回到顶部按钮样式*/
.top-scroll {
display: none;
position: fixed;
right: 20px;
bottom: 15px;
padding-top: 15px;
margin-bottom: 0;
z-index: 998;
}

.top-scroll .btn-floating {
background: linear-gradient(to bottom right, #FF5E3A 0%, #FF2A68 100%);
width: 48px;
height: 48px;
}

.top-scroll .btn-floating i {
line-height: 48px;
font-size: 1.8rem;
}

@media screen and (min-width: 368px) and (max-width: 767px) {
.info-break-policy {
word-break: keep-all;
float: left;
width: 50%;
}
}

@media screen and (min-width: 768px) {
.info-break-policy {
word-break: keep-all;
float: left;
margin-right: 15px;
}
}

@media screen and (max-width: 367px) {
.info-break-policy {
word-break: keep-all;
float: left;
width: 100%;
}

.custom-card {
padding: 0 2px !important;
}
}

.info-break-policy {
margin-bottom: 8px;
}

.clearfix {
clear: left;
}

.img-shadow {
box-shadow: 0 5px 25px 0 rgba(0,0,0,.2), 0 10px 30px -11px rgba(0,0,0,.6)
}

.img-margin {
margin: 25px auto 10px auto;
}

.caption {
text-align: center;
margin: 0 auto 15px auto;
}

.center-caption {
color: #525f7f;
padding: 5px;
border-bottom: 1px solid #d9d9d9;
}

.lg-sub-html .center-caption {
color: #fff !important;
border-bottom: none;
}

.overflow-policy {
overflow: hidden;
}

/* styles for '...' */
.block-with-text {
/* hide text if it more than N lines  */
overflow: hidden;
/* for set '...' in absolute position */
position: relative;
/* use this value to count block height */
line-height: 1.5em;
/* max-height = line-height (1.2) * lines max number (3) */
max-height: 4.5em;
/* fix problem when last visible word doesn't adjoin right side  */
text-align: justify;
/* place for '...' */
margin-right: -1em;
padding-right: 1em;
}

/* create the ... style */
.block-with-text:before {
/* points in the end */
content: '...';
/* absolute position */
position: absolute;
/* set position to right bottom corner of block */
right: 0;
bottom: 0;
}

/* hide ... if we have text, which is less than or equal to max lines */
.block-with-text:after {
/* points in the end */
content: '';
/* absolute position */
position: absolute;
/* set position to right bottom corner of text */
right: 0;
/* set width and height */
width: 1em;
height: 1em;
margin-top: 0.2em;
/* bg color = bg color under block */
background: white;
}


<html>
<body>

<form action="welcome.php" method="post">
    请输入添加的url: <input type="text" name="url"><br>
    请输入标签: <input type="text" name="label"><br>
    请输入注释：<input type="text" name="note"><br>
    <input type="submit" value="添加收藏">
</form>

<!--url is --><?php //echo $_POST["url"]; ?><!--<br>-->
<!--label is: --><?php //echo $_POST["label"]; ?><!-- <br>-->
<!--note is: --><?php //echo $_POST["note"]; ?><!-- <br>-->
<br>

<form action="welcome.php" method="post">
    请输入删除的url: <input type="text" name="url_del"><br>
    <input type="submit" value="删除收藏">
</form>

<br>

<form action="welcome.php" method="post">
    请输入查找的标签: <input type="text" name="label_search"><br>
    <input type="submit" value="查找标签">
</form>

<br>
<form action="welcome.php" method="post">
    请输入要修改的url: <input type="text" name="url_fix"><br>
    请输入新的标签：<input type="text" name="label_fix"><br>
    请输入新的注释：<input type="text" name="note_fix"><br>
    <input type="submit" value="修改收藏">
</form>


<!-- 定义url的数据结构 -->
<?php
class Site {
    /* 成员变量 */
    var $url;
    var $label;
    var $note;
    /* 成员函数 */
}

?>
<!--搜索标签-->
<?php
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" );
header("Cache-Control: no-cache, must-revalidate" );
//Get the data from the url
$label_value = $_POST['label_search'];

if($label_value == null){}
else {

    // read json file
    $data = file_get_contents('example.json');
    // decode json
    $json_arr = json_decode($data, true);

    $arrlength = count($json_arr);

    for ($i = 0; $i < $arrlength; $i++) {
        if ($json_arr[$i]['label'] == $label_value) {
            $url_value = $json_arr[$i]['url'];
            $url_label = $json_arr[$i]['label'];
            $url_note = $json_arr[$i]['note'];
            $extra_url="http://";
            echo "url=" . "<a href='$extra_url$url_value' target=\"_blank\" > $url_value</a> "   . ", label=" . $url_label . ", note=" . $url_note;
            echo "<br>";
        }
    }

    // encode json and save to file
    file_put_contents('example.json', json_encode($json_arr));
    exit(0);
    header("location:welcome.php");
}

?>
<!--打印收藏-->
<?php
// read json file
$data = file_get_contents('example.json');
// decode json
$json_arr = json_decode($data, true);


$arrlength=count($json_arr);
for ($i=0; $i<$arrlength; $i++) {
    $url_value = $json_arr[$i]['url'];
    $url_label = $json_arr[$i]['label'];
    $url_note = $json_arr[$i]['note'];
    $extra_url="http://";
    echo "url=" . "<a href='$extra_url$url_value' target=\"_blank\" > $url_value</a> "   . ", label=" . $url_label . ", note=" . $url_note;
    echo "<br>";
}

// encode json and save to file
file_put_contents('example.json', json_encode($json_arr));
?>

<!-- 增加收藏-->
<?php
//Get the data from the url
$url_value = $_POST['url'];
$label_value = $_POST['label'];
$note_value = $_POST['note'];

// read json file
$data = file_get_contents('example.json');
// decode json
$json_arr = json_decode($data, true);
//if the input is null or same as the last, exit(0)
$arrlength=count($json_arr);
// encode json and save to file
file_put_contents('example.json', json_encode($json_arr));

if($url_value == null || $url_value == $json_arr[$arrlength-1]['url']){}
else {

    $x = new Site;

    $x->url = $url_value;
    $x->label = $label_value;
    $x->note = $note_value;

    // read json file
    $data = file_get_contents('example.json');
    // decode json
    $json_arr = json_decode($data, true);
    // add data
    $json_arr[] = $x;
    // encode json and save to file
    file_put_contents('example.json', json_encode($json_arr));
    header("location:welcome.php");
}
?>


<!-- 删除收藏-->
<?php
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" );
header("Cache-Control: no-cache, must-revalidate" );

//Get the data from the url
$url_value = $_POST['url_del'];
if($url_value == null) {}
else {
    // read json file
    $data = file_get_contents('example.json');
    // decode json
    $json_arr = json_decode($data, true);

    $arrlength = count($json_arr);


    for ($i = 0; $i < $arrlength; $i++) {
        if ($json_arr[$i]['url'] == $url_value) {
            array_splice($json_arr,$i,1);
//            unset($json_arr[$i]['url']);
//            unset($json_arr[$i]['label']);
//            unset($json_arr[$i]['note']);
        }
    }
    // encode json and save to file
    file_put_contents('example.json', json_encode($json_arr));
    header("location:welcome.php");
}

?>


<!--修改收藏-->
<?php
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" );
header("Cache-Control: no-cache, must-revalidate" );

//Get the data from the url
$url_value2 = $_POST['url_fix'];
$label_value2 = $_POST['label_fix'];
$note_value2 = $_POST['note_fix'];

if($url_value2 == null){}
else {
    // read json file
    $data = file_get_contents('example.json');
    // decode json
    $json_arr = json_decode($data, true);

    $arrlength = count($json_arr);

    for ($i = 0; $i < $arrlength; $i++) {
        if ($json_arr[$i]['url'] == $url_value2) {
            $json_arr[$i]['label'] = $label_value2;
            $json_arr[$i]['note'] = $note_value2;
        }

    }

    // encode json and save to file
    file_put_contents('example.json', json_encode($json_arr));
    header("location:welcome.php");
}
?>



</body>
</html>