# OGP-checker
## なぜ作ったか
ウェブページに設定したOGP情報を確認するため。
## 何ができるか
ウェブページのog:description, og:imageを確認できる。複数のURLを一度に確認したい場合は、テキストファイルを利用すればOK。
またBasic認証が掛かっているウェブページであっても問題ない。
## どのように使うか
以下の手順で使う
1. PHPが動くサーバーにOGP-checkerをgit cloneする。
1. ブラウザからhttp://localhost/ogp-checker/index.html にアクセスする。
1. 確認したいURLを入力し、[URL送信]を押す。複数のURLを確認したい場合は、URLをまとめたテキストファイルを選択し、[送信]を押す。なお、Basic認証が掛かっているウェブページを確認したい場合はhttp://Basic認証のID:Basic認証のパスワード@www.example.com というように書けば大丈夫。
1. 検証したURL、og:description、og:imageが表示される。
## 今後の改善点
- もっとわかりやすい見た目にする
- 例外処理を実装する

 こうした方が良いよ、みたいなことがあればお気軽に教えていただければ幸いですm(_ _)m
