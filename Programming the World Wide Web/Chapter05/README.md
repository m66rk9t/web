# 《Web程序设计（第8版）》第5章练习题

## 知识点复习题

### 01 JavaScript中全局变量是什么对象的属性？（P168）

因为JavaScript变量都是某种对象的属性，而对于隐式或显式出现在窗口的HTML文档中的所有JavaScript脚本来说，Window对象的属性都是可见的，它包含了所有全局变量。因此JavaScript全局变量是Window对象的属性。

### 02 在JavaScript对DOM的绑定中，如何表示HTML元素和特性？（P169）

在JavaScript对DOM的绑定中，JavaScript对象就是HTML元素，其中包含数据和操作，数据称为属性，操作称为方法。在绝大部分情况下，JavaScript对象中的属性名就是HTML元素的特性名。例如：`<input type = "text" name = "address">`元素可以表示为一个包含两个属性的对象，两个属性分别为type与name，相应的属性值分别为text与address。

### 03 什么是事件？（P174）

广义上讲，事件是某些特殊情况发生时的通知。严格上说，事件是一个由浏览器和JavaScript系统为了响应某些正在发生的情况而隐式创建的对象。

### 04 什么是事件处理程序？（P174）

事件处理程序是一个脚本，它是隐式执行的，以响应发生的相应事件。它能够使一个Web文档响应浏览器和用户的活动。

### 05 DOM0事件模型的起源是什么？（P168）

DOM（Documen Object Model，文档对象模型）是由W3C从20世纪90年代中期开发的。标准DOM最初的设计动机是提供一种规范，使Java程序和处理HTML文档的JavaScript脚本能够运行在各种不同的浏览器上。但是W3C从未发布过DOM0规范，DOM0经常被用来描述早期那些支持JavaScript的浏览器使用的文档模型。DOM0模型是Netspace3.0和IE3.0这两种浏览器中实现的文档模型版本，在后来的HTML4规范中定义了DOM0模型的一部分。

### 06 在DOM0事件模型中，可以利用哪两种方式将事件处理程序关联到某个HTML元素的事件？（P177）

+ 将处理程序代码或函数调用作为字符串字面量赋予元素的事件关联特性。
+ 将处理程序函数名称赋予事件关联属性。

### 07 为什么不应该在事件处理程序中使用document.write？（P175）

文档是随着浏览器对HTML代码的解析而显示的。通常情况下，事件是在整个文档显示之后才发生的。如果write方法出现在一个事件处理程序中，由此产生的内容可能将出现在已显示文档顶部。

### 08 HTML元素可以以什么样的方式获得焦点?（P176）

+ 将鼠标光标放在某个HTML元素上并单击鼠标左键时，该元素获得焦点。
+ 用户使用Tab键跳转到某个元素是，该元素获得焦点。

### 09 描述利用forms数组和elements数组对HTML元素进行定位的方法。（P168、P172）

每个Document对象都有一个forms数组，数组中的每个元素用于描述文档中的表单，每个元素都有一个elements属性数组，包含了描述HTML表单元素的对象。例如：

```HTML
<body>
    <form name = "myForm">
        <input type = "button" name = "myButton">
    </form>
</body>
```

采用forms和elements数组定位button按钮的DOM地址：`var dom = document.forms[0].elements[0];`

### 10 描述利用name特性对HTML元素进行定位的方法。（P172）

使用name定位方法，需要定位的元素及包含它的元素（一直到主体元素，但不包括主体元素）都必须包含name特性。例如：

```HTML
<body>
    <form name = "myForm">
        <input type = "button" name = "myButton">
    </form>
</body>
```

采用name定位方法定位button按钮的DOM地址：`var dom = document.myForm.myButton;`

### 11 描述利用方法getElementByID对HTML元素进行定位的方法。（P173）

getElementByID方法的参数是元素的id特性值，即一个字符串字面量（也可以是表达式，求值结果是字符串即可），返回值是元素的DOM地址。因为不管元素处于多深的嵌套层中，其id特性值在文档中都是独一无二的，因此使用该方法可以对HTML元素进行定位。例如：

```HTML
<body>
    <form name = "myForm" id = "myForm">
        <input type = "button" name = "myButton" id = "myButton">
    </form>
</body>
```

采用getElementByID方法定位button按钮的DOM地址：`var dom = document.getElementByID("myButton");`

### 12 将事件处理程序赋予事件属性这种方式的缺点是什么？（P183）

无法为事件处理程序指定参数。

### 13 将事件处理程序赋予事件属性这种方式的优点是什么？（P183）

+ 将HTML代码与JavaScript代码分离，对HTML文档进行模块化处理，使设计工作更加清晰且易于维护代码。
+ 允许在使用过程中修改函数，可以在其他某个事件发生时，为该事件注册一个不同的事件处理程序。

### 14 为什么说在表单数据发送到服务器之前，利用JavaScript检查表单输入的有效性是比较合理的？（P185）

+ 能够将数据验证的任务从繁忙的服务器转移到客户端，分担服务器的负荷。
+ 减少网络流量，避免向服务器发送错误数据并在未经处理的情况下返回。
+ 在客户端检测不正确的表单数据可以更快地对用户做出响应。

### 15 当发现某个表单输入元素中的数据格式不正确时，应该执行哪三种操作？

+ 事件处理程序调用alert方法将错误信息显示给用于并指定应该输入的正确格式。
+ 将光标定位到数据格式不正确的元素，使其获得焦点（可通过focus完成）。
+ 事件程序检测到表单中的数据错误时，就返回false，否则返回true。

### 16 如果onsubmit事件的事件处理程序返回false，其含义是什么？（P186）

检测到表单中有不合法数据，通知浏览器不要执行该事件的任何默认操作，不要将错误的数据发送给服务器。

### 17 什么事件可以触发一个事件处理程序来检查表单中文本输入的有效性？（P188）

当文本内容发生改变时，即引发一个change事件时，可以调用一个针对该事件的处理程序来检查表单中文本输入的有效性。

### 18 在DOM0事件模型中会发生什么样的事件传播？（P192）

当浏览器检测到某个事件发生后，将为事件处理成去检查与导致事件发生的元素关联的对象。如果这个对象已经针对该事件注册了一个事件处理程序，就执行这个处理程序。

### 19 解释DOM2事件模型中事件处理的三个阶段。（P192）

+ 捕获阶段：事件从文档的根节点开始，沿着文档树向下传递，直到目标节点（在本阶段前已在该节点上创建了一个事件对象）。如果在这个传播过程中，遇到某个节点（包括文档节点但不包括目标节点）为该事件注册了事件处理程序，那么这些事件处理程序将检验确定它们是否处于启用（启用true，未启用false）状态。在该阶段，任一针对事件注册的被启用的处理程序都会被执行。
+ 目标节点阶段：在该阶段，执行目标节点中为该事件注册的处理程序，无论它是否处于启用状态。
+ 冒泡阶段：目标节点注册的处理程序执行结束后进入该阶段，在该阶段，事件会沿着文档树向上返回到文档根节点。在这一过程中，将执行任一节点中为该事件注册的事件处理程序，无论它是否处于启用状态。

### 20 给出事件默认操作的两个示例。（P193）

+ 对链接进行单击将导致链接指向的文档替换当前文档。
+ 对提交按钮进行单击将导致表单的数据发送给服务器。

### 21 解释方法addEventListener的前两个参数的含义。（P193）

addEventListener的第一个参数是事件名称字符串字面量，即处理程序要处理的事件名称。第二个参数是事件处理函数，可以是函数的代码（表现为匿名函数定义）或者是在其他位置定义的函数的名称。

### 22 如何注册一个事件处理程序，以使得它能够在捕获阶段被调用？（P193）

addEventListener的第三个参数是一个布尔值，将其设置为true，那么在捕获阶段将启用事件处理程序，这样它能够在捕获阶段被调用。

### 23 如何注销一个事件处理程序？（P193）

方法removeEventListener可以注销一个事件，它有三个参数，第一个参数是事件名称字符串字面量，第二个参数是事件处理函数，第三个参数是一个布尔值。调用该方法时，其参数与注册事件时的参数是一致的。

### 24 clientX和clientY属性保存的内容是什么？（P194）

clientX和clientY属性分别指定鼠标的X坐标和Y坐标，具体的坐标值是相对于浏览器窗口客户区域的左上角进行计算的，且在计算过程中考虑的是整个浏览器窗口。

### 25 canvas元素的作用是什么？（P196、P200）

canvas元素会创建一个矩形画布，通过使用JavaScript可以在画布上绘制位映射图形。canvas元素不仅可以用来创建矩形、弧线、圆等二维图形，还可以绘制贝塞尔曲线、二次曲线，将图片和动画等内容融合到元素中。

### 26 moveTo方法完成什么操作？（P198）

moveTo方法有两个参数，分别为水平像素位置和垂直像素位置，其作用是将开始绘制的位置移动到指定参数的位置上。

### 27 解释arc方法的参数。（P199）

前两个参数提供了弧线或者圆的中心位置，分别表示水平和垂直像素位置，是从画布左上角开始计算的。第三个参数指定了弧线或者圆的半径。第四个参数是开始绘制的角度。第五个参数是结束绘制的角度。开始绘制和结束绘制的角度是以弧度为单位的。第六个参数是一个布尔值，指定了绘制是沿顺时针（false）还是逆时针（true）进行。

### 28 navigator对象的作用是什么？（P200）

navigator对象包含了正在使用的浏览器的相关信息，包括浏览器的名称、版本等信息属性，可以根据使用的浏览器类型为其指定合适的程序。

## 编程练习题

### 01 开发一个文档，使其包含5个单选按钮，标签分别为red、blue、green、yellow以及orange。针对这些按钮的事件处理程序必须能够产生消息，消息的内容为选中的最喜爱的颜色。这个事件处理程序必须作为函数实现，其名称要赋给单选按钮元素的onlick特性。选中的颜色必须作为参数传递给事件处理程序。

### 02 重写01的文档，将事件处理程序代码赋给单选按钮元素的事件属性。要求选中的颜色从按钮的value属性获得，而不是通过参数获得。

### 03 开发一个HTML文档，其中包含了一组复选框和一个提交按钮，复选框的内容为苹果（每个59美分）、橘子（每个49美分）和香蕉（每个39美分）。每个复选框都应该有自己的onclick事件处理程序。这些事件处理程序必须能够将对应的水果价格添加到总价格中。针对提交按钮的事件处理程序必须能够产生一个alert窗口，其中的消息格式为Your total cost is $xxx，其中xxx是所选水果的总价格加上5%的销售税。这个处理程序必须返回false（以免真正传送表单数据）。

### 04 修改03的文档，使用文本框来替代复选框。这些文本框用于接收数值输入，其含义为购买水果的数目。其余部分与03的要求相同

### 05 为04的文档中的文本框添加真实性检查功能。对文本框输入的检查应该保证输入的数值在0~99之间。

### 06 元素输入范围的检查可以表示为该元素对象的新属性。修改05的文档，添加一个max属性，其属性值为99；添加一个min属性，其属性值为0。事件处理程序必须利用这两个表示范围的属性来检查文本框的输入值。

### 07 开发一个HTML文档，用于收集用户的一下信息：姓、名、中间名首字母、年龄（必须超过17岁）以及体重（限制范围为80~300）.必须针对这些表单元素创建事件处理程序，来检查所收集的信息是否正确。当检测到错误是，使用alert窗口来显示错误消息。

### 08 利用DOM2事件模型修改01的文档。

### 09 利用DOM2事件模型修改03的文档。

### 10 开发一个HTML文档和一个JavaScript脚本，绘制一个实心正方形，其中包含一个空圆。

### 11 开发一个HTML文档和一个JavaScript脚本，绘制奥林匹克标志。