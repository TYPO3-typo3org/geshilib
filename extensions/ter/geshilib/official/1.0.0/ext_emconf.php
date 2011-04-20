<?php

########################################################################
# Extension Manager/Repository config file for ext "geshilib".
#
# Auto generated 20-04-2011 05:39
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'GeSHi - Generic Syntax Highlighter (lib)',
	'description' => 'Provides a library for use in extensions. GeSHi is a syntax highlighter for HTML, written in PHP. Basically, you input the source you want to highlight and the name of the language you want to highlight it in, and GeSHi returns the syntax-highlighted result (http://qbnz.com/highlighter/index.php).',
	'category' => 'misc',
	'shy' => 0,
	'version' => '1.0.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Vincent Tietz',
	'author_email' => 'mail@vincent-tietz.de',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:107:{s:9:"ChangeLog";s:4:"4911";s:10:"README.txt";s:4:"9fa9";s:12:"ext_icon.gif";s:4:"75c7";s:14:"doc/manual.sxw";s:4:"240a";s:19:"doc/wizard_form.dat";s:4:"ef32";s:20:"doc/wizard_form.html";s:4:"18b8";s:13:"res/geshi.php";s:4:"e755";s:23:"res/contrib/aliased.php";s:4:"00ab";s:22:"res/contrib/cssgen.php";s:4:"a900";s:23:"res/contrib/example.php";s:4:"ab85";s:18:"res/geshi/abap.php";s:4:"7656";s:26:"res/geshi/actionscript.php";s:4:"043a";s:27:"res/geshi/actionscript3.php";s:4:"55ab";s:17:"res/geshi/ada.php";s:4:"47ed";s:20:"res/geshi/apache.php";s:4:"dee0";s:25:"res/geshi/applescript.php";s:4:"ed6f";s:17:"res/geshi/asm.php";s:4:"f592";s:17:"res/geshi/asp.php";s:4:"2243";s:20:"res/geshi/autoit.php";s:4:"5cc9";s:18:"res/geshi/bash.php";s:4:"44fc";s:22:"res/geshi/basic4gl.php";s:4:"ff54";s:24:"res/geshi/blitzbasic.php";s:4:"014c";s:17:"res/geshi/bnf.php";s:4:"fece";s:15:"res/geshi/c.php";s:4:"c19e";s:19:"res/geshi/c_mac.php";s:4:"32d6";s:20:"res/geshi/caddcl.php";s:4:"38b9";s:21:"res/geshi/cadlisp.php";s:4:"cccb";s:18:"res/geshi/cfdg.php";s:4:"3458";s:17:"res/geshi/cfm.php";s:4:"fffb";s:20:"res/geshi/cpp-qt.php";s:4:"be7f";s:17:"res/geshi/cpp.php";s:4:"cbf7";s:20:"res/geshi/csharp.php";s:4:"0994";s:17:"res/geshi/css.php";s:4:"d953";s:15:"res/geshi/d.php";s:4:"dc70";s:20:"res/geshi/delphi.php";s:4:"2357";s:18:"res/geshi/diff.php";s:4:"936f";s:17:"res/geshi/div.php";s:4:"7347";s:17:"res/geshi/dos.php";s:4:"d44a";s:17:"res/geshi/dot.php";s:4:"5c4d";s:20:"res/geshi/eiffel.php";s:4:"1740";s:21:"res/geshi/fortran.php";s:4:"77e8";s:23:"res/geshi/freebasic.php";s:4:"277e";s:20:"res/geshi/genero.php";s:4:"0f82";s:21:"res/geshi/gettext.php";s:4:"4695";s:18:"res/geshi/glsl.php";s:4:"0504";s:17:"res/geshi/gml.php";s:4:"ea04";s:20:"res/geshi/groovy.php";s:4:"cf04";s:21:"res/geshi/haskell.php";s:4:"9da2";s:25:"res/geshi/html4strict.php";s:4:"8746";s:17:"res/geshi/idl.php";s:4:"da31";s:17:"res/geshi/ini.php";s:4:"f1d4";s:18:"res/geshi/inno.php";s:4:"52e4";s:16:"res/geshi/io.php";s:4:"66b4";s:18:"res/geshi/java.php";s:4:"b759";s:19:"res/geshi/java5.php";s:4:"0cee";s:24:"res/geshi/javascript.php";s:4:"8b9b";s:21:"res/geshi/kixtart.php";s:4:"6e5c";s:19:"res/geshi/latex.php";s:4:"ce96";s:18:"res/geshi/lisp.php";s:4:"2a0b";s:27:"res/geshi/lotusformulas.php";s:4:"8c13";s:25:"res/geshi/lotusscript.php";s:4:"10d8";s:17:"res/geshi/lua.php";s:4:"8183";s:18:"res/geshi/m68k.php";s:4:"be67";s:20:"res/geshi/matlab.php";s:4:"547f";s:18:"res/geshi/mirc.php";s:4:"6683";s:19:"res/geshi/mpasm.php";s:4:"d7dc";s:18:"res/geshi/mxml.php";s:4:"8dbf";s:19:"res/geshi/mysql.php";s:4:"73b3";s:18:"res/geshi/nsis.php";s:4:"61f7";s:18:"res/geshi/objc.php";s:4:"bb9a";s:25:"res/geshi/ocaml-brief.php";s:4:"8788";s:19:"res/geshi/ocaml.php";s:4:"7218";s:19:"res/geshi/oobas.php";s:4:"5e45";s:21:"res/geshi/oracle8.php";s:4:"19c1";s:20:"res/geshi/pascal.php";s:4:"1af6";s:17:"res/geshi/per.php";s:4:"eb91";s:18:"res/geshi/perl.php";s:4:"3c1f";s:23:"res/geshi/php-brief.php";s:4:"1dcb";s:17:"res/geshi/php.php";s:4:"80d9";s:19:"res/geshi/plsql.php";s:4:"7eaf";s:20:"res/geshi/python.php";s:4:"14be";s:20:"res/geshi/qbasic.php";s:4:"b55a";s:19:"res/geshi/rails.php";s:4:"30b6";s:17:"res/geshi/reg.php";s:4:"5097";s:20:"res/geshi/robots.php";s:4:"450c";s:18:"res/geshi/ruby.php";s:4:"c7bb";s:17:"res/geshi/sas.php";s:4:"9903";s:19:"res/geshi/scala.php";s:4:"396e";s:20:"res/geshi/scheme.php";s:4:"df3c";s:22:"res/geshi/sdlbasic.php";s:4:"edfc";s:23:"res/geshi/smalltalk.php";s:4:"92ea";s:20:"res/geshi/smarty.php";s:4:"4777";s:17:"res/geshi/sql.php";s:4:"65e2";s:17:"res/geshi/tcl.php";s:4:"42fe";s:18:"res/geshi/text.php";s:4:"23ff";s:23:"res/geshi/thinbasic.php";s:4:"5bc8";s:18:"res/geshi/tsql.php";s:4:"cc75";s:24:"res/geshi/typoscript.php";s:4:"89ae";s:16:"res/geshi/vb.php";s:4:"a699";s:19:"res/geshi/vbnet.php";s:4:"cebe";s:21:"res/geshi/verilog.php";s:4:"964e";s:18:"res/geshi/vhdl.php";s:4:"8263";s:26:"res/geshi/visualfoxpro.php";s:4:"d2ae";s:22:"res/geshi/winbatch.php";s:4:"745b";s:17:"res/geshi/xml.php";s:4:"e851";s:17:"res/geshi/xpp.php";s:4:"0e3c";s:17:"res/geshi/z80.php";s:4:"3a3c";}',
);

?>