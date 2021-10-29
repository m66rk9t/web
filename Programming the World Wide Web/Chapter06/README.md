## 《Web程序设计（第8版）》第6章练习题

### 知识点复习题

#### 01 描述动态HTML文档的含义。

#### 02 如果已经知道某个HTML元素的id，那么应该如何使用JavaScript获得该元素的DOM地址？

#### 03 如果有一个变量，其值为某个HTML元素的id，呢么应该如何利用JavaScript获得该元素的DOM地址？

#### 04 还可以通过什么方法获取单选按钮和复选框的DOM地址？

#### 05 什么是CSS-P？

#### 06 描述属性position三个可能的取值之间的区别。

#### 07 属性visibility的标准值是什么？

#### 08 用于控制文档前景色和背景色的属性是什么？

#### 09 当鼠标光标移动到元素上和离开元素时，可以使用哪些事件来修改元素的字体？

#### 10 表示表单元素内容的属性是什么？

#### 11 与z-index属性相关联的JavaScript变量是什么？

#### 12 为将某个元素移动到显示的顶层，应该将z-index属性值设置为较大的值还是较小的值？

#### 13 单击鼠标后，属性clientX和clientY的含义是什么？

#### 14 单击鼠标后，属性screenX和screenY的含义是什么？

#### 15 描述setTimeout函数的参数和动作。

### 编程练习题

#### 01 该文档必须包括一个至少有10行文本的段落，文本内容为自我介绍。该段落必须在页面中居中，其空间大小为每行只有10个字符。此外，将自己的一张浅灰色的照片作为嵌套元素重叠放到这组文本的中间。

#### 02 修改01的文档，添加4个按钮，这些按钮的标签分别为Northwest、Northeast、Southwest以及Southeast。当按下这些按钮后，图片必须移动到文本中由按钮标签指定的位置。开始时，图片必须位于文本的西北角（左上角）。

#### 03 修改02的文档，使得按钮能够随时显示或者隐藏图片的对应副本，以使得文档在任意时刻可以包含0个、1个、2个、3个或者4个图片的副本。初始状态下，文档中不应该显示图片。

#### 04 该文档必须包含一个文本段落，内容为描述自己的家。至少选择其中的3个短语（每个短语3~6个单词），当鼠标位于它们的上面时修改字体、字体样式、字体颜色以及字体大小。其中每个短语的字体、字体样式、字体颜色以及字体大小都不相同。

#### 05 该文档必须显示一张图片和三个按钮。按钮的标签分别为1、2和3。当分别按下这些按钮时，应该显示不同的图片内容。

#### 06 该文档必须包含4个较短的互相堆叠的文本段落，而且这些段落区域都应该有一部分没有被完全覆盖，以保证鼠标光标可以放到它们上面。当鼠标光标位于任意段落的外露部分时，该段落应该移动到顶层并完全可见。

#### 07 修改06的文档，使得某个段落从顶层向下移动时，应该回到原来的位置而不是底层。

#### 08 该文档必须包含一副自己的小照片，当单击时，无论鼠标位于文档窗口中的什么位置，这副照片都必须显示在光标所在位置。

#### 09 该文档必须包含语句Save time with TIMESAVER 2.2，它能够在显示窗口的顶端来回移动。

#### 10 修改09的文档，使得这组语句每移动五步（假定每次移动长度为1像素）后，文本颜色就变为红色，再次移动五步后，文本颜色又变为蓝色，并持续这种方式。

#### 11 修改以下示例，输入要移动元素的起始位置和终止位置。

```HTML
<!DOCTYPE html>
<html lang="zh">

<head>
    <title> Moving text </title>
    <meta charset="utf-8" />
    <script type="text/javascript" src="moveText.js">
    </script>
</head>

<body onload="initText()">
    <p>
        <span id='theText' style="position: absolute; left: 100px; top: 100px; 
    font: bold 1.7em 'Times Roman'; 
    color: blue;"> Jump in the lake!
        </span>
    </p>
</body>

</html>
```

```JavaScript
var dom, x, y, finalx = 300, finaly = 300;
function initText() {
    dom = document.getElementById('theText').style;
    var x = dom.left;
    var y = dom.top;
    x = parseInt(x);
    y = parseInt(y);
    moveText(x, y);
}

function moveText(x, y) {
    if (x != finalx)
        if (x > finalx) x--;
        else if (x < finalx) x++;
    if (y != finaly)
        if (y > finaly) y--;
        else if (y < finaly) y++;
    if ((x != finalx) || (y != finaly)) {
        dom.left = x + "px";
        dom.top = y + "px";
        setTimeout("moveText(" + x + "," + y + ")", 1);
    }
}
```