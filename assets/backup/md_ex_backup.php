<?php 
$datenow = date('Y-m-d');
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=Word_Page_Result_Review_$datenow.doc");

include "include/restrict.php";
include "include/connection.php";
include 'include/head.php';

$log_id   = $_GET['id'];
?>

<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=unicode">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 15">
<meta name=Originator content="Microsoft Word 15">
<link rel=File-List href="Word.php_files/filelist.xml">
<link rel=Edit-Time-Data href="Word.php_files/editdata.mso">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>Muhammad Amran</o:Author>
  <o:Template>Normal</o:Template>
  <o:LastAuthor>Muhammad Amran</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>21</o:TotalTime>
  <o:Created>2019-04-23T15:23:00Z</o:Created>
  <o:LastSaved>2019-04-23T15:23:00Z</o:LastSaved>
  <o:Pages>4</o:Pages>
  <o:Words>217</o:Words>
  <o:Characters>1240</o:Characters>
  <o:Lines>10</o:Lines>
  <o:Paragraphs>2</o:Paragraphs>
  <o:CharactersWithSpaces>1455</o:CharactersWithSpaces>
  <o:Version>15.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=themeData href="Word.php_files/themedata.thmx">
<link rel=colorSchemeMapping href="Word.php_files/colorschememapping.xml">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:View>Print</w:View>
  <w:SpellingState>Clean</w:SpellingState>
  <w:GrammarState>Clean</w:GrammarState>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
  <w:PunctuationKerning/>
  <w:DrawingGridHorizontalSpacing>5,5 pt</w:DrawingGridHorizontalSpacing>
  <w:DisplayHorizontalDrawingGridEvery>2</w:DisplayHorizontalDrawingGridEvery>
  <w:DisplayVerticalDrawingGridEvery>2</w:DisplayVerticalDrawingGridEvery>
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
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
   <w:EnableOpenTypeKerning/>
   <w:DontFlipMirrorIndents/>
   <w:OverrideTableStyleHps/>
  </w:Compatibility>
  <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac m:val="off"/>
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
  <w:LsdException Locked="false" Priority="39" Name="Table Grid"/>
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
  <w:LsdException Locked="false" Priority="34" QFormat="true"
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
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536869121 1107305727 33554432 0 415 0;}
@font-face
	{font-family:"Arial Unicode MS";
	panose-1:2 11 6 4 2 2 2 2 2 4;
	mso-font-charset:128;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-134238209 -371195905 63 0 4129279 0;}
@font-face
	{font-family:"Calibri Light";
	panose-1:2 15 3 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-536859905 -1073732485 9 0 511 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-536859905 -1073732485 9 0 511 0;}
@font-face
	{font-family:"\@Arial Unicode MS";
	panose-1:2 11 6 4 2 2 2 2 2 4;
	mso-font-charset:128;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-134238209 -371195905 63 0 4129279 0;}
@font-face
	{font-family:Consolas;
	panose-1:2 11 6 9 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:modern;
	mso-font-pitch:fixed;
	mso-font-signature:-536869121 64767 1 0 415 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:0cm;
	line-height:105%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
h4
	{mso-style-noshow:yes;
	mso-style-priority:9;
	mso-style-qformat:yes;
	mso-style-link:"Heading 4 Char";
	mso-margin-top-alt:auto;
	margin-right:0cm;
	mso-margin-bottom-alt:auto;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	mso-outline-level:4;
	font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-fareast-font-family:"Times New Roman";}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-priority:99;
	mso-style-link:"Header Char";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 234.0pt right 468.0pt;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-priority:99;
	mso-style-link:"Footer Char";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	tab-stops:center 234.0pt right 468.0pt;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
span.Heading4Char
	{mso-style-name:"Heading 4 Char";
	mso-style-noshow:yes;
	mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Heading 4";
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Times New Roman",serif;
	mso-ascii-font-family:"Times New Roman";
	mso-fareast-font-family:"Times New Roman";
	mso-hansi-font-family:"Times New Roman";
	mso-bidi-font-family:"Times New Roman";
	font-weight:bold;}
span.HeaderChar
	{mso-style-name:"Header Char";
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:Header;}
span.FooterChar
	{mso-style-name:"Footer Char";
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:Footer;}
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-size:10.0pt;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Calibri;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
 /* Page Definitions */
 @page
	{mso-footnote-separator:url("Word.php_files/header.htm") fs;
	mso-footnote-continuation-separator:url("Word.php_files/header.htm") fcs;
	mso-endnote-separator:url("Word.php_files/header.htm") es;
	mso-endnote-continuation-separator:url("Word.php_files/header.htm") ecs;}
@page WordSection1
	{size:595.3pt 841.9pt;
	margin:72.0pt 72.0pt 72.0pt 72.0pt;
	mso-header-margin:35.45pt;
	mso-footer-margin:35.45pt;
	mso-even-header:url("Word.php_files/header.htm") eh1;
	mso-header:url("Word.php_files/header.htm") h1;
	mso-even-footer:url("Word.php_files/header.htm") ef1;
	mso-footer:url("Word.php_files/header.htm") f1;
	mso-first-header:url("Word.php_files/header.htm") fh1;
	mso-first-footer:url("Word.php_files/header.htm") ff1;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
@page WordSection2
	{size:595.3pt 841.9pt;
	margin:72.0pt 72.0pt 72.0pt 72.0pt;
	mso-header-margin:35.45pt;
	mso-footer-margin:35.45pt;
	mso-even-header:url("Word.php_files/header.htm") eh1;
	mso-header:url("Word.php_files/header.htm") h1;
	mso-even-footer:url("Word.php_files/header.htm") ef1;
	mso-footer:url("Word.php_files/header.htm") f1;
	mso-first-header:url("Word.php_files/header.htm") fh1;
	mso-first-footer:url("Word.php_files/header.htm") ff1;
	mso-paper-source:0;}
div.WordSection2
	{page:WordSection2;}
@page WordSection3
	{size:595.3pt 841.9pt;
	margin:72.0pt 72.0pt 72.0pt 72.0pt;
	mso-header-margin:35.45pt;
	mso-footer-margin:35.45pt;
	mso-even-header:url("Word.php_files/header.htm") eh1;
	mso-header:url("Word.php_files/header.htm") h1;
	mso-even-footer:url("Word.php_files/header.htm") ef1;
	mso-footer:url("Word.php_files/header.htm") f1;
	mso-first-header:url("Word.php_files/header.htm") fh1;
	mso-first-footer:url("Word.php_files/header.htm") ff1;
	mso-paper-source:0;}
div.WordSection3
	{page:WordSection3;}
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
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
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
	mso-style-priority:39;
	mso-style-unhide:no;
	border:solid windowtext 1.0pt;
	mso-border-alt:solid windowtext .5pt;
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-border-insideh:.5pt solid windowtext;
	mso-border-insidev:.5pt solid windowtext;
	mso-para-margin:0cm;
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
 <o:shapedefaults v:ext="edit" spidmax="2051"/>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=EN-US style='tab-interval:36.0pt'>
<?php
$con=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
    // Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// $result = mysqli_query($con,"SELECT * FROM tb_logbook ". (($query1 != '') ? " where $query1 " : " GROUP BY CBC_NAME");    
$result = mysqli_query($con,"SELECT * FROM tb_result_review WHERE log_id = '$log_id'");   

if(mysqli_num_rows($result)>0){

    while($row = mysqli_fetch_array($result))
    {
    ?>
<div class=WordSection1>

<p class=MsoNormal><b><span lang=EN-ID style='font-size:12.0pt;line-height:
105%;font-family:Consolas;mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
major-latin;mso-ansi-language:EN-ID'>A. <span class=SpellE>Informasi</span> <span
class=SpellE>Umum</span></span></b><span style='font-size:12.0pt;line-height:
105%;font-family:Consolas;mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
major-latin'><o:p></o:p></span></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0 width=0
 style='width:450.8pt;background:#F2F2F2;mso-background-themecolor:background1;
 mso-background-themeshade:242;border-collapse:collapse;border:none;mso-yfti-tbllook:
 1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt;mso-border-insideh:none;mso-border-insidev:
 none'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=199 valign=top style='width:149.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;line-height:
  105%;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'>Unit <span
  class=SpellE>Bisnis</span></span></b><span style='font-size:12.0pt;
  line-height:105%;font-family:Consolas;mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 valign=top style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  style='font-size:12.0pt;line-height:105%;font-family:Consolas;mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=379 style='width:284.45pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['CBC_NAME'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1'>
  <td width=199 valign=top style='width:149.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  class=SpellE><b style='mso-bidi-font-weight:normal'><span style='font-size:
  12.0pt;line-height:105%;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'>Debitur</span></b></span><span
  style='font-size:12.0pt;line-height:105%;font-family:Consolas;mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 valign=top style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  style='font-size:12.0pt;line-height:105%;font-family:Consolas;mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=379 style='width:284.45pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['Debitur'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2'>
  <td width=199 valign=top style='width:149.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;line-height:
  105%;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'>Total
  Limit Per</span></b><span style='font-size:12.0pt;line-height:105%;
  font-family:Consolas;mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 valign=top style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  style='font-size:12.0pt;line-height:105%;font-family:Consolas;mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=379 style='width:284.45pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'>Rp</span></span><span style='font-size:12.0pt;
  font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'>. <?php echo $row['Limitx'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3'>
  <td width=199 valign=top style='width:149.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;line-height:
  105%;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'>Total
  Bade Per</span></b><span style='font-size:12.0pt;line-height:105%;font-family:
  Consolas;mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 valign=top style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  style='font-size:12.0pt;line-height:105%;font-family:Consolas;mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=379 style='width:284.45pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'>Rp</span></span><span style='font-size:12.0pt;
  font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'>. <?php echo $row['Bade'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4'>
  <td width=199 valign=top style='width:149.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  class=SpellE><b style='mso-bidi-font-weight:normal'><span style='font-size:
  12.0pt;line-height:105%;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'>Fasilitas</span></b></span><b
  style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;line-height:
  105%;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'> <span
  class=SpellE>Kredit</span></span></b><span style='font-size:12.0pt;
  line-height:105%;font-family:Consolas;mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 valign=top style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  style='font-size:12.0pt;line-height:105%;font-family:Consolas;mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=379 style='width:284.45pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['JenisFaskred'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5'>
  <td width=199 valign=top style='width:149.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  class=SpellE><b style='mso-bidi-font-weight:normal'><span style='font-size:
  12.0pt;line-height:105%;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'>Kolektibilitas</span></b></span><span
  style='font-size:12.0pt;line-height:105%;font-family:Consolas;mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 valign=top style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  style='font-size:12.0pt;line-height:105%;font-family:Consolas;mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=379 style='width:284.45pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['KOL'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;mso-yfti-lastrow:yes'>
  <td width=199 valign=top style='width:149.5pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  class=SpellE><b style='mso-bidi-font-weight:normal'><span style='font-size:
  12.0pt;line-height:105%;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'>Bidang</span></b></span><b
  style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;line-height:
  105%;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'> Usaha</span></b><span
  style='font-size:12.0pt;line-height:105%;font-family:Consolas;mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 valign=top style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt'><span
  style='font-size:12.0pt;line-height:105%;font-family:Consolas;mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=379 style='width:284.45pt;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['BidangUsaha'];?><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:12.0pt;line-height:105%;font-family:
Consolas;mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p>&nbsp;</o:p></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
 242;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:1.0cm'>
  <td width=707 style='width:566.4pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span class=SpellE><b><u><span
  lang=EN-ID style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin;mso-ansi-language:EN-ID'>Histori</span></u></b></span><b><u><span
  lang=EN-ID style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin;mso-ansi-language:EN-ID'> <span class=SpellE>Pemberian</span> <span
  class=SpellE>Kredit</span></span></u></b><span style='font-size:12.0pt;
  font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;height:1.0cm'>
  <td width=707 style='width:566.4pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas'><?php echo $row['his_pem_kre'];?><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:12.0pt;line-height:105%;font-family:
Consolas;mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p>&nbsp;</o:p></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
 242;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:1.0cm'>
  <td width=707 style='width:566.4pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><u><span lang=EN-ID
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin;
  mso-ansi-language:EN-ID'>Current Issues <span class=SpellE>Industri</span></span></u></b><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;height:1.0cm'>
  <td width=707 style='width:566.4pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas'><?php echo $row['cur_is_in'];?><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:12.0pt;line-height:105%;font-family:
Consolas;mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p>&nbsp;</o:p></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
 242;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:1.0cm'>
  <td width=707 style='width:566.4pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span class=SpellE><b><u><span
  lang=EN-ID style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin;mso-ansi-language:EN-ID'>Histori</span></u></b></span><b><u><span
  lang=EN-ID style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin;mso-ansi-language:EN-ID'> <span class=SpellE>Pembayaran</span>
  Dan <span class=SpellE>Kolektibilitas</span></span></u></b><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;height:1.0cm'>
  <td width=707 style='width:566.4pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas'><?php echo $row['his_pem_kol'];?><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span style='font-size:12.0pt;line-height:105%;font-family:
Consolas;mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p>&nbsp;</o:p></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
 242;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:1.0cm'>
  <td width=707 style='width:566.4pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><u><span lang=EN-ID
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin;
  mso-ansi-language:EN-ID;mso-bidi-font-style:italic'>Early Warning</span></u></b><u><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></u></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;height:1.0cm'>
  <td width=707 style='width:566.4pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas'><?php echo $row['earl_war'];?><o:p></o:p></span></p>
  </td>
 </tr>
</table>

</div>

<span style='font-size:12.0pt;line-height:105%;font-family:Consolas;mso-fareast-font-family:
Calibri;mso-fareast-theme-font:minor-latin;mso-bidi-font-family:"Calibri Light";
mso-bidi-theme-font:major-latin;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>

<div class=WordSection2>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:12.0pt;line-height:105%;font-family:Consolas;mso-bidi-font-family:
"Calibri Light";mso-bidi-theme-font:major-latin'>B. <span class=SpellE>Catatan</span>
<span class=SpellE>Hasil</span> Review<o:p></o:p></span></b></p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
 242;border-collapse:collapse;border:none;mso-yfti-tbllook:1184;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt;mso-border-insideh:none;mso-border-insidev:none'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:1.0cm'>
  <td width=603 colspan=3 style='width:451.3pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:1.0cm'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center;line-height:normal;mso-outline-level:4'><b><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'>ASPEK
  BISNIS<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'>Hasil</span></b></span><b><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'> Review</span></b><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'></span></span><span style='font-size:
  12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'>
  <?php echo $row['HasilReview1'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
  font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'>Option<o:p></o:p></span></b></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['YN1'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'>Rekomendasi</span></b></span><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['Rekomendasi1'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'>Tanggapan</span></b></span><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['Tanggapan1'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>Target Date</span></b><span style='font-size:12.0pt;font-family:
  Consolas;mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'><?php echo $row['TargetDate1'];?></span><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:1.0cm'>
  <td width=603 colspan=3 style='width:451.3pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:1.0cm'>
  <h4 align=center style='text-align:center'><span style='font-family:Consolas;
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'>ASPEK
  KEUANGAN<o:p></o:p></span></h4>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'>Hasil</span></b></span><b><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'> Review</span></b><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'></span></span><span style='font-size:
  12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'>
  <?php echo $row['HasilReview2'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
  font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'>Option<o:p></o:p></span></b></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['YN2'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'>Rekomendasi</span></b></span><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['Rekomendasi2'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'>Tanggapan</span></b></span><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['Tanggapan2'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>Target Date</span></b><span style='font-size:12.0pt;font-family:
  Consolas;mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'><?php echo $row['TargetDate2'];?></span><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:1.0cm'>
  <td width=603 colspan=3 style='width:451.3pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:1.0cm'>
  <h4 align=center style='text-align:center'><span style='font-family:Consolas;
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'>KEMAMPUAN
  BAYAR<o:p></o:p></span></h4>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'></span></b></span><b><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'> Review</span></b><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'>Hasil</span></span><span style='font-size:
  12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'>
  <?php echo $row['HasilReview3'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
  font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'>Option<o:p></o:p></span></b></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['YN3'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'>Rekomendasi</span></b></span><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['Rekomendasi3'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'>Tanggapan</span></b></span><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['Tanggapan3'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>Target Date</span></b><span style='font-size:12.0pt;font-family:
  Consolas;mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'><?php echo $row['TargetDate3'];?></span><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18;height:1.0cm'>
  <td width=603 colspan=3 style='width:451.3pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:1.0cm'>
  <h4 align=center style='text-align:center'><span style='font-family:Consolas;
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'>STRUKTUR
  DAN TUJUAN PEMBIAYAAN<o:p></o:p></span></h4>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'>Hasil</span></b></span><b><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'> Review</span></b><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'></span></span><span style='font-size:
  12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'>
  <?php echo $row['HasilReview4'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:20;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
  font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'>Option<o:p></o:p></span></b></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['YN4'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:21;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'>Rekomendasi</span></b></span><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['Rekomendasi4'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:22;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'>Tanggapan</span></b></span><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['Tanggapan4'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:23;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>Target Date</span></b><span style='font-size:12.0pt;font-family:
  Consolas;mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'><?php echo $row['TargetDate4'];?></span><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:24;height:1.0cm'>
  <td width=603 colspan=3 style='width:451.3pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:1.0cm'>
  <h4 align=center style='text-align:center'><span style='font-family:Consolas;
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'>ASPEK
  AGUNAN<o:p></o:p></span></h4>
  </td>
 </tr>
 <tr style='mso-yfti-irow:25;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'>Hasil</span></b></span><b><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'> Review</span></b><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'></span></span><span style='font-size:
  12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'>
  <?php echo $row['HasilReview5'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:26;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
  font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'>Option<o:p></o:p></span></b></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['YN5'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:27;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'>Rekomendasi</span></b></span><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['Rekomendasi5'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:28;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'>Tanggapan</span></b></span><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['Tanggapan5'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:29;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>Target Date</span></b><span style='font-size:12.0pt;font-family:
  Consolas;mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'><?php echo $row['TargetDate5'];?></span><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:30;height:1.0cm'>
  <td width=603 colspan=3 style='width:451.3pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:1.0cm'>
  <p class=MsoNormal align=center style='mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center;line-height:normal;mso-outline-level:4'><b><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Times New Roman";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'>KESESUAIAN
  DENGAN KETENTUAN &amp; PERSYARATAN KREDIT<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:31;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'>Hasil</span></b></span><b><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'> Review</span></b><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'></span></span><span style='font-size:
  12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'>
  <?php echo $row['HasilReview6'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:32;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;
  font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'>Option<o:p></o:p></span></b></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['YN6'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:33;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'>Rekomendasi</span></b></span><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['Rekomendasi6'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:34;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'>Tanggapan</span></b></span><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['Tanggapan6'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:35;mso-yfti-lastrow:yes;height:1.0cm'>
  <td width=123 style='width:92.15pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>Target Date</span></b><span style='font-size:12.0pt;font-family:
  Consolas;mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.85pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=456 style='width:342.3pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'><?php echo $row['TargetDate6'];?></span><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
 </tr>
</table>

</div>

<b style='mso-bidi-font-weight:normal'><span lang=EN-GB style='font-size:12.0pt;
line-height:105%;font-family:Consolas;mso-fareast-font-family:Calibri;
mso-fareast-theme-font:minor-latin;mso-bidi-font-family:"Calibri Light";
mso-bidi-theme-font:major-latin;mso-ansi-language:EN-GB;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span></b>

<div class=WordSection3>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
 242;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:1.0cm'>
  <td width=707 style='width:566.4pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:12.0pt;
  font-family:Consolas;mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'>POTENSI RESIKO</span></b><span
  style='font-size:12.0pt;font-family:Consolas;mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;height:1.0cm'>
  <td width=707 style='width:566.4pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas'><?php echo $row['po_res'];?><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=EN-GB
style='font-size:12.0pt;line-height:105%;font-family:Consolas;mso-bidi-font-family:
"Calibri Light";mso-bidi-theme-font:major-latin;mso-ansi-language:EN-GB'><o:p>&nbsp;</o:p></span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='background:#F2F2F2;mso-background-themecolor:background1;mso-background-themeshade:
 242;border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:1.0cm'>
  <td width=707 colspan=3 style='width:566.4pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><span style='font-size:12.0pt;
  font-family:Consolas;mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'>ESTIMASI KOLEKTIBILTAS DAN
  ACCOUNT STRATEGY</span></b><span style='font-size:12.0pt;font-family:Consolas;
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:1.0cm'>
  <td width=242 style='width:188.8pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>Account Strategy</span></b><span style='font-size:12.0pt;
  font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=442 style='width:361.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['account_str'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:1.0cm'>
  <td width=242 style='width:188.8pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'>Estimasi</span></b></span><b><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'> <span
  class=SpellE>Kolektibilitas</span></span></b><span style='font-size:12.0pt;
  font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:
  "Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=442 style='width:361.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas'><?php echo $row['est_kol'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:1.0cm'>
  <td width=242 style='width:188.8pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span class=SpellE><b><span style='font-size:12.0pt;font-family:Consolas;
  mso-fareast-font-family:"Arial Unicode MS";mso-bidi-font-family:"Calibri Light";
  mso-bidi-theme-font:major-latin'>Watchlist</span></b></span><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=442 style='width:361.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'><?php echo $row['us_wl'];?><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;mso-yfti-lastrow:yes;height:1.0cm'>
  <td width=242 style='width:188.8pt;border:solid windowtext 1.0pt;border-top:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><b><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>Root Cause <span class=SpellE>sbg</span> Lesson Learned</span></b><span
  style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:"Arial Unicode MS";
  mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:major-latin'><o:p></o:p></span></p>
  </td>
  <td width=23 style='width:16.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;mso-border-top-alt:
  solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas;mso-fareast-font-family:
  "Arial Unicode MS";mso-bidi-font-family:"Calibri Light";mso-bidi-theme-font:
  major-latin'>:<o:p></o:p></span></p>
  </td>
  <td width=442 style='width:361.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:1.0cm'>
  <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:12.0pt;font-family:Consolas'><?php echo $row['root_cause'];?><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span lang=EN-GB
style='font-size:12.0pt;line-height:105%;font-family:Consolas;mso-bidi-font-family:
"Calibri Light";mso-bidi-theme-font:major-latin;mso-ansi-language:EN-GB'><o:p>&nbsp;</o:p></span></b></p>
</div>
</body>
<?php
  }
} 
mysqli_close($con);
?>
</html>
