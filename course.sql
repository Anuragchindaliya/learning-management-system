-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 02:56 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_28626503_geek`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `admin_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `admin_pass` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'Anurag', 'anurag@gmail.com', 'anurag'),
(2, 'Ankush', 'ankush@gmail.com', 'ankush');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `course_desc` longtext COLLATE utf8_bin NOT NULL,
  `course_url` varchar(255) COLLATE utf8_bin NOT NULL,
  `course_category` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT 'coursePlaceholder',
  `course_level` enum('0','1','2') COLLATE utf8_bin NOT NULL,
  `course_author` varchar(255) COLLATE utf8_bin NOT NULL,
  `course_img` text COLLATE utf8_bin NOT NULL,
  `course_duration` int(11) NOT NULL,
  `course_mrp` int(11) NOT NULL,
  `course_price` int(11) NOT NULL,
  `view_count` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_desc`, `course_url`, `course_category`, `course_level`, `course_author`, `course_img`, `course_duration`, `course_mrp`, `course_price`, `view_count`, `created_at`) VALUES
(5, 'HTML - Build a Website Tutorial', 'HTML for Absolute Beginners\nWhile many guides on the internet attempt to teach HTML using a lot of mind-boggling theory, this tutorial will instead focus on giving you the practical skills to build your first site.\n\nThe aim is to show you â€˜howâ€™ to create your first web page without spending the entire tutorial focusing too much on the â€œwhy.â€\n\nBy the end of this tutorial, you will have the know-how to create a basic website and we hope that this will inspire you to delve further into the world of HTML using our follow-on guides.\n\nWhat is HTML?\nOkay, so this is the only bit of mandatory theory. In order to begin to write HTML, it helps if you know what you are writing.\n\nHTML is the language in which most websites are written. HTML is used to create pages and make them functional.\n\nThe code used to make them visually appealing is known as CSS and we shall focus on this in a later tutorial. For now, we will focus on teaching you how to build rather than design.\n\nThe History of HTML\nHTML was first created by Tim Berners-Lee, Robert Cailliau, and others starting in 1989. It stands for Hyper Text Markup Language.\n\nHypertext means that the document contains links that allow the reader to jump to other places in the document or to another document altogether. The latest version is known as HTML5.\n\nA Markup Language is a way that computers speak to each other to control how text is processed and presented. To do this HTML uses two things: tags and attributes.\n\nWhat are Tags and Attributes?\nTags and attributes are the basis of HTML.\n\nThey work together but perform different functions â€“ it is worth investing 2 minutes in differentiating the two.\n\nWhat Are HTML Tags?\nTags are used to mark up the start of an HTML element and they are usually enclosed in angle brackets. An example of a tag is: <h1>.\n\nMost tags must be opened <h1> and closed </h1> in order to function.\n\nWhat are HTML Attributes?\nAttributes contain additional pieces of information. Attributes take the form of an opening tag and additional info is placed inside.\n\nAn example of an attribute is:\n\n<img src=\"https://source.unsplash.com/300x300/?html,code\n\" alt=\"html code\">\n\nIn this instance, the image source (src) and the alt text (alt) are attributes of the <img> tag.\n\nGolden Rules To Remember\nThe vast majority of tags must be opened (<tag>) and closed (</tag>) with the element information such as a title or text resting between the tags.\nWhen using multiple tags, the tags must be closed in the order in which they were opened. For example:\n\n<strong><em>This is really important!</em></strong>\nHTML Editors\nNow that weâ€™ve gotten the basic theory out of the way. Itâ€™s time to learn how to build our first website.\n\nHTML for Absolute Beginners\nWhile many guides on the internet attempt to teach HTML using a lot of mind-boggling theory, this tutorial will instead focus on giving you the practical skills to build your first site.\n\nThe aim is to show you â€˜howâ€™ to create your first web page without spending the entire tutorial focusing too much on the â€œwhy.â€\n\nBy the end of this tutorial, you will have the know-how to create a basic website and we hope that this will inspire you to delve further into the world of HTML using our follow-on guides.\n\nWhat is HTML?\nOkay, so this is the only bit of mandatory theory. In order to begin to write HTML, it helps if you know what you are writing.\n\nHTML is the language in which most websites are written. HTML is used to create pages and make them functional.\n\nThe code used to make them visually appealing is known as CSS and we shall focus on this in a later tutorial. For now, we will focus on teaching you how to build rather than design.\n\nThe History of HTML\nHTML was first created by Tim Berners-Lee, Robert Cailliau, and others starting in 1989. It stands for Hyper Text Markup Language.\n\nHypertext means that the document contains links that allow the reader to jump to other places in the document or to another document altogether. The latest version is known as HTML5.\n\nA Markup Language is a way that computers speak to each other to control how text is processed and presented. To do this HTML uses two things: tags and attributes.\n\nWhat are Tags and Attributes?\nTags and attributes are the basis of HTML.\n\nThey work together but perform different functions â€“ it is worth investing 2 minutes in differentiating the two.\n\nWhat Are HTML Tags?\nTags are used to mark up the start of an HTML element and they are usually enclosed in angle brackets. An example of a tag is: <h1>.\n\nMost tags must be opened <h1> and closed </h1> in order to function.\n\nWhat are HTML Attributes?\nAttributes contain additional pieces of information. Attributes take the form of an opening tag and additional info is placed inside.\n\nAn example of an attribute is:\n\n<img src=\"https://source.unsplash.com/300x300/?html,code\n\" alt=\"html code\">\n\nIn this instance, the image source (src) and the alt text (alt) are attributes of the <img> tag.\n\nGolden Rules To Remember\nThe vast majority of tags must be opened (<tag>) and closed (</tag>) with the element information such as a title or text resting between the tags.\nWhen using multiple tags, the tags must be closed in the order in which they were opened. For example:\n\n<strong><em>This is really important!</em></strong>\nHTML Editors\nNow that weâ€™ve gotten the basic theory out of the way. Itâ€™s time to learn how to build our first website.', 'https://www.youtube.com/watch?v=pQN-pnXPaVg', 'html', '0', 'Anurag', 'C:fakepathin-team-4.png', 0, 0, 299, 59, '2021-07-03 14:49:11'),
(6, 'CSS Tutorial - Zero to Hero (Complete Course)', 'CSS - short for Cascading Style Sheets - is a \"programming language\" you use to turn your raw HTML pages into real beautiful websites.\n\nThis course covers it all - we start at the very basics (What is CSS? How does it work? How do you use it)? and gradually dive in deeper and deeper. And we do this by showing both practical examples as well as the theory behind it.\n\nGetting started with CSS might look easy but there actually is a lot of depth to CSS - hence this course provides different \"Tracks\" or \"Entry points\" to exactly meet your demands and reflect you current knowledge level:\n\nThe Basics Track: Start from scratch, learn CSS from the ground up. You start with lecture 1 and simply follow through to the end.\n\nThe Advanced Track: You already know the CSS basics, you know what selectors are and how it works but you want to dive in deeper and learn some advanced features and usages.\n\nThe Expert Track: You got the advanced knowledge, too, but you want to dive into things like Flexbox, CSS Grid, CSS Variables or Sass. This track is for you.\n\ncss\nCSS - short for Cascading Style Sheets - is a \"programming language\" you use to turn your raw HTML pages into real beautiful websites.\n\nThis course covers it all - we start at the very basics (What is CSS? How does it work? How do you use it)? and gradually dive in deeper and deeper. And we do this by showing both practical examples as well as the theory behind it.\n\nGetting started with CSS might look easy but there actually is a lot of depth to CSS - hence this course provides different \"Tracks\" or \"Entry points\" to exactly meet your demands and reflect you current knowledge level:\n\nThe Basics Track: Start from scratch, learn CSS from the ground up. You start with lecture 1 and simply follow through to the end.\n\nThe Advanced Track: You already know the CSS basics, you know what selectors are and how it works but you want to dive in deeper and learn some advanced features and usages.\n\nThe Expert Track: You got the advanced knowledge, too, but you want to dive into things like Flexbox, CSS Grid, CSS Variables or Sass. This track is for you.', 'https://www.youtube.com/watch?v=1Rs2ND1ryYc', 'css', '0', 'Anurag', 'C:fakepathin-team-4.png', 0, 0, 344, 7, '2021-07-03 19:10:07'),
(7, 'JavaScript Programming - Full Course', 'JavaScript (JS) is a lightweight, interpreted, or just-in-time compiled programming language with first-class functions. While it is most well-known as the scripting language for Web pages, many non-browser environments also use it, such as Node.js, Apache CouchDB and Adobe Acrobat. JavaScript is a prototype-based, multi-paradigm, single-threaded, dynamic language, supporting object-oriented, imperative, and declarative (e.g. functional programming) styles. Read more about JavaScript.\n\nThis section is dedicated to the JavaScript language itself, and not the parts that are specific to Web pages or other host environments. For information about API specifics to Web pages, please see Web APIs and DOM.\n\nThe standards for JavaScript are the ECMAScript Language Specification (ECMA-262) and the ECMAScript Internationalization API specification (ECMA-402). The JavaScript documentation throughout MDN is based on the latest draft versions of ECMA-262 and ECMA-402. And in cases where some proposals for new ECMAScript features have already been implemented in browsers, documentation and examples in MDN articles may use some of those new features.\n\nDo not confuse JavaScript with the Java programming language. Both \"Java\" and \"JavaScript\" are trademarks or registered trademarks of Oracle in the U.S. and other countries. However, the two programming languages have very different syntax, semantic, and use.\n\nJavaScript (JS) is a lightweight, interpreted, or just-in-time compiled programming language with first-class functions. While it is most well-known as the scripting language for Web pages, many non-browser environments also use it, such as Node.js, Apache CouchDB and Adobe Acrobat. JavaScript is a prototype-based, multi-paradigm, single-threaded, dynamic language, supporting object-oriented, imperative, and declarative (e.g. functional programming) styles. Read more about JavaScript.\n\nThis section is dedicated to the JavaScript language itself, and not the parts that are specific to Web pages or other host environments. For information about API specifics to Web pages, please see Web APIs and DOM.\n\nThe standards for JavaScript are the ECMAScript Language Specification (ECMA-262) and the ECMAScript Internationalization API specification (ECMA-402). The JavaScript documentation throughout MDN is based on the latest draft versions of ECMA-262 and ECMA-402. And in cases where some proposals for new ECMAScript features have already been implemented in browsers, documentation and examples in MDN articles may use some of those new features.\n\nDo not confuse JavaScript with the Java programming language. Both \"Java\" and \"JavaScript\" are trademarks or registered trademarks of Oracle in the U.S. and other countries. However, the two programming languages have very different syntax, semantic, and use.', 'https://www.youtube.com/watch?v=jS4aFq5-91M', 'javascript', '2', 'Anurag', 'C:fakepathin-team-4.png', 0, 0, 699, 9, '2021-07-04 08:43:15'),
(8, 'PHP For Absolute Beginners | 6.5 Hour Course', 'The PHP Hypertext Preprocessor (PHP) is a programming language that allows web developers to create dynamic content that interacts with databases. PHP is basically used for developing web based software applications. This tutorial helps you to build your base with PHP.\n\nWhy to Learn PHP?\nPHP started out as a small open source project that evolved as more and more people found out how useful it was. Rasmus Lerdorf unleashed the first version of PHP way back in 1994.\nPHP is a MUST for students and working professionals to become a great Software Engineer specially when they are working in Web Development Domain. I will list down some of the key advantages of learning PHP:\n\nPHP is a recursive acronym for \"PHP: Hypertext Preprocessor\".\n\nPHP is a server side scripting language that is embedded in HTML. It is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites.\n\nIt is integrated with a number of popular databases, including MySQL, PostgreSQL, Oracle, Sybase, Informix, and Microsoft SQL Server.\nPHP is pleasingly zippy in its execution, especially when compiled as an Apache module on the Unix side. The MySQL server, once started, executes even very complex queries with huge result sets in record-setting time.\n\nPHP supports a large number of major protocols such as POP3, IMAP, and LDAP. PHP4 added support for Java and distributed object architectures (COM and CORBA), making n-tier development a possibility for the first time.\n\nPHP is forgiving: PHP language tries to be as forgiving as possible.\n\nPHP Syntax is C Like.\n\nCharacteristics of PHP\nFive important characteristics make PHPs practical nature possible\n\nSimplicity\nEfficiency\nSecurity\nFlexibility\nFamiliarity\n\nApplications of PHP\nAs mentioned before, PHP is one of the most widely used language over the web. Im going to list few of them here:\n\nPHP performs system functions, i.e. from files on a system it can create, open, read, write, and close them.\n\nPHP can handle forms, i.e. gather data from files, save data to a file, through email you can send data, return data to the user.\n\nYou add, delete, modify elements within your database through PHP.\n\nAccess cookies variables and set cookies.\n\nUsing PHP, you can restrict users to access some pages of your website.\n\nIt can encrypt data.\n\nAudience\nThis PHP tutorial is designed for PHP programmers who are completely unaware of PHP concepts but they have basic understanding on computer programming.\n\nPrerequisites\nBefore proceeding with this tutorial you should have at least basic understanding of computer programming, Internet, Database, and MySQL etc is very helpful.\n\n', 'https://www.youtube.com/watch?v=2eebptXfEvw', 'wordpress', '0', 'Anurag', 'C:fakepathin-team-5.png', 0, 0, 499, 9, '2021-07-04 08:55:27'),
(9, 'Bootstrap 5 Crash Course | Website Build & Deploy', 'Bootstrap 5 s very first alpha has arrived! We ve been working hard for several months to refine the work we started in v4, and while we re feeling great about our progress, there s still even more to do.\n\nWe ve been focused on making the migration from v4 to v5 more approachable, but we ve also not been afraid to step away from whats outdated or no longer appropriate. As such, we re very happy to say that with v5, Bootstrap no longer depends on jQuery and we ve dropped support for Internet Explorer. We re sharpening our focus on building tools that are more future-friendly, and while we re not fully there yet, the promise of CSS variables, faster JavaScript, fewer dependencies, and better APIs certainly feel right to us.\n\nBefore you jump to updating, please remember v5 is now in alphaâ€”breaking changes will continue to occur until our first beta. We haven t finished adding or removing everything, so check for open issues and pull requests as you have questions or feedback.\n\nNow letâ€™s dig in with some highlights!\n\nNew look and feel\nWe ve built on the improvements to our docs homepage in v4.5.0 with an updated look and feel for the rest of our docs. Our docs pages are no longer full-width to improve readability and make our site feel less app-like and more content-like. In addition, we ve upgraded our sidebar to use expandable sections (powered by our own Collapse plugin) for faster navigation.\njQuery and JavaScript\njQuery brought unprecedented access to complex JavaScript behaviors to millions (billions?) of people over the last decade and a half. Personally, Iâ€™m forever grateful for the empowerment and support it gave me to continue writing front-end code, learning new things, and embracing plugins from the community. Perhaps most importantly, itâ€™s forever changed JavaScript itself, and that in itself is a monument to jQueryâ€™s success. Thank you to every jQuery contributor and maintainer who made that possible for folks like me.\n\nThanks to advancement made in front-end development tools and browser support, weâ€™re now able to drop jQuery as a dependency, but youâ€™d never notice otherwise. This migration was a huge undertaking by @Johann-S, our primary JavaScript maintainer these days. It marks one of the largest changes to the framework in years and means projects built on Bootstrap 5 will be significantly lighter on file size and page load moving forward.\n\nIn addition to dropping jQuery, weâ€™ve made a handful of other changes and enhancements to our JavaScript in v5 that focus on code quality and bridging the gap between v4 and v5. One of our other larger changes was dropping the bulk of our Button plugin for an HTML and CSS only approach to toggle states. Now toggle buttons are powered by checkboxes and radio buttons and are much more reliable.\n\nYou can see the full list of JS related changes in the first v5 alpha project on GitHub.\n\nInterested in helping out on Bootstrapâ€™s JavaScript? Weâ€™re always looking for new contributors to the team to help write new plugins, review pull requests, and fix bugs. Let us know!\n\nCSS custom properties\nAs mentioned, weâ€™ve begun using CSS custom properties in Bootstrap 5 thanks to dropping support for Internet Explorer. In v4 we only included a handful of root variables for color and fonts, and now weâ€™ve added them for a handful of components and layout options.\n\nTake for example our .table component, where weâ€™ve added a handful of local variables to make striped, hoverable, and active table styles easier:\n\n', 'https://www.youtube.com/watch?v=4sosXZsdy-s', 'bootstrap', '0', 'Anurag', 'C:fakepathin-team-6.png', 0, 0, 499, 5, '2021-07-04 11:17:08'),
(10, 'How To Make a Website With WordPress - 2021 (Beginners Tutorial)', 'Learn every step to make a WordPress website in this beginner s course. No coding necessary! You will learn how to get a domain name and hosting, install Wordpress, use a theme, customize the exact website you want, and more.\nWordPress (WP, WordPress.org) is a free and open-source content management system (CMS) written in PHPand paired with a MySQL or MariaDB database. Features include a plugin architecture and a template system, referred to within WordPress as Themes. WordPress was originally created as a blog-publishing system but has evolved to support other web content types including more traditional mailing lists and forums, media galleries, membership sites, learning management systems (LMS) and online stores. WordPress is used by 41.4% of the top 10 million websites as of May 2021, WordPress is one of the most popular content management system solutions in use. WordPress has also been used for other application domains, such as pervasive display systems (PDS).\n\nWordPress was released on May 27, 2003, by its founders, American developer Matt Mullenweg and English developer Mike Little, as a fork of b2/cafelog. The software is released under the GPLv2 (or later) license.\n\nTo function, WordPress has to be installed on a web server, either part of an Internet hosting service like WordPress.com or a computer running the software package WordPress.org in order to serve as a network host in its own right. A local computer may be used for single-user testing and learning purposes.\nWordPress is a factory that makes webpages is a core analogy designed to clarify the functions of WordPress: it stores content and enables a user to create and publish webpages, requiring nothing beyond a domain and a hosting service.\n\nWordPress has a web template system using a template processor. Its architecture is a front controller, routing all requests for non-static URIs to a single PHP file which parses the URI and identifies the target page. This allows support for more human-readable permalinks.\n\nThemes\nWordPress users may install and switch among different themes. Themes allow users to change the look and functionality of a WordPress website without altering the core code or site content. Every WordPress website requires at least one theme to be present and every theme should be designed using WordPress standards with structured PHP, valid HTML (HyperText Markup Language), and Cascading Style Sheets (CSS). Themes may be directly installed using the WordPress Appearance administration tool in the dashboard, or theme folders may be copied directly into the themes directory, for example, via FTP. The PHP, HTML and CSS found in themes can be directly modified to alter theme behavior, or a theme can be a child theme that inherits settings from another theme and selectively overrides features. WordPress themes are generally classified into two categories: free and premium. Many free themes are listed in the WordPress theme directory (also known as the repository), and premium themes are available for purchase from marketplaces and individual WordPress developers. WordPress users may also create and develop their own custom themes. The free theme Underscores created by the WordPress developers has become a popular basis for new themes.\n\nPlugins\nWordPress plugin architecture allows users to extend the features and functionality of a website or blog. As of May 2021, WordPress.org has 58,463 plugins available, each of which offers custom functions and features enabling users to tailor their sites to their specific needs. However, this does not include the premium plugins that are available (approximately 1,500+), which may not be listed in the WordPress.org repository. These customizations range from search engine optimization (SEO), to client portals used to display private information to logged-in users, to content management systems, to content displaying features, such as the addition of widgets and navigation bars. Not all available plugins are always abreast with the upgrades, and as a result, they may not function properly or may not function at all. Most plugins are available through WordPress themselves, either via downloading them and installing the files manually via FTP or through the WordPress dashboard. However, many third parties offer plugins through their own websites, many of which are paid packages.\n\nWeb developers who wish to develop plugins need to learn WordPress hook system which consists of over 2000 hooks (as of Version 5.7 in 2021) divided into two categories: action hooks and filter hooks.\n\nPlugins also represent a development strategy that can transform WordPress into all sorts of software systems and applications, limited only by the imagination and creativity of the programmers. These are implemented using custom plugins to create non-website systems, such as headless WordPress applications and Software as a Service (SaaS) products.', 'https://www.youtube.com/watch?v=O79pJ7qXwoE', 'wordpress', '0', 'Anurag', 'C:fakepathin-team-5.png', 0, 0, 699, 6, '2021-07-04 11:21:27'),
(11, 'Node JS Tutorial | Crash Course', 'As an asynchronous event-driven JavaScript runtime, Node.js is designed to build scalable network applications. In the following hello world example, many connections can be handled concurrently. Upon each connection, the callback is fired, but if there is no work to be done, Node.js will sleep.\n\nThis is in contrast to today s more common concurrency model, in which OS threads are employed. Thread-based networking is relatively inefficient and very difficult to use. Furthermore, users of Node.js are free from worries of dead-locking the process, since there are no locks. Almost no function in Node.js directly performs I/O, so the process never blocks. Because nothing blocks, scalable systems are very reasonable to develop in Node.js.\n\nIf some of this language is unfamiliar, there is a full article on Blocking vs. Non-Blocking.\n\nNode.js is similar in design to, and influenced by, systems like Ruby s Event Machine and Python s Twisted. Node.js takes the event model a bit further. It presents an event loop as a runtime construct instead of as a library. In other systems, there is always a blocking call to start the event-loop. Typically, behavior is defined through callbacks at the beginning of a script, and at the end a server is started through a blocking call like EventMachine::run(). In Node.js, there is no such start-the-event-loop call. Node.js simply enters the event loop after executing the input script. Node.js exits the event loop when there are no more callbacks to perform. This behavior is like browser JavaScript â€” the event loop is hidden from the user.\n\nHTTP is a first-class citizen in Node.js, designed with streaming and low latency in mind. This makes Node.js well suited for the foundation of a web library or framework.\n\nNode.js being designed without threads doesn t mean you can t take advantage of multiple cores in your environment. Child processes can be spawned by using our child_process.fork() API, and are designed to be easy to communicate with. Built upon that same interface is the cluster module, which allows you to share sockets between processes to enable load balancing over your cores.\nSometimes it is very difficult to learn a new programming language because we generally donâ€™t know where to begin. Node.js is nothing but JavaScript running on the server and itâ€™s super awesome. In this article, we will learn how to set it up and understand some key concepts. By the end of this article, you will be to writing applications using Node.js.\n\nJavaScript is dynamically typed single-threaded interpreted languages for the Web. That means if you are doing web development, you can use this language to perform some operating on the web page, like running some JavaScript code when a button is clicked by the user.\nJavaScript is a dynamically typed language which means a variable can hold any data type like String or Number in its lifetime and JavaScript interpreter wonâ€™t complain about it. Itâ€™s single-threaded which means your JavaScript code runs synchronously or sequentially line by line. Itâ€™s interpreted which means you donâ€™t need to compile your JavaScript code.\nJavaScript is interactive, which means you can directly feed JavaScript code to the interpreter and it will be executed immediately. You can try this by opening DevTools in the browser (in Chrome, press command + option + i) or right-click anywhere on the page and click inspect. Then go to the console tab, here you can type any valid JavaScript code and press enter to run it. Use shift + enter to add a new-line in your code.', 'https://www.youtube.com/watch?v=vJEO57B05Sg', 'node', '1', 'Anurag', 'C:fakepathin-team-5.png', 0, 0, 799, 7, '2021-07-04 11:37:18'),
(12, 'Sass Tutorial for Beginners - CSS With Superpowers', 'In this course, you will learn the basics of Sass. We will start with a brief overview of what Sass is along with what is required to incorporate Sass into your environment. We will also set up a Sass compiler in Visual Studio Code. You will learn about Sass variables, maps, nesting, functions, mixins, extending, and operations.\n\nIf youâ€™re reading this that probably means you are familiar with CSS and have heard of SCSS or Sass but havenâ€™t yet taken a dive.\n\nWell good news. Sass is going to make your life much better. You will finally be able to DRY (Do not Repeat Yourself) your code out in CSS.\nBasically, CSS is missing some great features that would help turn it into an easier to use and read. Sass adds Variables, Nesting, Partials, Mixins, Extend/Inheritance, and Operators. Some of these are things that programming languages tend to have. If you donâ€™t know what some of them are, thatâ€™s okay. Weâ€™re going to define each of these and show you how they can be used.\nA Sass can be compiled into a CSS files making it writing many files easy.\nIf you are using create react app you are in luck because the processing part is already taken care of for you. If not you can use Grunt or Gulp to process your Sass/SCSS files into CSS. If you are not yet in an environment that will do this I suggest setting that up first. This article is to talk about the features of Sass and how to use them.\nWhatâ€™s the difference between Sass and SCSS. Well, both of them can be compiled into CSS. The real difference is in syntax. SCSS uses mostly the same syntax of CSS while Sass takes away curly braces and semi-colons. In both you can use the additional features that Sass provides.\n\nVariables\nIf you use any coding language you know what a variable is. So I wonâ€™t go too in depth with this. Essentially Sass finally allows you to define variables so that if you decide to change say a color you donâ€™t have to change it 1000 times. You can just change your primary color variable in one place and youâ€™re good to go\n$primary-color: #333; \nbody {\n  background-color: $primary-color;\n}\n.text {\n  color: $primary-color;\n}\nNesting\nIn CSS you cannot nest. Letâ€™s take a look at these two selectors. There is nothing terribly wrong with this. But we are repeating code.\nnav ul {\n  margin: 0;\n  padding: 0;\n  list-style: none;\n}\nnav li {\n  display: inline-block;\n}\nWe can nest in Sass like so. This looks much cleaner.\nnav {\n  ul {\n    margin: 0;\n    padding: 0;\n    list-style: none;\n  }\n\n  li { display: inline-block; }\n}\nPartials\nPartials are Sass or Scss files that have an underscore in the front of the filename. For example. â€œ_test.scssâ€. What does this do? It denoteâ€™s that this particular file should not be turned into CSS when the time comes. These files will contain snippets of CSS that can then be imported by other SCSS files.\nThis is a great way to modularize your CSS and keep things easier to maintain. For example you may want to store variables that will be used in multiple files. This is the way to do it.\nMixins\nMixins are interesting because they add a coding language-like feature. You will immediately recognize what I mean upon seeing the code:\n@mixin transform($property) {\n  -webkit-transform: $property;\n  -ms-transform: $property;\n  transform: $property;\n}\n.box { @include transform(rotate(30deg)); }\nInstead of typing out â€œrotate(30deg)â€ 3 times. You can create what essentially feels like a function and sort of acts like one. You pass in the property to the transform() mixin.', 'https://www.youtube.com/watch?v=_a5j7KoflTs', 'Sass', '2', 'Anurag', '', 0, 0, 799, 3, '2021-07-04 11:56:08'),
(13, 'React JS Crash Course 2021', 'What and Why?\nThis article is not going to cover details of what and why? Although you should be knowing by now that React is a JavaScript library aimed to create user interfaces and used extensively by social networking platforms like Facebook and Instagram to name a few.. It is fast, responsive, modular, we can create reusable files. It is scalable and flexible. Many more advantages but we will jump right into some basic concepts.\nWhat is Virtual DOM?\nDOM(Document Object Model) is the UI components, like elements, attributes.\nVirtual DOM is node tree listing of components, which is light weight in memory representation of real DOM.\nThe render() method in react creates it.\nEach time the underlying data changes, new virtual DOM is created, comparing differences between previous virtual DOM and only the changes are updated in real DOM.\nSo, the special thing about ReactDOM.render() is that it only updates DOM elements that have changed. Aha!!!\nWhat is JSX?\nJavaScript extension, JSX is not valid JavaScript that browsers can read. Itâ€™s a JavaScript file that contains JSX code, very similar to HTML and the file have to be complied before it reaches web browser, with JSX complier that translates the JSX into JavaScript.\nJXS element are treated as JavaScript expression, they can be saved as variable, passed to function or stored in an object or array.\nEach JSX expression must have exactly one outermost element. Usually wrap the JSX expression in a <div></div>.\nRendering JSX element means to make it appear on screen. We render JSX expression like this:\nReatDOM is javascript library.\nIn HTML, itâ€™s common to use class as an attribute name but in JSX we cannot use the word class. We have to use className instead. Coz class is reserved word in javaScript and JSX is converted to javaScript.\nIn HTML its optional to include forward slash for self-closing tags like br, img, input, etc but not in JSX.\nCurly braces are markers that signal the beginning and end of a JavaScript:\nConditional operations, if else and && are pretty much same.\nEvent listeners same as HTML.\nIt is not mandatory write JSX, you can write the whole code in React.createElement, but I wonâ€™t recommend that.\nWhat is a Component?\nA component is a small reusable chunk of code that is responsible for one job. Usually to render some HTML.\nWe can use multiple JSX in a component.\nVariables and conditions should be inside render method. \nthisâ€™ refers to the object on which thisâ€™s enclosing method.\nA React application can contain dozens, or even hundreds, of components interaction with each other.\nWhen you import a variable from a file that is not the current file, then an import statement isnâ€™t quite enough. You also need an export statement, written in the other file. Find below example:\nWhat is Props?\nInformation that gets passed from one component to another is known as â€˜propsâ€™.\nA componentâ€™s props is an object. It holds information about that component. To see a componentâ€™s props object, you use the expression this.props ', 'https://www.youtube.com/watch?v=w7ejDZ8SWv8', 'react', '0', 'Anurag', '', 0, 0, 1199, 11, '2021-07-04 12:10:31');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL,
  `stu_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `stu_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `stu_pass` varchar(255) COLLATE utf8_bin NOT NULL,
  `stu_occ` varchar(255) COLLATE utf8_bin NOT NULL,
  `stu_img` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `stu_name`, `stu_email`, `stu_pass`, `stu_occ`, `stu_img`) VALUES
(1, 'Anurag', 'anurag@gmail.com', 'Anurag', '', ''),
(2, 'akshay', 'akshay@gmail.com', 'akshay', '', ''),
(3, 'vinay', 'vinay@gmail.com', 'vinay', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
