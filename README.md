# Laravel 10 通過 Ajax 選項處理 DataTables jQuery 套件的伺服器端工作

引入 yajra 的 laravel-datatables-oracle 套件來擴增實作當用戶點擊分頁、排序時，DataTables 會自動向伺服器端發出 Ajax，並自帶一些參數。

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
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/` 來顯示 DataTables jQuery 套件資訊。

----

## 畫面截圖
![](https://i.imgur.com/DTzG4wx.png)
> 用表格顯示全部資料

![](https://i.imgur.com/HvOa02y.png)
> 用表格顯示分頁的資料

![](https://i.imgur.com/42pYhtf.png)
> 用表格顯示分頁的資料，區分奇數列、偶數列使用不同背景顏色