<?php
date_default_timezone_set("Asia/Bangkok");
$datenow = date('d-m-Y h-i-s');
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=Result-Kualitas-Kredit-Date-Time-$datenow.doc");

include "include/restrict.php";
include "include/connection.php";
include 'include/head.php';


$id_logbook  = $_GET['id'];

?>
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 15">
<meta name=Originator content="Microsoft Word 15">
<link rel=File-List href="NA_files/filelist.xml">
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>Khoirunisa Waskitaningrum</o:Author>
  <o:LastAuthor>Muhammad Amran</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>203</o:TotalTime>
  <o:LastPrinted>2019-10-24T06:33:00Z</o:LastPrinted>
  <o:Created>2019-10-29T19:39:00Z</o:Created>
  <o:LastSaved>2019-10-29T19:39:00Z</o:LastSaved>
  <o:Pages>2</o:Pages>
  <o:Words>209</o:Words>
  <o:Characters>1192</o:Characters>
  <o:Lines>9</o:Lines>
  <o:Paragraphs>2</o:Paragraphs>
  <o:CharactersWithSpaces>1399</o:CharactersWithSpaces>
  <o:Version>15.00</o:Version>
 </o:DocumentProperties>
</xml><![endif]-->
<link rel=dataStoreItem href="NA_files/item0001.xml"
target="NA_files/props002.xml">
<link rel=themeData href="NA_files/themedata.thmx">
<link rel=colorSchemeMapping href="NA_files/colorschememapping.xml">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:SpellingState>Clean</w:SpellingState>
  <w:GrammarState>Clean</w:GrammarState>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
  <w:PunctuationKerning/>
  <w:DrawingGridHorizontalSpacing>6 pt</w:DrawingGridHorizontalSpacing>
  <w:DisplayHorizontalDrawingGridEvery>2</w:DisplayHorizontalDrawingGridEvery>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>EN-US</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:UseWord2010TableStyleRules/>
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
  </w:Compatibility>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac/>
   <m:dispDef/>
   <m:lMargin m:val="0"/>
   <m:rMargin m:val="0"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
  DefSemiHidden="false" DefQFormat="false" DefPriority="99"
  LatentStyleCount="371">
  <w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 9"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 3"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 4"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 5"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 6"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 7"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 8"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="header"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footer"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index heading"/>
  <w:LsdException Locked="false" Priority="35" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="caption"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of figures"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope return"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="line number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="page number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of authorities"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="macro"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toa heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 5"/>
  <w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Closing"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Signature"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="true"
   UnhideWhenUsed="true" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Message Header"/>
  <w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Salutation"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Date"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Note Heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Block Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="FollowedHyperlink"/>
  <w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Document Map"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Plain Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="E-mail Signature"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Top of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Bottom of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal (Web)"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Acronym"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Cite"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Code"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Definition"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Keyboard"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Preformatted"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Sample"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Typewriter"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Variable"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Table"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation subject"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="No List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Contemporary"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Elegant"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Professional"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Balloon Text"/>
  <w:LsdException Locked="false" Priority="59" Name="Table Grid"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Theme"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 1"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 1"/>
  <w:LsdException Locked="false" SemiHidden="true" Name="Revision"/>
  <w:LsdException Locked="false" Priority="0" QFormat="true"
   Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" QFormat="true"
   Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="60" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="61" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="62" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="63" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="64" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="65" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="66" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="67" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="68" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="69" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="70" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="71" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="72" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="73" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" QFormat="true"
   Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" QFormat="true"
   Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" QFormat="true"
   Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" QFormat="true"
   Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" SemiHidden="true"
   UnhideWhenUsed="true" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
  <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
  <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
  <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
  <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
  <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
  <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
  <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 6"/>
 </w:LatentStyles>
</xml><![endif]-->
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;
	mso-font-charset:2;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:0 268435456 0 0 -2147483648 0;}
@font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536869121 1107305727 33554432 0 415 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-469750017 -1073732485 9 0 511 0;}
@font-face
	{font-family:"Segoe UI";
	panose-1:2 11 5 2 4 2 4 2 2 3;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-469750017 -1073683329 9 0 511 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";}
p
	{mso-style-noshow:yes;
	mso-style-priority:99;
	mso-margin-top-alt:auto;
	margin-right:0in;
	mso-margin-bottom-alt:auto;
	margin-left:0in;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-link:"Balloon Text Char";
	margin:0in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:9.0pt;
	font-family:"Segoe UI",sans-serif;
	mso-fareast-font-family:"Times New Roman";}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-link:"List Paragraph Char";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:.5in;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";}
span.ListParagraphChar
	{mso-style-name:"List Paragraph Char";
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-parent:"";
	mso-style-link:"List Paragraph";
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-ascii-font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-hansi-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";}
span.BalloonTextChar
	{mso-style-name:"Balloon Text Char";
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Balloon Text";
	mso-ansi-font-size:9.0pt;
	mso-bidi-font-size:9.0pt;
	font-family:"Segoe UI",sans-serif;
	mso-ascii-font-family:"Segoe UI";
	mso-fareast-font-family:"Times New Roman";
	mso-hansi-font-family:"Segoe UI";
	mso-bidi-font-family:"Segoe UI";}
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
span.GramE
	{mso-style-name:"";
	mso-gram-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
.MsoPapDefault
	{mso-style-type:export-only;
	margin-bottom:10.0pt;
	line-height:115%;}
@page WordSection1
	{size:595.3pt 841.9pt;
	margin:1.0in 1.0in 1.0in .8in;
	mso-header-margin:35.3pt;
	mso-footer-margin:35.3pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 @list l0
	{mso-list-id:124354417;
	mso-list-type:hybrid;
	mso-list-template-ids:-1173075922 67698703 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l0:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:39.95pt;
	text-indent:-.25in;}
@list l0:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:75.95pt;
	text-indent:-.25in;}
@list l0:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:111.95pt;
	text-indent:-9.0pt;}
@list l0:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:147.95pt;
	text-indent:-.25in;}
@list l0:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:183.95pt;
	text-indent:-.25in;}
@list l0:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:219.95pt;
	text-indent:-9.0pt;}
@list l0:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:255.95pt;
	text-indent:-.25in;}
@list l0:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:291.95pt;
	text-indent:-.25in;}
@list l0:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:327.95pt;
	text-indent:-9.0pt;}
@list l1
	{mso-list-id:150558907;
	mso-list-type:hybrid;
	mso-list-template-ids:2085803314 1432882982 57205902 -908447630 310142762 1025440960 149729510 120508000 -429724852 1724661198;}
@list l1:level1
	{mso-level-start-at:4;
	mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Calibri",sans-serif;}
@list l1:level2
	{mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l1:level3
	{mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l1:level4
	{mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l1:level5
	{mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l1:level6
	{mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l1:level7
	{mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l1:level8
	{mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l1:level9
	{mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l2
	{mso-list-id:311105671;
	mso-list-type:hybrid;
	mso-list-template-ids:888543480 -1504808846 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l2:level1
	{mso-level-start-at:3;
	mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l2:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l2:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l2:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l2:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l2:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l2:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l2:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l2:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l3
	{mso-list-id:331954428;
	mso-list-type:hybrid;
	mso-list-template-ids:2126119678 1034471804 -1153035786 -2004034634 2058899632 -63157724 -1587748564 309378594 -1855793294 -768207140;}
@list l3:level1
	{mso-level-start-at:7;
	mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Calibri",sans-serif;}
@list l3:level2
	{mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l3:level3
	{mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l3:level4
	{mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l3:level5
	{mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l3:level6
	{mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l3:level7
	{mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l3:level8
	{mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l3:level9
	{mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l4
	{mso-list-id:336344927;
	mso-list-type:hybrid;
	mso-list-template-ids:-904120756 -638940936 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l4:level1
	{mso-level-start-at:8;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:38.45pt;
	text-indent:-.25in;}
@list l4:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l4:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l4:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l4:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l4:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l4:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l4:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l4:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l5
	{mso-list-id:399207328;
	mso-list-type:hybrid;
	mso-list-template-ids:-1973408698 940113921 940113923 940113925 940113921 940113923 940113925 940113921 940113923 940113925;}
@list l5:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l5:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l5:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l5:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l5:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l5:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l5:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l5:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l5:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l6
	{mso-list-id:422142670;
	mso-list-type:hybrid;
	mso-list-template-ids:-471425696 -445374268 1569229358 -1386316978 -2188594 1970329018 -113730160 905111146 602853944 1600532018;}
@list l6:level1
	{mso-level-start-at:6;
	mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Calibri",sans-serif;}
@list l6:level2
	{mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l6:level3
	{mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l6:level4
	{mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l6:level5
	{mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l6:level6
	{mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l6:level7
	{mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l6:level8
	{mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l6:level9
	{mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l7
	{mso-list-id:606542906;
	mso-list-type:hybrid;
	mso-list-template-ids:1083586006 -1504808846 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l7:level1
	{mso-level-start-at:3;
	mso-level-tab-stop:38.45pt;
	mso-level-number-position:left;
	margin-left:38.45pt;
	text-indent:-.25in;}
@list l7:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:74.45pt;
	text-indent:-.25in;}
@list l7:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:110.45pt;
	text-indent:-9.0pt;}
@list l7:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:146.45pt;
	text-indent:-.25in;}
@list l7:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:182.45pt;
	text-indent:-.25in;}
@list l7:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:218.45pt;
	text-indent:-9.0pt;}
@list l7:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:254.45pt;
	text-indent:-.25in;}
@list l7:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:290.45pt;
	text-indent:-.25in;}
@list l7:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:326.45pt;
	text-indent:-9.0pt;}
@list l8
	{mso-list-id:679820805;
	mso-list-type:hybrid;
	mso-list-template-ids:-590060880 -434881352 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l8:level1
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:17.3pt;
	text-indent:-.25in;
	font-family:"Calibri",sans-serif;
	mso-fareast-font-family:"Times New Roman";}
@list l8:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:53.3pt;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l8:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:89.3pt;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l8:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:125.3pt;
	text-indent:-.25in;
	font-family:Symbol;}
@list l8:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:161.3pt;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l8:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:197.3pt;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l8:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:233.3pt;
	text-indent:-.25in;
	font-family:Symbol;}
@list l8:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:269.3pt;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l8:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:305.3pt;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l9
	{mso-list-id:697898413;
	mso-list-type:hybrid;
	mso-list-template-ids:714867520 729192752 -889784354 -1591589142 -413616384 664828118 582647772 -1966857026 33561772 2032155054;}
@list l9:level1
	{mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Calibri",sans-serif;}
@list l9:level2
	{mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l9:level3
	{mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l9:level4
	{mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l9:level5
	{mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l9:level6
	{mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l9:level7
	{mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l9:level8
	{mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l9:level9
	{mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l10
	{mso-list-id:709382193;
	mso-list-type:hybrid;
	mso-list-template-ids:-574878266 67698713 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l10:level1
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l10:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l10:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l10:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l10:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l10:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l10:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l10:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l10:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l11
	{mso-list-id:724374244;
	mso-list-type:hybrid;
	mso-list-template-ids:1580335150 583818584 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l11:level1
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:17.3pt;
	text-indent:-.25in;
	font-family:"Calibri",sans-serif;
	mso-fareast-font-family:"Times New Roman";}
@list l11:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:53.3pt;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l11:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:89.3pt;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l11:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:125.3pt;
	text-indent:-.25in;
	font-family:Symbol;}
@list l11:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:161.3pt;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l11:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:197.3pt;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l11:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:233.3pt;
	text-indent:-.25in;
	font-family:Symbol;}
@list l11:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:269.3pt;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l11:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:305.3pt;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l12
	{mso-list-id:762264428;
	mso-list-type:hybrid;
	mso-list-template-ids:1386373164 940113941 940113945 940113947 940113935 940113945 940113947 940113935 940113945 940113947;}
@list l12:level1
	{mso-level-number-format:alpha-upper;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:.25in;
	text-indent:-.25in;}
@list l12:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:.75in;
	text-indent:-.25in;}
@list l12:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:1.25in;
	text-indent:-9.0pt;}
@list l12:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:1.75in;
	text-indent:-.25in;}
@list l12:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:2.25in;
	text-indent:-.25in;}
@list l12:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:2.75in;
	text-indent:-9.0pt;}
@list l12:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:3.25in;
	text-indent:-.25in;}
@list l12:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:3.75in;
	text-indent:-.25in;}
@list l12:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:4.25in;
	text-indent:-9.0pt;}
@list l13
	{mso-list-id:806361379;
	mso-list-type:hybrid;
	mso-list-template-ids:1180623572 -1847689974 -265529850 -1617274420 979039996 -866513512 92685440 967874122 455228412 -1972884892;}
@list l13:level1
	{mso-level-start-at:8;
	mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Calibri",sans-serif;}
@list l13:level2
	{mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l13:level3
	{mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l13:level4
	{mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l13:level5
	{mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l13:level6
	{mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l13:level7
	{mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l13:level8
	{mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l13:level9
	{mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l14
	{mso-list-id:847136587;
	mso-list-type:hybrid;
	mso-list-template-ids:-1281704110 67698689 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l14:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l14:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l14:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l14:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l14:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l14:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l14:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l14:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l14:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l15
	{mso-list-id:903566679;
	mso-list-type:hybrid;
	mso-list-template-ids:1552200340 1926768870 -16217380 -1299291152 1258189932 -1255639742 -877073804 -291441650 -2081419172 -606566202;}
@list l15:level1
	{mso-level-start-at:3;
	mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Calibri",sans-serif;}
@list l15:level2
	{mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l15:level3
	{mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l15:level4
	{mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l15:level5
	{mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l15:level6
	{mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l15:level7
	{mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l15:level8
	{mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l15:level9
	{mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l16
	{mso-list-id:994147664;
	mso-list-type:hybrid;
	mso-list-template-ids:2011486820 67698703 1223720480 -109947034 1544960374 -755721928 -1719115424 753408664 -1914673884 1896775518;}
@list l16:level1
	{mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l16:level2
	{mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l16:level3
	{mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l16:level4
	{mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l16:level5
	{mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l16:level6
	{mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l16:level7
	{mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l16:level8
	{mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l16:level9
	{mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l17
	{mso-list-id:995258387;
	mso-list-type:hybrid;
	mso-list-template-ids:-1525381120 67698703 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l17:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:39.95pt;
	text-indent:-.25in;}
@list l17:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:75.95pt;
	text-indent:-.25in;}
@list l17:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:111.95pt;
	text-indent:-9.0pt;}
@list l17:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:147.95pt;
	text-indent:-.25in;}
@list l17:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:183.95pt;
	text-indent:-.25in;}
@list l17:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:219.95pt;
	text-indent:-9.0pt;}
@list l17:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:255.95pt;
	text-indent:-.25in;}
@list l17:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:291.95pt;
	text-indent:-.25in;}
@list l17:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:327.95pt;
	text-indent:-9.0pt;}
@list l18
	{mso-list-id:1058551576;
	mso-list-type:hybrid;
	mso-list-template-ids:-1287106192 67698703 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l18:level1
	{mso-level-tab-stop:38.45pt;
	mso-level-number-position:left;
	margin-left:38.45pt;
	text-indent:-.25in;}
@list l18:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:74.45pt;
	text-indent:-.25in;}
@list l18:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:110.45pt;
	text-indent:-9.0pt;}
@list l18:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:146.45pt;
	text-indent:-.25in;}
@list l18:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:182.45pt;
	text-indent:-.25in;}
@list l18:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:218.45pt;
	text-indent:-9.0pt;}
@list l18:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:254.45pt;
	text-indent:-.25in;}
@list l18:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:290.45pt;
	text-indent:-.25in;}
@list l18:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:326.45pt;
	text-indent:-9.0pt;}
@list l19
	{mso-list-id:1065879690;
	mso-list-type:hybrid;
	mso-list-template-ids:1321393500 -1909832882 2036093710 -1283800064 -1199827358 -333818966 758664254 1719852802 -231842760 1160678644;}
@list l19:level1
	{mso-level-start-at:5;
	mso-level-tab-stop:.5in;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Calibri",sans-serif;}
@list l19:level2
	{mso-level-tab-stop:1.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l19:level3
	{mso-level-tab-stop:1.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l19:level4
	{mso-level-tab-stop:2.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l19:level5
	{mso-level-tab-stop:2.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l19:level6
	{mso-level-tab-stop:3.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l19:level7
	{mso-level-tab-stop:3.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l19:level8
	{mso-level-tab-stop:4.0in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l19:level9
	{mso-level-tab-stop:4.5in;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l20
	{mso-list-id:1108235812;
	mso-list-type:hybrid;
	mso-list-template-ids:-753648736 67698689 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l20:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l20:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l20:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l20:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l20:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l20:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l20:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l20:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l20:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l21
	{mso-list-id:1109082837;
	mso-list-type:hybrid;
	mso-list-template-ids:1386373164 940113941 940113945 940113947 940113935 940113945 940113947 940113935 940113945 940113947;}
@list l21:level1
	{mso-level-number-format:alpha-upper;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:.25in;
	text-indent:-.25in;}
@list l21:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:.75in;
	text-indent:-.25in;}
@list l21:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:1.25in;
	text-indent:-9.0pt;}
@list l21:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:1.75in;
	text-indent:-.25in;}
@list l21:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:2.25in;
	text-indent:-.25in;}
@list l21:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:2.75in;
	text-indent:-9.0pt;}
@list l21:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:3.25in;
	text-indent:-.25in;}
@list l21:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:3.75in;
	text-indent:-.25in;}
@list l21:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:4.25in;
	text-indent:-9.0pt;}
@list l22
	{mso-list-id:1165050562;
	mso-list-type:hybrid;
	mso-list-template-ids:-1661535490 -589533922 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l22:level1
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Calibri",sans-serif;
	mso-fareast-font-family:"Times New Roman";}
@list l22:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l22:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l22:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l22:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l22:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l22:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l22:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l22:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l23
	{mso-list-id:1173880894;
	mso-list-type:hybrid;
	mso-list-template-ids:959081628 838603746 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l23:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:99.0pt;
	text-indent:-.25in;}
@list l23:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:73.1pt;
	text-indent:-.25in;}
@list l23:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:109.1pt;
	text-indent:-9.0pt;}
@list l23:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:145.1pt;
	text-indent:-.25in;}
@list l23:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:181.1pt;
	text-indent:-.25in;}
@list l23:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:217.1pt;
	text-indent:-9.0pt;}
@list l23:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:253.1pt;
	text-indent:-.25in;}
@list l23:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:289.1pt;
	text-indent:-.25in;}
@list l23:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:325.1pt;
	text-indent:-9.0pt;}
@list l24
	{mso-list-id:1207838533;
	mso-list-type:hybrid;
	mso-list-template-ids:-1781786544 -1417911268 940113945 940113947 940113935 940113945 940113947 940113935 940113945 940113947;}
@list l24:level1
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-weight:normal;}
@list l24:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l24:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l24:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l24:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l24:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l24:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l24:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l24:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l25
	{mso-list-id:1295255335;
	mso-list-type:hybrid;
	mso-list-template-ids:1450606448 368581464 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l25:level1
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Calibri",sans-serif;
	mso-fareast-font-family:"Times New Roman";}
@list l25:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l25:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l25:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l25:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l25:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l25:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l25:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l25:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l26
	{mso-list-id:1333609702;
	mso-list-type:hybrid;
	mso-list-template-ids:-1782928276 940113941 940113945 940113947 940113935 940113945 940113947 940113935 940113945 940113947;}
@list l26:level1
	{mso-level-number-format:alpha-upper;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:373.5pt;
	text-indent:-.25in;}
@list l26:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:.75in;
	text-indent:-.25in;}
@list l26:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:1.25in;
	text-indent:-9.0pt;}
@list l26:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:1.75in;
	text-indent:-.25in;}
@list l26:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:2.25in;
	text-indent:-.25in;}
@list l26:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:2.75in;
	text-indent:-9.0pt;}
@list l26:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:3.25in;
	text-indent:-.25in;}
@list l26:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:3.75in;
	text-indent:-.25in;}
@list l26:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:4.25in;
	text-indent:-9.0pt;}
@list l27
	{mso-list-id:1463037338;
	mso-list-type:hybrid;
	mso-list-template-ids:1386373164 940113941 940113945 940113947 940113935 940113945 940113947 940113935 940113945 940113947;}
@list l27:level1
	{mso-level-number-format:alpha-upper;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:.25in;
	text-indent:-.25in;}
@list l27:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:.75in;
	text-indent:-.25in;}
@list l27:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:1.25in;
	text-indent:-9.0pt;}
@list l27:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:1.75in;
	text-indent:-.25in;}
@list l27:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:2.25in;
	text-indent:-.25in;}
@list l27:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:2.75in;
	text-indent:-9.0pt;}
@list l27:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:3.25in;
	text-indent:-.25in;}
@list l27:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:3.75in;
	text-indent:-.25in;}
@list l27:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:4.25in;
	text-indent:-9.0pt;}
@list l28
	{mso-list-id:1474718804;
	mso-list-type:hybrid;
	mso-list-template-ids:-1940889722 1979340034 940113945 940113947 940113935 940113945 940113947 940113935 940113945 940113947;}
@list l28:level1
	{mso-level-start-at:2;
	mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l28:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l28:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l28:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l28:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l28:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l28:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l28:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l28:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l29
	{mso-list-id:1504660488;
	mso-list-type:hybrid;
	mso-list-template-ids:-1104778484 197525786 940113945 940113947 940113935 940113945 940113947 940113935 940113945 940113947;}
@list l29:level1
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-weight:normal;}
@list l29:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l29:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l29:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l29:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l29:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l29:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l29:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l29:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l30
	{mso-list-id:1766338594;
	mso-list-type:hybrid;
	mso-list-template-ids:1802660794 1694433268 940113945 940113947 940113935 940113945 940113947 940113935 940113945 940113947;}
@list l30:level1
	{mso-level-start-at:4;
	mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l30:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l30:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l30:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l30:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l30:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l30:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l30:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l30:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l31
	{mso-list-id:1884975348;
	mso-list-type:hybrid;
	mso-list-template-ids:2129438826 -1215496724 940113945 940113947 940113935 940113945 940113947 940113935 940113945 940113947;}
@list l31:level1
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	mso-ansi-font-weight:normal;}
@list l31:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l31:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l31:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l31:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l31:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l31:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l31:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l31:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l32
	{mso-list-id:2067949854;
	mso-list-type:hybrid;
	mso-list-template-ids:40509286 1062918604 940113945 940113947 940113935 940113945 940113947 940113935 940113945 940113947;}
@list l32:level1
	{mso-level-start-at:3;
	mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l32:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l32:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l32:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l32:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l32:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l32:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l32:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l32:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l33
	{mso-list-id:2084250779;
	mso-list-type:hybrid;
	mso-list-template-ids:150881216 -1177109590 940113945 940113947 940113935 940113945 940113947 940113935 940113945 940113947;}
@list l33:level1
	{mso-level-start-at:5;
	mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l33:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l33:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l33:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l33:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l33:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l33:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l33:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;}
@list l33:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l34
	{mso-list-id:2102987857;
	mso-list-type:hybrid;
	mso-list-template-ids:-2030391780 732747138 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l34:level1
	{mso-level-start-at:0;
	mso-level-number-format:bullet;
	mso-level-text:-;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Calibri",sans-serif;
	mso-fareast-font-family:"Times New Roman";}
@list l34:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l34:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l34:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l34:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l34:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
@list l34:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Symbol;}
@list l34:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:"Courier New";}
@list l34:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-.25in;
	font-family:Wingdings;}
ol
	{margin-bottom:0in;}
ul
	{margin-bottom:0in;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Table Normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-para-margin-top:0in;
	mso-para-margin-right:0in;
	mso-para-margin-bottom:10.0pt;
	mso-para-margin-left:0in;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
table.MsoTableGrid
	{mso-style-name:"Table Grid";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-priority:59;
	mso-style-unhide:no;
	border:solid windowtext 1.0pt;
	mso-border-alt:solid windowtext .5pt;
	mso-padding-alt:0in 5.4pt 0in 5.4pt;
	mso-border-insideh:.5pt solid windowtext;
	mso-border-insidev:.5pt solid windowtext;
	mso-para-margin:0in;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="1026"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=EN-US style='tab-interval:.5in'>
<?php
$con=mysqli_connect('localhost','root','','knidcore_mandiri');
    // Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// $result = mysqli_query($con,"SELECT * FROM tb_logbook ". (($query1 != '') ? " where $query1 " : " GROUP BY CBC_NAME");    
$result = mysqli_query($con,"SELECT tb_upload_logbook.id_logbook,tb_upload_logbook.date_time_log,tb_upload_logbook.kd_cabang,tb_upload_logbook.kanwil_nm,
                         tb_upload_logbook.area_log,tb_upload_logbook.CBC_NAME,tb_upload_logbook.CIF,tb_upload_logbook.no_rek,
                        tb_upload_logbook.nm_customer,tb_upload_logbook.JNS_KRD,tb_upload_logbook.KOL_LOG,tb_upload_logbook.restru_no,
                        tb_upload_logbook.LIMIT_LOG,tb_upload_logbook.BADE_LOG,tb_upload_logbook.PDDAYS,tb_upload_logbook.IPDDAY,
                        tb_upload_logbook.MATDAT_LOG,tb_upload_logbook.PKDATE_LOG,tb_upload_logbook.Expertise,
                        tb_upload_logbook.BidangUsaha_NA,
                        tb_upload_logbook.status_tindaklanjut,
                        tb_upload_logbook.periode,
                        tb_upload_logbook.reviewer,
                        tb_upload_logbook.NT_1,
                        tb_upload_logbook.NT_2,
                        tb_upload_logbook.NT_3,
                        tb_upload_logbook.NT_4,
                        tb_upload_logbook.NT_5,
                        tb_upload_logbook.NT_6,
                        tb_upload_logbook.limit_ex_NA,
                        tb_upload_logbook.bade_bank_lain_NA,
                        tb_upload_logbook.gusaha_NA,
                        tb_upload_logbook.rating_NA,
                        tb_upload_logbook.ioutlook_NA,
                        tb_upload_logbook.PG_NA,
                        tb_upload_logbook.HP_NA,
                        tb_upload_bidangusaha.BIDANG_USAHA,

                        tb_upload_logbook.D_1,
                        tb_upload_logbook.D_2,
                        tb_upload_logbook.D_3,
                        tb_upload_logbook.D_4,
                        tb_upload_logbook.D_5,
                        tb_upload_logbook.D_6,
                        tb_upload_logbook.D_7,
                        tb_upload_logbook.D_8,
                        tb_upload_logbook.D_9,
                        tb_upload_logbook.D_10,
                        tb_upload_logbook.D_11,
                        tb_upload_logbook.D_12,
                        tb_upload_logbook.D_13,
                        tb_upload_logbook.D_14,
                        tb_upload_logbook.D_15,
                        tb_upload_logbook.D_16,
                        tb_upload_logbook.D_17,
                        
                        tb_upload_logbook.LK_1,
                        tb_upload_logbook.LK_2,
                        tb_upload_logbook.LK_3,

                        tb_upload_logbook.Sales1,
                        tb_upload_logbook.Sales2,
                        tb_upload_logbook.Sales3,

                        tb_upload_logbook.EBITDA1,
                        tb_upload_logbook.EBITDA2,
                        tb_upload_logbook.EBITDA3,

                        tb_upload_logbook.NPM1,
                        tb_upload_logbook.NPM2,
                        tb_upload_logbook.NPM3,

                        tb_upload_logbook.CR1,
                        tb_upload_logbook.CR2,
                        tb_upload_logbook.CR3,

                        tb_upload_logbook.Leverage1,
                        tb_upload_logbook.Leverage2,
                        tb_upload_logbook.Leverage3,

                        tb_upload_logbook.EBITDAI1,
                        tb_upload_logbook.EBITDAI2,
                        tb_upload_logbook.EBITDAI3,

                        tb_upload_logbook.DSCR1,
                        tb_upload_logbook.DSCR2,
                        tb_upload_logbook.DSCR3,

                        tb_upload_logbook.Debt1,
                        tb_upload_logbook.Debt2,
                        tb_upload_logbook.Debt3,

                        tb_upload_logbook.CF_1,
                        tb_upload_logbook.CF_2,
                        tb_upload_logbook.CF_3,

                        tb_upload_logbook.Periode,
                        tb_upload_logbook.UsulanKolektibilitas,
                        tb_upload_logbook.UsulanWatchlist,
                        tb_upload_logbook.AccountStrategy,
                        tb_upload_logbook.CatatanUpBU,
                        tb_upload_logbook.TindakLanjut,
                        tb_upload_logbook.Time_line,
                        tb_upload_logbook.KemampuanMembayar,
                        tb_upload_logbook.KinerjaUsaha,
                        tb_upload_logbook.ProspekUsaha,
                        tb_upload_logbook.ParameterWatchlist,
                        tb_upload_logbook.c_HasilReview,
                        tb_upload_logbook.c_TindakLanjut,
                        tb_upload_logbook.c_Timeline,
                        tb_upload_logbook.c_Status,
                        tb_upload_logbook.ap_HasilReview,
                        tb_upload_logbook.ap_TindakLanjut,
                        tb_upload_logbook.ap_Timeline,
                        tb_upload_logbook.ap_Status,
                        tb_upload_logbook.IBA,
                        tb_upload_logbook.EK,
                        tb_upload_logbook.nt_AccountStrategy,
                        tb_upload_logbook.WT,
                        tb_upload_logbook.CIF AS CIF1, tb_upload_bidangusaha.CIF AS CIF3
                        FROM tb_upload_logbook
                        LEFT JOIN tb_upload_bidangusaha ON tb_upload_logbook.CIF = tb_upload_bidangusaha.CIF
                        WHERE id_logbook='$id_logbook' ORDER BY id_logbook");  

if(mysqli_num_rows($result)>0){

    while($row = mysqli_fetch_array($result))
    {
    ?>
<div class=WordSection1>

<p class=MsoNormal align=center style='text-align:center'><b style='mso-bidi-font-weight:
normal'><span style='font-size:20.0pt;mso-bidi-font-size:10.0pt;font-family:
"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-bidi-theme-font:minor-latin'>Working Paper Credit Risk Review Nota Alert<o:p></o:p></span></b></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal><span class=SpellE><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>NamaD ebitur</span></b></span><b
style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-bidi-theme-font:minor-latin'><span style='mso-tab-count:2'></span>: <?php echo $row['nm_customer']; ?>
<o:p></o:p></span></b></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>CIF<span
style='mso-tab-count:3'></span>: <?php echo $row['CIF']; ?></span></b><span
style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
color:black'><o:p></o:p></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Unit
<span class=SpellE>Pengelola</span><span style='mso-tab-count:2'></span>: <?php echo $row['CBC_NAME']; ?>
</span></b><span style='font-size:10.0pt;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-fareast-font-family:Calibri;mso-hansi-theme-font:
minor-latin;mso-bidi-theme-font:minor-latin'><o:p></o:p></span></p>

<p class=MsoNormal><span class=SpellE><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Tanggal</span></b></span><b
style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-bidi-theme-font:minor-latin'> Review<span style='mso-tab-count:
1'>    </span></span></b><span style='font-size:10.0pt;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
minor-latin'><span style='mso-tab-count:1'></span><b
style='mso-bidi-font-weight:normal'>: <?php echo $datenow; ?><o:p></o:p></b></span></p>

<p class=MsoNormal><span class=SpellE><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Periode</span></b></span><b
style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-bidi-theme-font:minor-latin'><span style='mso-tab-count:2'></span><span
style='mso-tab-count:1'></span>: <?php echo $row['periode']; ?><o:p></o:p></span></b></p>

<p class=MsoNormal><span style='font-size:10.0pt;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
minor-latin'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpFirst style='margin-left:21.3pt;mso-add-space:
auto;text-indent:-13.5pt;line-height:106%;mso-list:l26 level1 lfo1'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;line-height:
106%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>A.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span></b><![endif]><span
class=SpellE><b style='mso-bidi-font-weight:normal'><span style='font-size:
10.0pt;line-height:106%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>InformasiUmum</span></b></span><b
style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;line-height:
106%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p></o:p></span></b></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=0
 style='width:481.5pt;margin-left:9.9pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:
 0in 5.4pt 0in 5.4pt;mso-border-insideh:.5pt solid windowtext;mso-border-insidev:
 .5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:131.35pt'>
  <td width=32 valign=top style='width:23.85pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:131.35pt'>
  <p class=MsoListParagraph align=center style='margin-left:0in;text-align:
  center'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
  minor-latin;mso-bidi-theme-font:minor-latin'>I.<o:p></o:p></span></b></p>
  </td>
  <td width=610 valign=top style='width:457.65pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:131.35pt'>
  <p class=MsoListParagraph style='margin-left:3.5pt'><span class=SpellE><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
  "Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
  minor-latin;mso-bidi-theme-font:minor-latin'>Sumber</span></b></span><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
  "Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
  minor-latin;mso-bidi-theme-font:minor-latin'> Data :<o:p></o:p></span></b></p>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=0
   style='border-collapse:collapse;mso-table-layout-alt:fixed;mso-yfti-tbllook:
   1056;mso-padding-alt:0in 0in 0in 0in'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:21.05pt'>
    <td width=28 style='width:21.0pt;border:solid black 1.0pt;background:#C6D9F1;
    padding:0in 0in 0in 0in;height:21.05pt'>
    <p class=MsoNormalCxSpFirst align=center style='margin-right:3.35pt;
    mso-add-space:auto;text-align:center;tab-stops:7.1pt;vertical-align:middle'><b
    style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'>No<o:p></o:p></span></b></p>
    </td>
    <td width=208 style='width:156.25pt;border:solid black 1.0pt;border-left:
    none;mso-border-left-alt:solid black 1.0pt;background:#C6D9F1;padding:.65pt .55pt 0in .55pt;
    height:21.05pt'>
    <p class=MsoNormalCxSpLast align=center style='margin-top:0in;margin-right:
    3.35pt;margin-bottom:0in;margin-left:7.1pt;margin-bottom:.0001pt;
    mso-add-space:auto;text-align:center;tab-stops:7.1pt;vertical-align:middle'><b
    style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'>Data<o:p></o:p></span></b></p>
    </td>
    <td width=90 style='width:67.5pt;border:solid black 1.0pt;border-left:none;
    mso-border-left-alt:solid black 1.0pt;background:#C6D9F1;padding:0in 0in 0in 0in;
    height:21.05pt'>
    <p class=MsoListParagraph align=center style='margin-left:4.0pt;mso-add-space:
    auto;text-align:center;vertical-align:bottom'><span class=SpellE><b
    style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Pemenuhan</span></b></span><b
    style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p></o:p></span></b></p>
    </td>
    <td width=48 style='width:.5in;border:solid black 1.0pt;border-left:none;
    mso-border-left-alt:solid black 1.0pt;background:#C6D9F1;padding:0in 0in 0in 0in;
    height:21.05pt'>
    <p class=MsoNormalCxSpFirst align=center style='margin-left:2.0pt;
    mso-add-space:auto;text-align:center;tab-stops:30.95pt;vertical-align:bottom'><b
    style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>No.<o:p></o:p></span></b></p>
    </td>
    <td width=132 style='width:99.0pt;border:solid black 1.0pt;border-left:
    none;mso-border-left-alt:solid black 1.0pt;background:#C6D9F1;padding:.65pt .55pt 0in .55pt;
    height:21.05pt'>
    <p class=MsoNormalCxSpLast align=center style='margin-right:3.35pt;
    mso-add-space:auto;text-align:center;vertical-align:middle'><b
    style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'>Data<o:p></o:p></span></b></p>
    </td>
    <td width=84 style='width:63.0pt;border:solid black 1.0pt;border-left:none;
    mso-border-left-alt:solid black 1.0pt;background:#C6D9F1;padding:0in 0in 0in 0in;
    height:21.05pt'>
    <p class=MsoListParagraph align=center style='margin-left:0in;mso-add-space:
    auto;text-align:center;vertical-align:bottom'><span class=SpellE><b
    style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Pemenuhan</span></b></span><b
    style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p></o:p></span></b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:1;height:21.05pt'>
    <td width=28 valign=top style='width:21.0pt;border:solid black 1.0pt;
    border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:21.05pt'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-right:3.35pt;
    mso-add-space:auto;text-align:center;tab-stops:7.1pt;vertical-align:middle'><span
    style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'>1.<o:p></o:p></span></p>
    </td>
    <td width=208 valign=top style='width:156.25pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:.65pt .55pt 0in .55pt;height:21.05pt'>
    <p class=MsoNormalCxSpMiddle style='margin-top:0in;margin-right:3.35pt;
    margin-bottom:0in;margin-left:7.1pt;margin-bottom:.0001pt;mso-add-space:
    auto;text-align:justify;tab-stops:7.1pt;vertical-align:middle'><span
    style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'>Nota Alert <span class=SpellE>dan</span>
    Review <span class=SpellE>Kolektibilitas</span></span><span
    style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p></o:p></span></p>
    </td>
    <td width=90 style='width:67.5pt;border-top:none;border-left:none;
    border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
    solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:21.05pt'>
    <p class=MsoNormalCxSpMiddle align=center style='text-align:center;
    tab-stops:7.9pt;vertical-align:bottom'><span style='font-size:10.0pt;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['NT_1']; ?><o:p></o:p></span></p>
    </td>
    <td width=48 valign=top style='width:.5in;border-top:none;border-left:none;
    border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
    solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:21.05pt'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-left:2.0pt;
    mso-add-space:auto;text-align:center;tab-stops:30.95pt;vertical-align:bottom'><span
    style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>4<o:p></o:p></span></p>
    </td>
    <td width=132 valign=top style='width:99.0pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:.65pt .55pt 0in .55pt;height:21.05pt'>
    <p class=MsoNormalCxSpMiddle style='margin-left:4.0pt;mso-add-space:auto;
    tab-stops:30.95pt;vertical-align:bottom'><span style='font-size:10.0pt;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Review
    Covenant<o:p></o:p></span></p>
    </td>
    <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:0in 0in 0in 0in;height:21.05pt'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-left:16.8pt;
    mso-add-space:auto;text-align:center;text-indent:-11.5pt;tab-stops:30.95pt;
    vertical-align:bottom'><span style='font-size:10.0pt;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin'><?php echo $row['NT_4']; ?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:2;height:.25in'>
    <td width=28 valign=top style='width:21.0pt;border:solid black 1.0pt;
    border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:.25in'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-right:3.35pt;
    mso-add-space:auto;text-align:center;tab-stops:7.1pt;vertical-align:middle'><span
    style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'>2.<o:p></o:p></span></p>
    </td>
    <td width=208 valign=top style='width:156.25pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:.65pt .55pt 0in .55pt;height:.25in'>
    <p class=MsoNormalCxSpMiddle style='margin-top:0in;margin-right:3.35pt;
    margin-bottom:0in;margin-left:7.1pt;margin-bottom:.0001pt;mso-add-space:
    auto;text-align:justify;tab-stops:7.1pt;vertical-align:middle'><span
    style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'>SS <span class=SpellE>Keuangan</span>
    3 <span class=SpellE>tahunterakhir</span><o:p></o:p></span></p>
    </td>
    <td width=90 style='width:67.5pt;border-top:none;border-left:none;
    border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
    solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:.25in'>
    <p class=MsoNormalCxSpMiddle align=center style='text-align:center;
    tab-stops:7.9pt;vertical-align:bottom'><span style='font-size:10.0pt;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['NT_2']; ?><o:p></o:p></span></p>
    </td>
    <td width=48 valign=top style='width:.5in;border-top:none;border-left:none;
    border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
    solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:.25in'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-left:2.0pt;
    mso-add-space:auto;text-align:center;tab-stops:30.95pt;vertical-align:bottom'><span
    style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>5<o:p></o:p></span></p>
    </td>
    <td width=132 valign=top style='width:99.0pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:.65pt .55pt 0in .55pt;height:.25in'>
    <p class=MsoNormalCxSpMiddle style='margin-left:4.0pt;mso-add-space:auto;
    tab-stops:30.95pt;vertical-align:bottom'><span style='font-size:10.0pt;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>IDEB OJK<span
    style='color:black;mso-font-kerning:12.0pt'><o:p></o:p></span></span></p>
    </td>
    <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:0in 0in 0in 0in;height:.25in'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-left:16.8pt;
    mso-add-space:auto;text-align:center;text-indent:-11.5pt;tab-stops:30.95pt;
    vertical-align:bottom'><span style='font-size:10.0pt;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin'><?php echo $row['NT_5']; ?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes;height:16.05pt'>
    <td width=28 valign=top style='width:21.0pt;border:solid black 1.0pt;
    border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:16.05pt'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-right:3.35pt;
    mso-add-space:auto;text-align:center;tab-stops:7.1pt;vertical-align:bottom'><span
    style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'>3.<o:p></o:p></span></p>
    </td>
    <td width=208 valign=top style='width:156.25pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:.65pt .55pt 0in .55pt;height:16.05pt'>
    <p class=MsoNormalCxSpMiddle style='margin-top:0in;margin-right:3.35pt;
    margin-bottom:0in;margin-left:7.1pt;margin-bottom:.0001pt;mso-add-space:
    auto;text-align:justify;tab-stops:7.1pt;vertical-align:bottom'><span
    class=SpellE><span style='font-size:10.0pt;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin;color:black;mso-font-kerning:12.0pt'>Laporan</span></span><span
    style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'> Review <span class=SpellE>Kolektibilitas</span>
    \ Financial Highlight</span><span style='font-size:10.0pt;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin'><o:p></o:p></span></p>
    </td>
    <td width=90 style='width:67.5pt;border-top:none;border-left:none;
    border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
    solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:16.05pt'>
    <p class=MsoNormalCxSpMiddle align=center style='text-align:center;
    tab-stops:7.9pt 16.8pt;vertical-align:bottom'><span style='font-size:10.0pt;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'><?php echo $row['NT_3']; ?><o:p></o:p></span></p>
    </td>
    <td width=48 valign=top style='width:.5in;border-top:none;border-left:none;
    border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
    solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:16.05pt'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-left:2.0pt;
    mso-add-space:auto;text-align:center;tab-stops:16.8pt 30.95pt;vertical-align:
    bottom'><span style='font-size:10.0pt;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin;color:black;mso-font-kerning:12.0pt'>6<o:p></o:p></span></p>
    </td>
    <td width=132 valign=top style='width:99.0pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:.65pt .55pt 0in .55pt;height:16.05pt'>
    <p class=MsoNormalCxSpMiddle style='margin-left:4.0pt;mso-add-space:auto;
    tab-stops:16.8pt 30.95pt;vertical-align:bottom'><span style='font-size:
    10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'>PG <span class=SpellE>dan</span> OCE<o:p></o:p></span></p>
    </td>
    <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:0in 0in 0in 0in;height:16.05pt'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-left:9.7pt;
    mso-add-space:auto;text-align:center;tab-stops:16.8pt 30.95pt;vertical-align:
    bottom'><span style='font-size:10.0pt;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin;color:black;mso-font-kerning:12.0pt'><?php echo $row['NT_6']; ?><o:p></o:p></span></p>
    </td>
   </tr>
  </table>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=32 valign=top style='width:23.85pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph align=center style='margin-left:0in;text-align:
  center'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
  minor-latin;mso-bidi-theme-font:minor-latin'>II.<o:p></o:p></span></b></p>
  </td>

  <td width=898 valign=top style='width:673.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin-left:0in;line-height:115%'><span
  class=SpellE><b style='mso-bidi-font-weight:normal'><span style='font-size:
  10.0pt;line-height:115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>InformasiUmum</span></b></span><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;line-height:
  115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'> :<o:p></o:p></span></b></p>
  <p class=MsoListParagraphCxSpMiddle style='margin-left:17.0pt;mso-add-space:
  auto;text-indent:-14.15pt;line-height:115%;mso-list:l0 level1 lfo4;
  tab-stops:132.8pt'><![if !supportLists]><span style='font-size:10.0pt;
  line-height:115%;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol'><span style='mso-list:Ignore'>·<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Total Limit / Bade<span style='mso-tab-count:1'></span>:<?php echo "Rp. " . number_format($row['LIMIT_LOG'],0,',','.') ?> / <?php echo "Rp. " . number_format($row['BADE_LOG'],0,',','.') ?><o:p></o:p></span></p>
  <p class=MsoListParagraphCxSpMiddle style='margin-left:17.0pt;mso-add-space:
  auto;text-indent:-14.15pt;line-height:115%;mso-list:l0 level1 lfo4;
  tab-stops:132.8pt'><![if !supportLists]><span style='font-size:10.0pt;
  line-height:115%;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol'><span style='mso-list:Ignore'>·<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Total limit / bade bank lain<span style='mso-tab-count:1'>    </span>:<?php echo $row['limit_ex_NA']; ?> / <?php echo $row['bade_bank_lain_NA']; ?><o:p></o:p></span></p>
  <p class=MsoListParagraphCxSpMiddle style='margin-left:17.0pt;mso-add-space:
  auto;text-indent:-14.15pt;line-height:115%;mso-list:l0 level1 lfo4;
  tab-stops:132.8pt'><![if !supportLists]><span style='font-size:10.0pt;
  line-height:115%;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol'><span style='mso-list:Ignore'>·<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  class=SpellE><span style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>FasilitasKredit</span></span><span style='font-size:10.0pt;
  line-height:115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><span
  style='mso-tab-count:1'></span>:<?php echo $row['JNS_KRD']; ?><o:p></o:p></span></p>
  <p class=MsoListParagraphCxSpMiddle style='margin-left:17.0pt;mso-add-space:
  auto;text-indent:-14.15pt;line-height:115%;mso-list:l0 level1 lfo4;
  tab-stops:132.8pt'><![if !supportLists]><span style='font-size:10.0pt;
  line-height:115%;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol'><span style='mso-list:Ignore'>·<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  class=SpellE><span style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Kolektibilitas</span></span><span style='font-size:10.0pt;
  line-height:115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><span
  style='mso-tab-count:1'></span>:<?php echo $row['KOL_LOG']; ?><o:p></o:p></span></p>
  <p class=MsoListParagraphCxSpMiddle style='margin-left:17.0pt;mso-add-space:
  auto;text-indent:-14.15pt;line-height:115%;mso-list:l0 level1 lfo4;
  tab-stops:132.8pt'><![if !supportLists]><span style='font-size:10.0pt;
  line-height:115%;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol'><span style='mso-list:Ignore'>·<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  class=SpellE><span style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Bidang</span></span><span style='font-size:10.0pt;line-height:
  115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'> Usaha<span
  style='mso-tab-count:1'></span>:<span
  class=SpellE><?php echo $row['BidangUsaha_NA']; ?></span><o:p></o:p></span></p>
  <p class=MsoListParagraphCxSpMiddle style='margin-left:17.0pt;mso-add-space:
  auto;text-indent:-14.15pt;line-height:115%;mso-list:l0 level1 lfo4;
  tab-stops:132.8pt'><![if !supportLists]><span style='font-size:10.0pt;
  line-height:115%;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol'><span style='mso-list:Ignore'>·<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Group Usaha<span style='mso-tab-count:1'></span>:<?php echo $row['gusaha_NA']; ?><o:p></o:p></span></p>
  <p class=MsoListParagraphCxSpMiddle style='margin-left:17.0pt;mso-add-space:
  auto;text-indent:-14.15pt;line-height:115%;mso-list:l0 level1 lfo4;
  tab-stops:132.8pt'><![if !supportLists]><span style='font-size:10.0pt;
  line-height:115%;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol'><span style='mso-list:Ignore'>·<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Rating<span style='mso-spacerun:yes'></span><span
  style='mso-tab-count:1'></span>:<?php echo $row['rating_NA']; ?><o:p></o:p></span></p>
  <p class=MsoListParagraphCxSpMiddle style='margin-left:17.0pt;mso-add-space:
  auto;text-indent:-14.15pt;line-height:115%;mso-list:l0 level1 lfo4;
  tab-stops:132.8pt'><![if !supportLists]><span style='font-size:10.0pt;
  line-height:115%;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol'><span style='mso-list:Ignore'>·<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  class=SpellE><span style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Industri</span></span><span style='font-size:10.0pt;line-height:
  115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'> Outlook<span
  style='mso-tab-count:1'></span>:<?php echo $row['ioutlook_NA']; ?><o:p></o:p></span></p>
  <p class=MsoListParagraphCxSpMiddle style='margin-left:17.0pt;mso-add-space:
  auto;text-indent:-14.15pt;line-height:115%;mso-list:l0 level1 lfo4;
  tab-stops:132.8pt'><![if !supportLists]><span style='font-size:10.0pt;
  line-height:115%;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol'><span style='mso-list:Ignore'>·<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Portfolio Guideline<span style='mso-tab-count:1'></span>:<?php echo $row['PG_NA']; ?><o:p></o:p></span></p>
  <p class=MsoListParagraphCxSpMiddle style='margin-left:17.0pt;mso-add-space:
  auto;text-indent:-14.15pt;line-height:115%;mso-list:l0 level1 lfo4;
  tab-stops:132.8pt'><![if !supportLists]><span style='font-size:10.0pt;
  line-height:115%;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol'><span style='mso-list:Ignore'>·<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Historical <span class=SpellE>Pembayaran</span><span
  style='mso-tab-count:1'></span>:<?php echo $row['HP_NA']; ?><o:p></o:p></span></p>
  <p class=MsoListParagraphCxSpLast style='margin-left:17.0pt;mso-add-space:
  auto;line-height:115%;tab-stops:132.8pt'><span style='font-size:10.0pt;
  line-height:115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  <td width=32 valign=top style='width:23.85pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph align=center style='margin-left:0in;text-align:
  center'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
  font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
  minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=610 valign=top style='width:457.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin-left:0in'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:10.0pt;font-family:"Calibri",sans-serif;
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:10.0pt;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
minor-latin'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;mso-add-space:auto;
text-indent:-13.5pt;line-height:106%;mso-list:l26 level1 lfo1'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span style='mso-bidi-font-size:10.0pt;
line-height:106%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>B.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span></b><![endif]><b
style='mso-bidi-font-weight:normal'><span style='mso-bidi-font-size:10.0pt;
line-height:106%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Nota <span
class=SpellE>Allert</span> BU :<o:p></o:p></span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=0
 style='width:694.15pt;margin-left:13.25pt;border-collapse:collapse;border:
 none;mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:
 0in 5.4pt 0in 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=231 valign=top style='width:173.5pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span class=SpellE><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
  background:aqua;mso-highlight:aqua'>Periode</span></b></span><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
  "Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
  minor-latin;mso-bidi-theme-font:minor-latin;background:aqua;mso-highlight:
  aqua'> :</span></b><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>
  <o:p></o:p></span></b></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['Periode']; ?><o:p></o:p></span></b></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=231 colspan=2 valign=top style='width:173.55pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span class=SpellE><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
  background:aqua;mso-highlight:aqua'>Usulan</span></b></span><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
  "Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
  minor-latin;mso-bidi-theme-font:minor-latin;background:aqua;mso-highlight:
  aqua'> <span class=SpellE>Kolektibilitas</span> :<o:p></o:p></span></b></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['UsulanKolektibilitas']; ?><span
  style='background:aqua;mso-highlight:aqua'><o:p></o:p></span></span></b></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
  background:lightgrey;mso-highlight:lightgrey'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=231 colspan=2 valign=top style='width:173.55pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span class=SpellE><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
  background:aqua;mso-highlight:aqua'>Usulan</span></b></span><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
  "Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
  minor-latin;mso-bidi-theme-font:minor-latin;background:aqua;mso-highlight:
  aqua'> <span class=SpellE>Watchlist</span> :<o:p></o:p></span></b></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['UsulanWatchlist']; ?><span
  style='background:lightgrey;mso-highlight:lightgrey'><o:p></o:p></span></span></b></p>
  </td>
  <td width=231 valign=top style='width:173.55pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
  background:aqua;mso-highlight:aqua'>Account Strategy :</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
  "Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
  minor-latin;mso-bidi-theme-font:minor-latin'><o:p></o:p></span></b></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['AccountStrategy']; ?><o:p></o:p></span></b></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes'>
  <td width=308 colspan=2 valign=top style='width:231.35pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span class=SpellE><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
  background:aqua;mso-highlight:aqua'>Catatan</span></b></span><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
  "Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
  minor-latin;mso-bidi-theme-font:minor-latin;background:aqua;mso-highlight:
  aqua'> Up BU :</span></b><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p></o:p></span></b></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['CatatanUpBU']; ?><o:p></o:p></span></b></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=309 colspan=2 valign=top style='width:231.4pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span class=SpellE><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
  background:aqua;mso-highlight:aqua'>TindakLanjut</span></b></span><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
  "Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
  minor-latin;mso-bidi-theme-font:minor-latin;background:aqua;mso-highlight:
  aqua'> :</span></b><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p></o:p></span></b></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['TindakLanjut']; ?><o:p></o:p></span></b></p>
  </td>
  <td width=309 colspan=2 valign=top style='width:231.4pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
  background:aqua;mso-highlight:aqua'>Time line :</span></b><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
  "Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
  minor-latin;mso-bidi-theme-font:minor-latin'><o:p></o:p></span></b></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['Time_line']; ?><o:p></o:p></span></b></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></b></p>
  <p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=231 style='border:none'></td>
  <td width=77 style='border:none'></td>
  <td width=154 style='border:none'></td>
  <td width=154 style='border:none'></td>
  <td width=77 style='border:none'></td>
  <td width=231 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<!-- CUT -->

<p class=MsoNormal style='margin-left:22.5pt'><span style='font-size:10.0pt;
font-family:"Calibri","sans-serif";mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;mso-add-space:auto;
text-indent:-13.5pt;line-height:105%;mso-list:l3 level1 lfo2'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span style='mso-bidi-font-size:10.0pt;
line-height:105%;font-family:"Calibri","sans-serif";mso-ascii-theme-font:minor-latin;
mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>C.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span></b><![endif]><b
style='mso-bidi-font-weight:normal'><span style='mso-bidi-font-size:10.0pt;
line-height:105%;font-family:"Calibri","sans-serif";mso-ascii-theme-font:minor-latin;
mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Review (<span
class=SpellE>KinerjaKeuangan</span> 3 <span class=SpellE>periode</span>)<o:p></o:p></span></b></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=642
 style='width:481.5pt;margin-left:9.9pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:160;mso-padding-alt:
 0in 5.4pt 0in 5.4pt;mso-border-insideh:.5pt solid windowtext;mso-border-insidev:
 .5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:3.2pt'>
  <td width=95 rowspan=10 style='width:70.95pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#538ED5;padding:0in 5.4pt 0in 5.4pt;
  height:3.2pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><b><span
  lang=IN style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;color:white;mso-ansi-language:IN;mso-fareast-language:IN'>Kinerja
  keuangan<o:p></o:p></span></b></p>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><b><span
  lang=IN style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;color:white;mso-ansi-language:IN;mso-fareast-language:IN'>(<span
  style='mso-no-proof:yes'>IDRJuta</span>)</span></b><b><span style='font-size:
  10.0pt;line-height:115%;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
  color:white;mso-fareast-language:IN'><o:p></o:p></span></b></p>
  </td>
  <td width=132 style='width:99.3pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#538ED5;padding:0in 5.4pt 0in 5.4pt;height:3.2pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><b><span
  lang=IN style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;color:white;mso-ansi-language:IN;mso-fareast-language:IN'>Periode
  LK<o:p></o:p></span></b></p>
  </td>
  <td width=133 valign=top style='width:99.75pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;
  height:3.2pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['LK_1']; ?><o:p></o:p></span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;
  height:3.2pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['LK_2']; ?><o:p></o:p></span></p>
  </td>
  <td width=144 valign=top style='width:1.5in;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;
  height:3.2pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['LK_3']; ?><span
  style='mso-no-proof:yes'><o:p></o:p></span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:1.0pt'>
  <td width=132 valign=top style='width:99.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#538ED5;padding:0in 5.4pt 0in 5.4pt;
  height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><b><span
  lang=IN style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;color:white;mso-ansi-language:IN;mso-fareast-language:IN'>Sales<o:p></o:p></span></b></p>
  </td>
  <td width=133 valign=top style='width:99.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['Sales1']; ?><span
  style='mso-no-proof:yes'><o:p></o:p></span></span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['Sales2']; ?><span
  style='mso-no-proof:yes'><o:p></o:p></span></span></p>
  </td>
  <td width=144 valign=top style='width:1.5in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['Sales3']; ?></span><span
  lang=EN-ID style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-ansi-language:EN-ID;mso-fareast-language:IN;mso-bidi-font-weight:
  bold;mso-no-proof:yes'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:1.0pt'>
  <td width=132 valign=top style='width:99.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#538ED5;padding:0in 5.4pt 0in 5.4pt;
  height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><b><span
  lang=IN style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;color:white;mso-ansi-language:IN;mso-fareast-language:IN'>EBITDA<o:p></o:p></span></b></p>
  </td>
  <td width=133 valign=top style='width:99.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['EBITDAI1']; ?><span
  style='mso-no-proof:yes'><o:p></o:p></span></span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['EBITDA2']; ?><span
  style='mso-no-proof:yes'><o:p></o:p></span></span></p>
  </td>
  <td width=144 valign=top style='width:1.5in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['EBITDA3']; ?></span><span
  lang=EN-ID style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-ansi-language:EN-ID;mso-fareast-language:IN;mso-bidi-font-weight:
  bold;mso-no-proof:yes'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:1.0pt'>
  <td width=132 valign=top style='width:99.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#538ED5;padding:0in 5.4pt 0in 5.4pt;
  height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><b><span
  lang=IN style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;color:white;mso-ansi-language:IN;mso-fareast-language:IN'>NPM<o:p></o:p></span></b></p>
  </td>
  <td width=133 valign=top style='width:99.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['NPM1']; ?><span
  style='mso-no-proof:yes'><o:p></o:p></span></span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['NPM2']; ?><span
  style='mso-no-proof:yes'><o:p></o:p></span></span></p>
  </td>
  <td width=144 valign=top style='width:1.5in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['NPM3']; ?></span><span
  lang=EN-ID style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-ansi-language:EN-ID;mso-fareast-language:IN;mso-bidi-font-weight:
  bold;mso-no-proof:yes'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:1.0pt'>
  <td width=132 valign=top style='width:99.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#538ED5;padding:0in 5.4pt 0in 5.4pt;
  height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><b><span
  lang=IN style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;color:white;mso-ansi-language:IN;mso-fareast-language:IN'>CR<o:p></o:p></span></b></p>
  </td>
  <td width=133 valign=top style='width:99.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['CR1']; ?><span
  style='mso-no-proof:yes'><o:p></o:p></span></span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['CR2']; ?><span
  style='mso-no-proof:yes'><o:p></o:p></span></span></p>
  </td>
  <td width=144 valign=top style='width:1.5in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['CR3']; ?></span><span
  lang=EN-ID style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-ansi-language:EN-ID;mso-fareast-language:IN;mso-bidi-font-weight:
  bold;mso-no-proof:yes'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:1.0pt'>
  <td width=132 valign=top style='width:99.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#538ED5;padding:0in 5.4pt 0in 5.4pt;
  height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><b><span
  lang=IN style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;color:white;mso-ansi-language:IN;mso-fareast-language:IN'>Leverage<o:p></o:p></span></b></p>
  </td>
  <td width=133 valign=top style='width:99.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['Leverage1']; ?><span
  style='mso-no-proof:yes'><o:p></o:p></span></span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['Leverage2']; ?><span
  style='mso-no-proof:yes'><o:p></o:p></span></span></p>
  </td>
  <td width=144 valign=top style='width:1.5in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['Leverage3']; ?></span><span
  lang=EN-ID style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-ansi-language:EN-ID;mso-fareast-language:IN;mso-bidi-font-weight:
  bold;mso-no-proof:yes'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:1.0pt'>
  <td width=132 valign=top style='width:99.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#538ED5;padding:0in 5.4pt 0in 5.4pt;
  height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><b><span
  lang=IN style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;color:white;mso-ansi-language:IN;mso-fareast-language:IN'>EBITDA/I<o:p></o:p></span></b></p>
  </td>
  <td width=133 valign=top style='width:99.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['EBITDAI1']; ?><span
  style='mso-no-proof:yes'><o:p></o:p></span></span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['EBITDAI2']; ?><span
  style='mso-no-proof:yes'><o:p></o:p></span></span></p>
  </td>
  <td width=144 valign=top style='width:1.5in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['EBITDAI3']; ?></span><span
  lang=EN-ID style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-ansi-language:EN-ID;mso-fareast-language:IN;mso-bidi-font-weight:
  bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:1.0pt'>
  <td width=132 valign=top style='width:99.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#538ED5;padding:0in 5.4pt 0in 5.4pt;
  height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><b><span
  lang=IN style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;color:white;mso-ansi-language:IN;mso-fareast-language:IN'>DSCR<o:p></o:p></span></b></p>
  </td>
  <td width=133 valign=top style='width:99.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['DSCR1']; ?><span
  style='mso-no-proof:yes'><o:p></o:p></span></span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['DSCR2']; ?><span
  style='mso-no-proof:yes'><o:p></o:p></span></span></p>
  </td>
  <td width=144 valign=top style='width:1.5in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['DSCR3']; ?></span><span
  lang=EN-ID style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-ansi-language:EN-ID;mso-fareast-language:IN;mso-bidi-font-weight:
  bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:1.0pt'>
  <td width=132 valign=top style='width:99.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#538ED5;padding:0in 5.4pt 0in 5.4pt;
  height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><b><span
  lang=IN style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;color:white;mso-ansi-language:IN;mso-fareast-language:IN'>Debt/EBITDA<o:p></o:p></span></b></p>
  </td>
  <td width=133 valign=top style='width:99.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['Debt1']; ?><span
  style='mso-no-proof:yes'><o:p></o:p></span></span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['Debt2']; ?><span
  style='mso-no-proof:yes'><o:p></o:p></span></span></p>
  </td>
  <td width=144 valign=top style='width:1.5in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['Debt3']; ?></span><span
  lang=EN-ID style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-ansi-language:EN-ID;mso-fareast-language:IN;mso-bidi-font-weight:
  bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;mso-yfti-lastrow:yes;height:1.0pt'>
  <td width=132 valign=top style='width:99.3pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;background:#538ED5;padding:0in 5.4pt 0in 5.4pt;
  height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><b><span
  lang=EN-ID style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;color:white;mso-ansi-language:EN-ID;mso-fareast-language:IN'>CF
  From Operating<o:p></o:p></span></b></p>
  </td>
  <td width=133 valign=top style='width:99.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['CF_1']; ?><span
  style='mso-no-proof:yes'><o:p></o:p></span></span></p>
  </td>
  <td width=138 valign=top style='width:103.5pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['CF_2']; ?><span
  style='mso-no-proof:yes'><o:p></o:p></span></span></p>
  </td>
  <td width=144 valign=top style='width:1.5in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:1.0pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-fareast-language:IN;mso-bidi-font-weight:bold'><?php echo $row['CF_3']; ?></span><span
  lang=EN-ID style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;mso-ansi-language:EN-ID;mso-fareast-language:IN;mso-bidi-font-weight:
  bold'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-left:7.1pt'><b style='mso-bidi-font-weight:
normal'><span style='font-size:10.0pt;font-family:"Calibri","sans-serif";
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
minor-latin'><o:p>&nbsp;</o:p></span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=680
 style='width:510.3pt;margin-left:12.5pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:
 0in 5.4pt 0in 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=110 style='width:82.65pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;background:#C6D9F1;mso-background-themecolor:text2;
  mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Concern
  <span class=SpellE>PenilaianTigaPilar</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>(Root
  Cause)<o:p></o:p></span></p>
  </td>
  <td width=570 valign=top style='width:427.65pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'><o:p>&nbsp;</o:p></span></p>
  <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=279
   style='width:209.1pt;border-collapse:collapse;border:none;mso-border-alt:
   solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:17.5pt'>
    <td width=139 nowrap style='width:104.55pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;background:#C6D9F1;mso-background-themecolor:
    text2;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt;height:17.5pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
    class=SpellE><span style='font-size:10.0pt;font-family:"Calibri","sans-serif";
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin;mso-bidi-font-weight:bold'>Kemampuan</span></span><span
    style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    mso-bidi-font-weight:bold'> <span class=SpellE>Membayar</span><o:p></o:p></span></p>
    </td>
    <td width=139 style='width:104.55pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:17.5pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
    style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    mso-bidi-font-weight:bold'><?php echo $row['KemampuanMembayar']; ?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:1;height:17.5pt'>
    <td width=139 nowrap style='width:104.55pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;background:#C6D9F1;mso-background-themecolor:text2;
    mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt;height:17.5pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
    class=SpellE><span style='font-size:10.0pt;font-family:"Calibri","sans-serif";
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin;mso-bidi-font-weight:bold'>Kinerja</span></span><span
    style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    mso-bidi-font-weight:bold'> Usaha<o:p></o:p></span></p>
    </td>
    <td width=139 style='width:104.55pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:17.5pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
    style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    mso-bidi-font-weight:bold'><?php echo $row['KinerjaUsaha']; ?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes;height:30.0pt'>
    <td width=139 nowrap style='width:104.55pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;background:#C6D9F1;mso-background-themecolor:text2;
    mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt;height:30.0pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
    class=SpellE><span style='font-size:10.0pt;font-family:"Calibri","sans-serif";
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin;mso-bidi-font-weight:bold'>Prospek</span></span><span
    style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    mso-bidi-font-weight:bold'> Usaha<o:p></o:p></span></p>
    </td>
    <td width=139 style='width:104.55pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;
    height:30.0pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
    style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    mso-bidi-font-weight:bold'><?php echo $row['ProspekUsaha']; ?><o:p></o:p></span></p>
    </td>
   </tr>
  </table>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;color:white;mso-themecolor:background1'>f<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=110 style='width:82.65pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#C6D9F1;mso-background-themecolor:text2;mso-background-themetint:
  51;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Parameter
  <span class=SpellE>Watchlist</span><o:p></o:p></span></p>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=570 valign=top style='width:427.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-left:2.1pt;text-align:justify'><span
  style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['ParameterWatchlist']; ?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=110 style='width:82.65pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#C6D9F1;mso-background-themecolor:text2;mso-background-themetint:
  51;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Covenant&amp;
  Up BU<o:p></o:p></span></p>
  </td>
  <td width=570 valign=top style='width:427.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'><o:p>&nbsp;</o:p></span></p>
  <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
   style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
   mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;background:#C6D9F1;mso-background-themecolor:
    text2;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
    class=SpellE><span style='font-size:10.0pt;font-family:"Calibri","sans-serif";
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin'>Hasil</span></span><span style='font-size:
    10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'> Review<o:p></o:p></span></p>
    </td>
    <td width=258 valign=top style='width:193.5pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;background:#C6D9F1;mso-background-themecolor:text2;
    mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
    class=SpellE><span style='font-size:10.0pt;font-family:"Calibri","sans-serif";
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin'>TindakLanjut</span></span><span
    style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p></o:p></span></p>
    </td>
    <td width=126 valign=top style='width:94.5pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;background:#C6D9F1;mso-background-themecolor:text2;
    mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
    style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Timeline<o:p></o:p></span></p>
    </td>
    <td width=114 valign=top style='width:85.5pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;background:#C6D9F1;mso-background-themecolor:text2;
    mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
    style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Status<o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
    style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['c_HasilReview']; ?>a<o:p></o:p></span></p>
    </td>
    <td width=258 valign=top style='width:193.5pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
    style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['c_TindakLanjut']; ?><o:p></o:p></span></p>
    </td>
    <td width=126 valign=top style='width:94.5pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
    style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['c_Timeline']; ?><o:p></o:p></span></p>
    </td>
    <td width=114 valign=top style='width:85.5pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
    style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['c_Status']; ?><o:p></o:p></span></p>
    </td>
   </tr>
  </table>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;color:white;mso-themecolor:background1'>f<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width=110 style='width:82.65pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#C6D9F1;mso-background-themecolor:text2;mso-background-themetint:
  51;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Action
  Plan&amp; Progress<o:p></o:p></span></p>
  </td>
  <td width=570 valign=top style='width:427.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span class=SpellE><span style='font-size:10.0pt;
  font-family:"Calibri","sans-serif";mso-ascii-theme-font:minor-latin;
  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Diisi</span></span><span
  style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>
  action plan <span class=SpellE>periodesebelumnya</span><o:p></o:p></span></p>
  <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
   style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
   mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    mso-border-alt:solid windowtext .5pt;background:#C6D9F1;mso-background-themecolor:
    text2;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
    class=SpellE><span style='font-size:10.0pt;font-family:"Calibri","sans-serif";
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin'>Hasil</span></span><span style='font-size:
    10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'> Review<o:p></o:p></span></p>
    </td>
    <td width=258 valign=top style='width:193.5pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;background:#C6D9F1;mso-background-themecolor:text2;
    mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
    class=SpellE><span style='font-size:10.0pt;font-family:"Calibri","sans-serif";
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin'>TindakLanjut</span></span><span
    style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p></o:p></span></p>
    </td>
    <td width=126 valign=top style='width:94.5pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;background:#C6D9F1;mso-background-themecolor:text2;
    mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
    style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Timeline<o:p></o:p></span></p>
    </td>
    <td width=114 valign=top style='width:85.5pt;border:solid windowtext 1.0pt;
    border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;background:#C6D9F1;mso-background-themecolor:text2;
    mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
    style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Status<o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes'>
    <td width=309 valign=top style='width:231.5pt;border:solid windowtext 1.0pt;
    border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
    solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='margin-left:15.6pt;text-align:center'><span
    style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['ap_HasilReview']; ?><o:p></o:p></span></p>
    </td>
    <td width=258 valign=top style='width:193.5pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
    style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['ap_TindakLanjut']; ?><o:p></o:p></span></p>
    </td>
    <td width=126 valign=top style='width:94.5pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
    style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['ap_Timeline']; ?>a<o:p></o:p></span></p>
    </td>
    <td width=114 valign=top style='width:85.5pt;border-top:none;border-left:
    none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
    mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='text-align:center'><span
    style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['ap_Status']; ?><o:p></o:p></span></p>
    </td>
   </tr>
  </table>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin;color:white;mso-themecolor:background1'>F</span><span
  style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes'>
  <td width=110 style='width:82.65pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#C6D9F1;mso-background-themecolor:text2;mso-background-themetint:
  51;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span class=SpellE><span
  style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Informasi</span></span><span
  style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>
  3 <span class=SpellE>bulanterakhir</span><o:p></o:p></span></p>
  </td>
  <td width=570 valign=top style='width:427.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'><?php echo $row['IBA']; ?><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal align=center style='margin-left:22.5pt;text-align:center'><span
style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-left:22.5pt;mso-add-space:auto;
text-indent:-13.5pt;line-height:105%;mso-list:l3 level1 lfo2'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span style='mso-bidi-font-size:10.0pt;
line-height:105%;font-family:"Calibri","sans-serif";mso-ascii-theme-font:minor-latin;
mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>D.<span
style='font:7.0pt "Times New Roman"'>&nbsp; </span></span></span></b><![endif]><span
class=SpellE><b style='mso-bidi-font-weight:normal'><span style='mso-bidi-font-size:
10.0pt;line-height:105%;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Kesimpulan</span></b></span><b
style='mso-bidi-font-weight:normal'><span style='mso-bidi-font-size:10.0pt;
line-height:105%;font-family:"Calibri","sans-serif";mso-ascii-theme-font:minor-latin;
mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p></o:p></span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=700
 style='width:494.9pt;margin-left:12.5pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:
 0in 5.4pt 0in 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=30 valign=top style='width:22.55pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#C6D9F1;mso-background-themecolor:
  text2;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>No<o:p></o:p></span></p>
  </td>
  <td width=153 valign=top style='width:115.05pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#C6D9F1;mso-background-themecolor:text2;
  mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span class=SpellE><span
  style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Usulan</span></span><span
  style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p></o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.5pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#C6D9F1;mso-background-themecolor:text2;
  mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=725 valign=top style='width:543.8pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#C6D9F1;mso-background-themecolor:text2;
  mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span class=SpellE><span
  style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Keterangan</span></span><span
  style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=30 valign=top style='width:22.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>1<o:p></o:p></span></p>
  </td>
  <td width=153 valign=top style='width:115.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span class=SpellE><span style='font-size:10.0pt;
  font-family:"Calibri","sans-serif";mso-ascii-theme-font:minor-latin;
  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Estimasi</span></span><span
  style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>
  <span class=SpellE>Kolektibilitas</span><o:p></o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=725 valign=top style='width:543.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'><?php echo $row['EK']; ?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=30 valign=top style='width:22.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>2<o:p></o:p></span></p>
  </td>
  <td width=153 valign=top style='width:115.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Account Strategy<o:p></o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>:</span><span style='font-size:11.0pt'><o:p></o:p></span></p>
  </td>
  <td width=725 valign=top style='width:543.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'><?php echo $row['nt_AccountStrategy']; ?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;mso-yfti-lastrow:yes'>
  <td width=30 valign=top style='width:22.55pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>3<o:p></o:p></span></p>
  </td>
  <td width=153 valign=top style='width:115.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span class=SpellE><span style='font-size:10.0pt;
  font-family:"Calibri","sans-serif";mso-ascii-theme-font:minor-latin;
  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Watchlist</span></span><span
  style='font-size:10.0pt;font-family:"Calibri","sans-serif";mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p></o:p></span></p>
  </td>
  <td width=18 valign=top style='width:13.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>:</span><span style='font-size:11.0pt'><o:p></o:p></span></p>
  </td>
  <td width=725 valign=top style='width:543.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'><?php echo $row['WT']; ?><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-left:22.5pt'><span style='font-size:10.0pt;
font-family:"Calibri","sans-serif";mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-left:22.5pt'><span style='font-size:10.0pt;
font-family:"Calibri","sans-serif";mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpFirst style='margin-left:22.5pt;mso-add-space:
auto;text-indent:-13.5pt;line-height:105%;mso-list:l3 level1 lfo2'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span style='mso-bidi-font-size:10.0pt;
line-height:105%;font-family:"Calibri","sans-serif";mso-ascii-theme-font:minor-latin;
mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>E.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span></b><![endif]><b
style='mso-bidi-font-weight:normal'><span style='mso-bidi-font-size:10.0pt;
line-height:105%;font-family:"Calibri","sans-serif";mso-ascii-theme-font:minor-latin;
mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Dashboard<o:p></o:p></span></b></p>

<p class=MsoListParagraph style='margin-left:27.0pt;text-indent:-.25in;
mso-list:l1 level4 lfo8;tab-stops:list 2.0in'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
"Calibri","sans-serif";mso-ascii-theme-font:minor-latin;mso-fareast-font-family:
Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></b><![endif]><b
style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
"Calibri","sans-serif";mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-bidi-theme-font:minor-latin'>Parameter <span class=SpellE>Hasil</span>
<span style='color:#E36C0A;mso-themecolor:accent6;mso-themeshade:191'>Review <span
class=SpellE>Kualitas</span> <span class=SpellE>Kredit</span> </span>yang <span
class=SpellE>terdampak</span> :<o:p></o:p></span></b></p>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=700
 style='width:494.0pt;margin-left:8.75pt;border-collapse:collapse;mso-yfti-tbllook:
 1184;mso-padding-alt:0in 0in 0in 0in'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:16.75pt'>
  <td width=231 style='width:173.5pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;background:#C6D9F1;mso-background-themecolor:text2;
  mso-background-themetint:51;padding:.75pt .75pt 0in .75pt;height:16.75pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  class=SpellE><span style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Penilaian</span></span><span style='font-size:10.0pt;line-height:
  115%;font-family:"Calibri","sans-serif";mso-ascii-theme-font:minor-latin;
  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'> <span
  class=SpellE>Tiga</span> <span class=SpellE>Pilar</span><o:p></o:p></span></p>
  </td>
  <td width=231 style='width:173.5pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#C6D9F1;mso-background-themecolor:text2;mso-background-themetint:
  51;padding:.75pt .75pt 0in .75pt;height:16.75pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Parameter <span class=SpellE>Watchlist</span><o:p></o:p></span></p>
  </td>
  <td width=231 style='width:173.5pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#C6D9F1;mso-background-themecolor:text2;mso-background-themetint:
  51;padding:.75pt .75pt 0in .75pt;height:16.75pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Covenant &amp; Up BU<o:p></o:p></span></p>
  </td>
  <td width=231 style='width:173.5pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#C6D9F1;mso-background-themecolor:text2;mso-background-themetint:
  51;padding:.75pt .75pt 0in .75pt;height:16.75pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  class=SpellE><span style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Tindak</span></span><span style='font-size:10.0pt;line-height:
  115%;font-family:"Calibri","sans-serif";mso-ascii-theme-font:minor-latin;
  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'> <span
  class=SpellE>Lanjut</span>&amp; Progress<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;height:24.9pt'>
  <td width=231 style='width:173.5pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  mso-border-right-alt:solid windowtext .5pt;background:white;padding:.75pt .75pt 0in .75pt;
  height:24.9pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Hasil14</span><span style='font-size:10.0pt;mso-bidi-font-size:
  12.0pt;line-height:115%;font-family:"Calibri","sans-serif";color:black'><o:p></o:p></span></p>
  </td>
  <td width=231 style='width:173.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:.75pt .75pt 0in .75pt;height:24.9pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Hasil5</span><span style='font-size:10.0pt;mso-bidi-font-size:
  12.0pt;line-height:115%;font-family:"Calibri","sans-serif";color:black'><o:p></o:p></span></p>
  </td>
  <td width=231 style='width:173.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:.75pt .75pt 0in .75pt;height:24.9pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Hasil6</span><span style='font-size:10.0pt;mso-bidi-font-size:
  12.0pt;line-height:115%;font-family:"Calibri","sans-serif";color:black'><o:p></o:p></span></p>
  </td>
  <td width=231 style='width:173.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  background:white;padding:.75pt .75pt 0in .75pt;height:24.9pt'>
  <p class=MsoNormal align=center style='text-align:center;line-height:115%'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri","sans-serif";
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Hasil17</span><span style='font-size:10.0pt;mso-bidi-font-size:
  12.0pt;line-height:115%;font-family:"Calibri","sans-serif";color:black'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal style='margin-left:22.5pt'><span style='font-size:10.0pt;
font-family:"Calibri","sans-serif";mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></p>

<div align=center>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-yfti-tbllook:1184;mso-padding-alt:
 0in 5.4pt 0in 5.4pt;mso-border-insideh:none;mso-border-insidev:none'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:148.0pt'>
  <td width=213 valign=bottom style='width:159.6pt;padding:0in 5.4pt 0in 5.4pt;
  height:148.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:11.0pt'><o:p></o:p></span></p>
  </td>
  <td width=213 valign=bottom style='width:159.6pt;padding:0in 5.4pt 0in 5.4pt;
  height:148.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:11.0pt'><o:p></o:p></span></p>
  </td>
  <td width=213 valign=bottom style='width:159.6pt;padding:0in 5.4pt 0in 5.4pt;
  height:148.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:11.0pt'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes'>
  <td width=213 valign=top style='width:159.6pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt'>Group Head<o:p></o:p></span></b></p>
  </td>
  <td width=213 valign=top style='width:159.6pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt'>Department
  Head<o:p></o:p></span></b></p>
  </td>
  <td width=213 valign=top style='width:159.6pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:11.0pt'>Senior
  Credit Risk Reviewer Manager<o:p></o:p></span></b></p>
  </td>
 </tr>
</table>

</div>

<p class=MsoNormal style='margin-left:22.5pt'><span style='font-size:10.0pt;
font-family:"Calibri","sans-serif";mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></p>

</div>

</body>
<?php
  }
} 
mysqli_close($con);
?>
</html>
