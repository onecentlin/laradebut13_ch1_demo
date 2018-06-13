# LaraDebut #13 - PHPUnit 入門簡介

講者：[Winnie Lin](https://github.com/onecentlin)

單元測試的藝術 第二版 (The Art of Unit Testing: with examples in C# 2nd Edition)

## Chapter 1 : 單元測試基礎

C# 範例程式碼以 PHP 改寫

採用 PHP 版本 >= 7.0

### 1.5 一個簡單的單元測試範例 (p.13-17)

- 1.1 : SimpleParser.php
- 1.2 : SimpleParserTests.php
- 1.3 : index.php (Console App)
- 1.4 : 通用實作
  - TestUtil.php
  - SimpleParserTestsWithTestUtil.php
  - index2.php (Console App)

## 範例執行

更新 composer autoload

```bash
composer dump
```

執行測試

```bash
php index.php
```