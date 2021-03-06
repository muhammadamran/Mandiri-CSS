<?php 
date_default_timezone_set("Asia/Bangkok");
$datenow = date('d-m-Y h-i-s');
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=Result-Quick-Report-Date-Time-$datenow.doc");

include "include/restrict.php";
include "include/connection.php";
include 'include/head.php';

$id_logbook   = $_GET['id'];
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
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>Baghus K. Maulana</o:Author>
  <o:LastAuthor>Muhammad Amran</o:LastAuthor>
  <o:Revision>2</o:Revision>
  <o:TotalTime>0</o:TotalTime>
  <o:Created>2019-12-03T08:38:00Z</o:Created>
  <o:LastSaved>2019-12-03T08:38:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>88</o:Words>
  <o:Characters>506</o:Characters>
  <o:Lines>4</o:Lines>
  <o:Paragraphs>1</o:Paragraphs>
  <o:CharactersWithSpaces>593</o:CharactersWithSpaces>
  <o:Version>15.00</o:Version>
 </o:DocumentProperties>
 <o:OfficeDocumentSettings>
  <o:AllowPNG/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:SpellingState>Clean</w:SpellingState>
  <w:GrammarState>Clean</w:GrammarState>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
  <w:PunctuationKerning/>
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
   <w:DontUseIndentAsNumberingTabStop/>
   <w:FELineBreak11/>
   <w:WW11IndentRules/>
   <w:DontAutofitConstrainedTables/>
   <w:AutofitLikeWW11/>
   <w:HangulWidthLikeWW11/>
   <w:UseNormalStyleForList/>
   <w:SplitPgBreakAndParaMark/>
   <w:DontVertAlignCellWithSp/>
   <w:DontBreakConstrainedForcedTables/>
   <w:DontVertAlignInTxbx/>
   <w:Word11KerningPairs/>
   <w:CachedColBalance/>
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
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
  {mso-style-unhide:no;
  mso-style-qformat:yes;
  mso-style-parent:"";
  margin-top:0in;
  margin-right:0in;
  margin-bottom:8.0pt;
  margin-left:0in;
  line-height:105%;
  mso-pagination:widow-orphan;
  font-size:11.0pt;
  font-family:"Calibri",sans-serif;
  mso-fareast-font-family:Calibri;
  mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-ID;
  mso-fareast-language:EN-ID;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
  {mso-style-priority:34;
  mso-style-unhide:no;
  mso-style-qformat:yes;
  margin-top:0in;
  margin-right:0in;
  margin-bottom:8.0pt;
  margin-left:.5in;
  mso-add-space:auto;
  line-height:105%;
  mso-pagination:widow-orphan;
  font-size:11.0pt;
  font-family:"Calibri",sans-serif;
  mso-fareast-font-family:Calibri;
  mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-ID;
  mso-fareast-language:EN-ID;}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
  {mso-style-priority:34;
  mso-style-unhide:no;
  mso-style-qformat:yes;
  mso-style-type:export-only;
  margin-top:0in;
  margin-right:0in;
  margin-bottom:0in;
  margin-left:.5in;
  margin-bottom:.0001pt;
  mso-add-space:auto;
  line-height:105%;
  mso-pagination:widow-orphan;
  font-size:11.0pt;
  font-family:"Calibri",sans-serif;
  mso-fareast-font-family:Calibri;
  mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-ID;
  mso-fareast-language:EN-ID;}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
  {mso-style-priority:34;
  mso-style-unhide:no;
  mso-style-qformat:yes;
  mso-style-type:export-only;
  margin-top:0in;
  margin-right:0in;
  margin-bottom:0in;
  margin-left:.5in;
  margin-bottom:.0001pt;
  mso-add-space:auto;
  line-height:105%;
  mso-pagination:widow-orphan;
  font-size:11.0pt;
  font-family:"Calibri",sans-serif;
  mso-fareast-font-family:Calibri;
  mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-ID;
  mso-fareast-language:EN-ID;}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
  {mso-style-priority:34;
  mso-style-unhide:no;
  mso-style-qformat:yes;
  mso-style-type:export-only;
  margin-top:0in;
  margin-right:0in;
  margin-bottom:8.0pt;
  margin-left:.5in;
  mso-add-space:auto;
  line-height:105%;
  mso-pagination:widow-orphan;
  font-size:11.0pt;
  font-family:"Calibri",sans-serif;
  mso-fareast-font-family:Calibri;
  mso-bidi-font-family:"Times New Roman";
  mso-ansi-language:EN-ID;
  mso-fareast-language:EN-ID;}
span.SpellE
  {mso-style-name:"";
  mso-spl-e:yes;}
span.GramE
  {mso-style-name:"";
  mso-gram-e:yes;}
.MsoChpDefault
  {mso-style-type:export-only;
  mso-default-props:yes;
  font-size:10.0pt;
  mso-ansi-font-size:10.0pt;
  mso-bidi-font-size:10.0pt;
  font-family:"Calibri",sans-serif;
  mso-ascii-font-family:Calibri;
  mso-fareast-font-family:Calibri;
  mso-hansi-font-family:Calibri;
  mso-bidi-font-family:Calibri;}
@page WordSection1
  {size:8.5in 11.0in;
  margin:1.0in 1.0in 1.0in 1.0in;
  mso-header-margin:35.4pt;
  mso-footer-margin:35.4pt;
  mso-paper-source:0;}
div.WordSection1
  {page:WordSection1;}
 /* List Definitions */
 @list l0
  {mso-list-id:336034576;
  mso-list-type:hybrid;
  mso-list-template-ids:-1435333326 1111019204 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l0:level1
  {mso-level-number-format:alpha-upper;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  mso-ansi-font-weight:bold;}
@list l0:level2
  {mso-level-number-format:alpha-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;}
@list l0:level3
  {mso-level-number-format:roman-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:right;
  text-indent:-9.0pt;}
@list l0:level4
  {mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;}
@list l0:level5
  {mso-level-number-format:alpha-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;}
@list l0:level6
  {mso-level-number-format:roman-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:right;
  text-indent:-9.0pt;}
@list l0:level7
  {mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;}
@list l0:level8
  {mso-level-number-format:alpha-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;}
@list l0:level9
  {mso-level-number-format:roman-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:right;
  text-indent:-9.0pt;}
@list l1
  {mso-list-id:399207328;
  mso-list-type:hybrid;
  mso-list-template-ids:1443418248 940113921 940113923 940113925 940113921 940113923 940113925 940113921 940113923 940113925;}
@list l1:level1
  {mso-level-number-format:bullet;
  mso-level-text:\F0B7;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:Symbol;}
@list l1:level2
  {mso-level-number-format:bullet;
  mso-level-text:o;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:"Courier New";}
@list l1:level3
  {mso-level-number-format:bullet;
  mso-level-text:\F0A7;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:Wingdings;}
@list l1:level4
  {mso-level-number-format:bullet;
  mso-level-text:\F0B7;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:Symbol;}
@list l1:level5
  {mso-level-number-format:bullet;
  mso-level-text:o;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:"Courier New";}
@list l1:level6
  {mso-level-number-format:bullet;
  mso-level-text:\F0A7;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:Wingdings;}
@list l1:level7
  {mso-level-number-format:bullet;
  mso-level-text:\F0B7;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:Symbol;}
@list l1:level8
  {mso-level-number-format:bullet;
  mso-level-text:o;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:"Courier New";}
@list l1:level9
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
  mso-para-margin:0in;
  mso-para-margin-bottom:.0001pt;
  mso-pagination:widow-orphan;
  font-size:10.0pt;
  font-family:"Calibri",sans-serif;}
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
  mso-bidi-font-family:"Times New Roman";}
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
                        tb_upload_logbook.BidangUsaha,
                        tb_upload_logbook.status_tindaklanjut,
                        tb_upload_logbook.reviewer,
                        tb_upload_logbook.C_1,
                        tb_upload_logbook.C_2,
                        tb_upload_logbook.C_3,
                        tb_upload_logbook.C_4,
                        tb_upload_logbook.C_5,
                        tb_upload_logbook.C_6,
                        tb_upload_logbook.C_7,
                        tb_upload_logbook.C_8,
                        tb_upload_logbook.C_9,
                        tb_upload_logbook.C_10,
                        tb_upload_logbook.C_11,
                        tb_upload_logbook.C_12,
                        tb_upload_logbook.C_13,
                        tb_upload_logbook.C_14,
                        tb_upload_logbook.limit_ex,
                        tb_upload_logbook.bade_bank_lain,
                        tb_upload_logbook.gusaha,
                        tb_upload_logbook.rating,
                        tb_upload_logbook.ioutlook,
                        tb_upload_logbook.PG,
                        tb_upload_logbook.HP,
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
                        tb_upload_logbook.CIF AS CIF1, tb_upload_bidangusaha.CIF AS CIF3,
                        (
                          SELECT COUNT(tb_parameter.dashboard) FROM tb_parameter WHERE tb_parameter.id_logbook=tb_upload_logbook.id_logbook AND tb_parameter.dashboard='Kesesuaian Tujuan Penggunaan' GROUP BY tb_parameter.dashboard
                        ) AS jumlah_kesesuaian,
                        (
                          SELECT COUNT(tb_parameter.dashboard) FROM tb_parameter WHERE tb_parameter.id_logbook=tb_upload_logbook.id_logbook AND tb_parameter.dashboard='Financial' GROUP BY tb_parameter.dashboard
                        ) AS jumlah_financial,
                        (
                          SELECT COUNT(tb_parameter.dashboard) FROM tb_parameter WHERE tb_parameter.id_logbook=tb_upload_logbook.id_logbook AND tb_parameter.dashboard='Non Financial' GROUP BY tb_parameter.dashboard
                        ) AS jumlah_nonfinancial,
                        (
                          SELECT COUNT(tb_parameter.dashboard) FROM tb_parameter WHERE tb_parameter.id_logbook=tb_upload_logbook.id_logbook AND tb_parameter.dashboard='Dokumen' GROUP BY tb_parameter.dashboard
                        ) AS jumlah_dokumen,
                        (
                          SELECT COUNT(tb_parameter.dashboard) FROM tb_parameter WHERE tb_parameter.id_logbook=tb_upload_logbook.id_logbook AND tb_parameter.dashboard='Asset' GROUP BY tb_parameter.dashboard
                        ) AS jumlah_asset,
                        (
                          SELECT COUNT(tb_parameter.dashboard) FROM tb_parameter WHERE tb_parameter.id_logbook=tb_upload_logbook.id_logbook AND tb_parameter.dashboard='Lap. Keu' GROUP BY tb_parameter.dashboard
                        ) AS jumlah_lapkeu,
                        (
                          SELECT COUNT(tb_parameter.dashboard) FROM tb_parameter WHERE tb_parameter.id_logbook=tb_upload_logbook.id_logbook AND tb_parameter.dashboard='Transaksi' GROUP BY tb_parameter.dashboard
                        ) AS jumlah_transaksi,
                        (
                          SELECT COUNT(tb_parameter.dashboard) FROM tb_parameter WHERE tb_parameter.id_logbook=tb_upload_logbook.id_logbook AND tb_parameter.dashboard='Periodic Call' GROUP BY tb_parameter.dashboard
                        ) AS jumlah_periodic,
                        (
                          SELECT COUNT(tb_parameter.dashboard) FROM tb_parameter WHERE tb_parameter.id_logbook=tb_upload_logbook.id_logbook AND tb_parameter.dashboard='Legal Issue' GROUP BY tb_parameter.dashboard
                        ) AS jumlah_legal,
                        (
                          SELECT COUNT(tb_parameter.dashboard) FROM tb_parameter WHERE tb_parameter.id_logbook=tb_upload_logbook.id_logbook AND tb_parameter.dashboard='Regulator Comply' GROUP BY tb_parameter.dashboard
                        ) AS jumlah_regulator,
                        (
                          SELECT COUNT(tb_parameter.dashboard) FROM tb_parameter WHERE tb_parameter.id_logbook=tb_upload_logbook.id_logbook AND tb_parameter.dashboard='Owner Issue' GROUP BY tb_parameter.dashboard
                        ) AS jumlah_owner
                        FROM tb_upload_logbook
                        LEFT JOIN tb_upload_bidangusaha ON tb_upload_logbook.CIF = tb_upload_bidangusaha.CIF
                        WHERE id_logbook='$id_logbook' ORDER BY id_logbook");  


if(mysqli_num_rows($result)>0){

    while($row = mysqli_fetch_array($result))
    {
    ?>
<div class=WordSection1>

<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center'><b style='mso-bidi-font-weight:normal'><span
style='font-size:14.0pt;line-height:105%;mso-ansi-language:EN-US'>URGENT CREDIT
RISK PROBLEM<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt'><b
style='mso-bidi-font-weight:normal'><span style='font-size:14.0pt;line-height:
105%;mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt'><b
style='mso-bidi-font-weight:normal'><span style='mso-ansi-language:EN-US'>Nama <span
class=SpellE>Debitur</span><span style='mso-tab-count:2'></span>:<?php echo $row['nm_customer']; ?>
<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt'><b
style='mso-bidi-font-weight:normal'><span lang=EN-ID>Unit <span class=SpellE>Kerja</span><span
style='mso-tab-count:2'></span>:<?php echo $row['CBC_NAME']; ?></span></b></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt'><span
class=SpellE><b style='mso-bidi-font-weight:normal'><span lang=EN-ID>Tanggal</span></b></span><b
style='mso-bidi-font-weight:normal'><span lang=EN-ID> Review</span></b><span
style='mso-ansi-language:EN-US'> <span style='mso-tab-count:1'></span><b
style='mso-bidi-font-weight:normal'>:<?php echo $datenow; ?><o:p></o:p></b></span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:14.0pt;mso-ansi-language:EN-US'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpFirst style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:.25in;margin-bottom:.0001pt;mso-add-space:auto;
text-indent:-.25in;mso-list:l0 level1 lfo2'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span lang=EN-ID style='mso-bidi-font-family:
Calibri'><span style='mso-list:Ignore'>A.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><span class=SpellE><b style='mso-bidi-font-weight:
normal'><span lang=EN-ID>Informasi</span></b></span><b style='mso-bidi-font-weight:
normal'><span lang=EN-ID> <span class=SpellE>Umum</span><o:p></o:p></span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:31.5pt;margin-bottom:.0001pt;mso-add-space:auto;
text-indent:-14.15pt;line-height:normal;mso-list:l1 level1 lfo4'><![if !supportLists]><span
lang=EN-ID style='font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol'><span style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=EN-ID>Total Limit / Bade: <?php echo "Rp. " . number_format($row['LIMIT_LOG'],0,',','.') ?> / <?php echo "Rp. " . number_format($row['BADE_LOG'],0,',','.') ?><span
class=SpellE></span><span class=SpellE></span></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:31.5pt;margin-bottom:.0001pt;mso-add-space:auto;
text-indent:-14.15pt;line-height:normal;mso-list:l1 level1 lfo4'><![if !supportLists]><span
lang=EN-ID style='font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol'><span style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span class=SpellE><span lang=EN-ID>Fasilitas</span></span><span
lang=EN-ID> <span class=SpellE>Kredit</span>:<?php echo $row['JNS_KRD']; ?></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:31.5pt;margin-bottom:.0001pt;mso-add-space:auto;
text-indent:-14.15pt;line-height:normal;mso-list:l1 level1 lfo4'><![if !supportLists]><span
lang=EN-ID style='font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol'><span style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span class=SpellE><span lang=EN-ID>Kolektibilitas</span></span><span
lang=EN-ID>:<?php echo $row['KOL_LOG']; ?></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:31.5pt;margin-bottom:.0001pt;mso-add-space:auto;
text-indent:-14.15pt;line-height:normal;mso-list:l1 level1 lfo4'><![if !supportLists]><span
lang=EN-ID style='font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol'><span style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span class=SpellE><span lang=EN-ID>Bidang</span></span><span
lang=EN-ID> Usaha:<?php echo $row['BidangUsaha']; ?></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:31.5pt;margin-bottom:.0001pt;mso-add-space:auto;
text-indent:-14.15pt;line-height:normal;mso-list:l1 level1 lfo4'><![if !supportLists]><span
lang=EN-ID style='font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol'><span style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span class=SpellE><span lang=EN-ID>Histori</span></span><span
lang=EN-ID> <span class=SpellE>Pemberian</span> <span class=SpellE>Kredit</span>:</span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:31.5pt;margin-bottom:.0001pt;mso-add-space:auto;
text-indent:-14.15pt;line-height:normal;mso-list:l1 level1 lfo4'><![if !supportLists]><span
lang=EN-ID style='font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol'><span style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span class=SpellE><span lang=EN-ID>Histori</span></span><span
lang=EN-ID> <span class=SpellE>Pembayaran</span>:<?php echo $row['HP']; ?></span></p>



<p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:31.5pt;margin-bottom:.0001pt;mso-add-space:auto;
line-height:normal'><span lang=EN-ID><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:0in;
margin-bottom:0in;margin-left:.25in;margin-bottom:.0001pt;mso-add-space:auto;
text-indent:-.25in;mso-list:l0 level1 lfo2'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span lang=EN-ID style='mso-bidi-font-family:
Calibri'><span style='mso-list:Ignore'>B.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><span class=SpellE><b style='mso-bidi-font-weight:
normal'><span lang=EN-ID>Kronologis</span></b></span><b style='mso-bidi-font-weight:
normal'><span lang=EN-ID><o:p></o:p></span></b></p>

          <table id="example1" class="table table-hover">
             <?php

              $tipe = mysqli_query($con,"SELECT id_tipe, nama_tipe FROM tb_tipe");    

              if(mysqli_num_rows($tipe)>0) {
                $i = 1;
                while($row_tipe = mysqli_fetch_array($tipe)) {
             ?>
                
                    <?php
                      $tema = mysqli_query($con,"SELECT id_tema, tema FROM tb_tema WHERE tipe_id=".$row_tipe['id_tipe']."");    
                      if(mysqli_num_rows($tema)>0){
                        while($row_tema = mysqli_fetch_array($tema)) {
                            $tema_2 = mysqli_query($con,"SELECT * FROM tb_parameter WHERE id_logbook=".$id_logbook." AND tema_id=".$row_tema['id_tema']."");
                            $row_tema_2 = mysqli_fetch_array($tema_2);
                            if ($row_tema_2['report'] == 'Quick Report') {
                    ?>
                              <table style="height: 112px;" border="2px" width="719">
                                <tbody>
                                  <tr style="background-color: #D6D9ED">
                                    <th><font style="font-size: 15px;">Kronologi Permasalahan</font></th>
                                    <th><font style="font-size: 15px;">Hasil Review</font></th>
                                    <th><font style="font-size: 15px;">Rekomendasi</font></th>
                                    <!-- <th><font style="font-size: 15px;">TindakLanjut</font></th> -->
                                    <th><font style="font-size: 15px;">Time line</font></th>
                                    <!-- <th><font style="font-size: 15px;">Status</font></th> -->
                                    <!-- <th><font style="font-size: 15px;">Report</font></th> -->
                                  </tr>
                                </tbody>
                                <tr>
                                  <td><font style="font-size: 15px;"><?= !empty($row_tema_2['KP']) ? $row_tema_2['KP'] : '-' ?></font></td>
                                  <td><font style="font-size: 15px;"><?= !empty($row_tema_2['hasil_review']) ? $row_tema_2['hasil_review'] : '-' ?></font></td>
                                  <td><font style="font-size: 15px;"><?= !empty($row_tema_2['saran_perbaikan']) ? $row_tema_2['saran_perbaikan'] : '-' ?></font></td>
                                  <!-- <td><font style="font-size: 15px;"><?= !empty($row_tema_2['tindak_lanjut']) ? $row_tema_2['tindak_lanjut'] : '-' ?></font></td> -->
                                  <td><font style="font-size: 15px;"><?= !empty($row_tema_2['target_date']) ? $row_tema_2['target_date'] : '-' ?></font></td>
                                  <!-- <td><font style="font-size: 15px;"><?= !empty($row_tema_2['status']) ? $row_tema_2['status'] : '-' ?></font></td> -->
                                  <!-- <td><font style="font-size: 15px;"><?= !empty($row_tema_2['report']) ? $row_tema_2['report'] : '-' ?></font></td> -->
                                </tr>
                              </table>
                          <?php }}} ?>
                        </td>
                      </tr>
                    <?php }} ?>
                  </table>


<p class=MsoListParagraph style='margin-top:0in;margin-right:0in;margin-bottom:
0in;margin-left:.25in;margin-bottom:.0001pt;mso-add-space:auto'><b
style='mso-bidi-font-weight:normal'><span lang=EN-ID><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal><span lang=EN-ID><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span lang=EN-ID>Agar BU <span class=SpellE>pengelola</span> account <span
class=SpellE>segera</span> <span class=SpellE>menyampaikan</span> <span
class=SpellE>penjelasan</span> <span class=SpellE>dan</span> <span
class=SpellE>tindaklanjut</span> yang <span class=SpellE><span class=GramE>akan</span></span></span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span class=SpellE><span class=GramE><span lang=EN-ID>dilakukan</span></span></span><span
lang=EN-ID> <span class=SpellE>sesuai</span> time line yang <span class=SpellE>telah</span>
<span class=SpellE>ditetapkan</span>:</span></p>

<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span lang=EN-ID><o:p>&nbsp;</o:p></span></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none;mso-border-alt:solid windowtext .5pt;
 mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:37.75pt'>
  <td width=319 style='width:239.4pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;background:#D9D9D9;mso-background-themecolor:background1;
  mso-background-themeshade:217;padding:0in 5.4pt 0in 5.4pt;height:37.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-ID>Reviewer<o:p></o:p></span></b></p>
  </td>
  <td width=319 style='width:239.4pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D9D9D9;mso-background-themecolor:background1;mso-background-themeshade:
  217;padding:0in 5.4pt 0in 5.4pt;height:37.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-ID>Head In Charge<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:130.0pt'>
  <td width=319 valign=bottom style='width:239.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:130.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-ID><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=319 valign=bottom style='width:239.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:130.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang=EN-ID><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
  <td width=319 valign=top style='width:239.4pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-ID>Senior Credit Risk
  Reviewer Manager</span></b></p>
  </td>
  <td width=319 valign=top style='width:239.4pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='text-align:center'><b
  style='mso-bidi-font-weight:normal'><span lang=EN-ID>Department Head/Group
  Head</span></b></p>
  </td>
 </tr>
</table>
<?php
  }
} 
mysqli_close($con);
?>
<p class=MsoNormal><span lang=EN-ID><o:p>&nbsp;</o:p></span></p>

</div>

</body>

</html>
