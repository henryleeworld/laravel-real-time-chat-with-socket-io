# Laravel 7 使用 Socket.IO 開發即時聊天室

Socket.IO 是一個用於建立即時聊天網頁應用程式的跨平台 JavaScript 函式庫，可以消除不同平台上傳輸方式的差異性，讓開發者更容易發展即時性的網頁應用程式。在傳輸的方式上，Socket.IO 使用 WebSocket 作為主要的傳輸協定，而在某些瀏覽器不支援 WebSocket 的狀況下，則會自動改用其他的方式來傳輸。即時聊天室不須再花時間等待網頁刷新，即可馬上獲取網頁聊天室中的訊息，達到即時聊天的效果。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行安裝 Laravel Mix 引用的依賴項目，並執行所有 Mix 任務。
```sh
$ npm install && npm run dev
```
- 執行接收來自於瀏覽器的 WebSocket 連線。
```sh
$ npm run socket-io-server
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/chat` 來進行即時訊息發送。

----

## 畫面截圖
![](https://i.imgur.com/RTIv2Om.png)
> 透過在伺服器與客戶端裝置之間建立持續的連線，可以即時的傳送資料給對方