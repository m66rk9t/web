## 《Web程序设计（第8版）》第6章练习题

### 知识点复习题

#### 01 描述动态HTML文档的含义。（P207）

```
动态HTML文档，即可在文档已显示并仍在显示时通过用户交互或浏览器事件，对其标签特性、标签内容或者元素样式属性进行修改。
```

#### 02 如果已经知道某个HTML元素的id，那么应该如何使用JavaScript获得该元素的DOM地址？（P173）

```
可以使用docuemnt属性的getElementByID方法来获得该元素的DOM地址。
```

#### 03 如果有一个变量，其值为某个HTML元素的id，呢么应该如何利用JavaScript获得该元素的DOM地址？（P173）

```
例如：document.getElementByID(variableName);
```

#### 04 还可以通过什么方法获取单选按钮和复选框的DOM地址？（P172）

```
1.使用Document对象的form数组和elements数组获取DOM地址。
2.使用控件的name特性获取其DOM地址。
```

#### 05 什么是CSS-P？（P208）

```
CSS-P即层叠样式表定位（Cascading Style Sheets-Positioning）。CSS-P不仅能够用于将任意元素定位文档显示窗口的任意位置，能够动态地将某个元素移动到显示窗口的某个新位置，还能够利用JavaScript修改元素的定位样式属性。
```

#### 06 描述属性position三个可能的取值之间的区别。（P208、P211、P212）

```
1.absolute属性值其含义为元素在文档显示窗口中的位置与其他元素的位置无关。将position属性设为absolute后，该元素的位置是可以移动的，元素移动时是将元素移动到top和left属性值的位置上。
2.relative属性值其含义为元素在文档显示窗口中的位置是相对于其他元素的位置来说的。将position属性设为relative后，该元素是可以移动的。但是未设置top和left的属性值与未设置position的属性值效果是一样的，而设置top和left的属性值后，元素根据上一次的位置移动top和left属性值的量。
3.static属性值与设置position为relative但未设置top和left的效果是一样的，但是区别在于，静态定位在定义时不能设定top和left属性，且以后也不能修改它们。因此不能将静态定位的元素从正常位置移开。
```

#### 07 属性visibility的标准值是什么？（P215）

```
visibility的标准值为visible，即可见。
```

#### 08 用于控制文档前景色和背景色的属性是什么？（P216）

```
color控制前景色，background-color控制背景色。
```

#### 09 当鼠标光标移动到元素上和离开元素时，可以使用哪些事件来修改元素的字体？（P218）

```
1.当鼠标光标移动到元素上时，可以使用onmouseover修改元素字体。
2.当鼠标光标离开元素时，可以使用onmouseout修改元素字体。
```

#### 10 表示表单元素内容的属性是什么？（P219）

```
表示表单元素内容的属性是value。
```

#### 11 与z-index属性相关联的JavaScript变量是什么？（P222）

```
与z-index属性相关联的JavaScript样式属性是zIndex。
```

#### 12 为将某个元素移动到显示的顶层，应该将z-index属性值设置为较大的值还是较小的值？（P222）

```
为将某个元素移动到显示的顶层，应该将z-index属性值设置为较大的值。因为z-index属性值较大的元素将显示在其他元素上方。z-index属性值较小的元素将被隐藏。
```

#### 13 单击鼠标后，属性clientX和clientY的含义是什么？（P224）

```
clientX和clientY以像素为单位定义了创建事件对象的元素相对于浏览器窗口左上角的几何坐标。
```

#### 14 单击鼠标后，属性screenX和screenY的含义是什么？（P225）

```
screenX和screenY以像素为单位定义了创建事件对象的元素相对于计算机屏幕左上角的几何坐标。
```

#### 15 描述setTimeout函数的参数和动作。（P228）

```
方法setTimeout有两个参数，分别为需要执行的JavaScript代码字符串和一个单位为毫秒的数值，它表示在执行第一个参数给定的代码之前要延迟的事件。
```

### 编程练习题

#### 01 该文档必须包括一个至少有10行文本的段落，文本内容为自我介绍。该段落必须在页面中居中，其空间大小为每行只有20个字符。此外，将自己的一张浅灰色的照片作为嵌套元素重叠放到这组文本的中间。

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
/*moveText.js*/
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