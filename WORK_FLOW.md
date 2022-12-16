## 本项目标准工作流程和注意事项

1. 立项后，创建新版本分支，分支命名格式：feature_opps-sdk-php-vX.X.X

2. 更新 init.php 中本次项目的版本号 "SDK_VERSION"

3. 进行代码开发
   - Demo 中使用到的新创建的类需要在 init.php 注册
   - 面向客户的 Demo 示例代码必须保证注释量及说明的准确性

4. 更新 README.md 中说明
   - 头部 "版本记录" 说明中，准确体现本次 sdk 版本更新的主要内容
   - 更新的内容体现到文档相关章节（本文档直接对外，请仔细检查，保证内容准确无误）

5. 运行 package.php 打包，产物直接在根目录下 php_sdk_vX.X.X_yyyymmdd （Mac系统下直接会生成 zip 压缩包，windows系统下需要自行手动压缩）

