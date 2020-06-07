<template>
  <header>
    <div class="flex between">
      <h1 class="header-logo">Logo</h1>
      <nav class="header-nav">
        <ul>
          <li><a href="#">Menu</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Acsece</a></li>
        </ul>
      </nav>
    </div>
  </header>
</template>

<style scoped>
.header {
  height: 100px;
  background: #ffffff;
}
.page-header {
  display: flex;
  justify-content: space-between;
}
.header-logo {
  font-size: 30px;
  font-weight: bold;
  margin-left: 35px;
  color: #000000;
  line-height: 100px;
}
.header-nav li {
  display: inline-block;
  margin-right: 60px;
  font-size: 16px;
}
.header-nav a {
  color: #000000;
}
@media screen and (max-width: 768px) {
  .header-nav {
    display: none;
  }

  #hamburger {
    width: 40px;
    height: 40px;
    position: absolute;
    cursor: pointer;
    z-index: 100;
    top: 15px;
    right: 20px;
    transition: 0.4s;
  }
  #hamburger span {
    position: absolute;
    left: 2px;
    display: block;
    width: 35px;
    height: 2px;
    background-color: #000;
    transition: 0.３s;
  }

  #hamburger span:nth-of-type(1) {
    top: 10px;
  }
  #hamburger span:nth-of-type(2) {
    top: 20px;
  }
  #hamburger span:nth-of-type(3) {
    top: 30px;
  }

  .menu-content {
    display: block;
  }
  .menu-content.menu-title {
    margin: 40px 20px;
    font-size: 24px;
    color: #333333;
    text-align: left;
    font-weight: bold;
  }
}
</style>