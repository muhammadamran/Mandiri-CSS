<?php
date_default_timezone_set("Asia/Bangkok");
$datenow = date('d-m-Y h-i-s');
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=Result-NAK-Date-Time-$datenow.doc");

include '..../include/restrict.php';
include '..../include/connection.php';
include '..../include/head.php';


$id_logbook  = $_GET['id'];

function numberToRomanRepresentation($number) {
    $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
    $returnValue = '';
    while ($number > 0) {
        foreach ($map as $roman => $int) {
            if($number >= $int) {
                $number -= $int;
                $returnValue .= $roman;
                break;
            }
        }
    }
    return $returnValue;
}

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
<link rel=File-List href="fiX_files/filelist.xml">
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Author>Khoirunisa Waskitaningrum</o:Author>
  <o:LastAuthor>Muhammad Amran</o:LastAuthor>
  <o:Revision>1</o:Revision>
  <o:TotalTime>597</o:TotalTime>
  <o:LastPrinted>2019-08-14T01:26:00Z</o:LastPrinted>
  <o:Created>2019-10-20T12:44:00Z</o:Created>
  <o:LastSaved>2019-10-21T16:22:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>1112</o:Words>
  <o:Characters>6339</o:Characters>
  <o:Lines>52</o:Lines>
  <o:Paragraphs>14</o:Paragraphs>
  <o:CharactersWithSpaces>7437</o:CharactersWithSpaces>
  <o:Version>15.00</o:Version>
 </o:DocumentProperties>
</xml><![endif]-->
<link rel=themeData href="fiX_files/themedata.thmx">
<link rel=colorSchemeMapping href="fiX_files/colorschememapping.xml">
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
  <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>
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
  {mso-style-priority:34;
  mso-style-unhide:no;
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
span.ListParagraphChar
  {mso-style-name:"List Paragraph Char";
  mso-style-priority:34;
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
  mso-ascii-font-family:Calibri;
  mso-ascii-theme-font:minor-latin;
  mso-fareast-font-family:Calibri;
  mso-fareast-theme-font:minor-latin;
  mso-hansi-font-family:Calibri;
  mso-hansi-theme-font:minor-latin;
  mso-bidi-font-family:"Times New Roman";
  mso-bidi-theme-font:minor-bidi;}
@page WordSection1
  {size:841.9pt 595.3pt;
  mso-page-orientation:landscape;
  margin:.8in 1.0in 1.0in 1.0in;
  mso-header-margin:35.3pt;
  mso-footer-margin:35.3pt;
  mso-paper-source:0;}
div.WordSection1
  {page:WordSection1;}
 /* List Definitions */
 @list l0
  {mso-list-id:399207328;
  mso-list-type:hybrid;
  mso-list-template-ids:1443418248 940113921 940113923 940113925 940113921 940113923 940113925 940113921 940113923 940113925;}
@list l0:level1
  {mso-level-number-format:bullet;
  mso-level-text:;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:Symbol;}
@list l0:level2
  {mso-level-number-format:bullet;
  mso-level-text:o;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:"Courier New";}
@list l0:level3
  {mso-level-number-format:bullet;
  mso-level-text:;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:Wingdings;}
@list l0:level4
  {mso-level-number-format:bullet;
  mso-level-text:;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:Symbol;}
@list l0:level5
  {mso-level-number-format:bullet;
  mso-level-text:o;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:"Courier New";}
@list l0:level6
  {mso-level-number-format:bullet;
  mso-level-text:;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:Wingdings;}
@list l0:level7
  {mso-level-number-format:bullet;
  mso-level-text:;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:Symbol;}
@list l0:level8
  {mso-level-number-format:bullet;
  mso-level-text:o;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:"Courier New";}
@list l0:level9
  {mso-level-number-format:bullet;
  mso-level-text:;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  text-indent:-.25in;
  font-family:Wingdings;}
@list l1
  {mso-list-id:762264428;
  mso-list-type:hybrid;
  mso-list-template-ids:1386373164 940113941 940113945 940113947 940113935 940113945 940113947 940113935 940113945 940113947;}
@list l1:level1
  {mso-level-number-format:alpha-upper;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:.25in;
  text-indent:-.25in;}
@list l1:level2
  {mso-level-number-format:alpha-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:.75in;
  text-indent:-.25in;}
@list l1:level3
  {mso-level-number-format:roman-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:right;
  margin-left:1.25in;
  text-indent:-9.0pt;}
@list l1:level4
  {mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:1.75in;
  text-indent:-.25in;}
@list l1:level5
  {mso-level-number-format:alpha-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:2.25in;
  text-indent:-.25in;}
@list l1:level6
  {mso-level-number-format:roman-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:right;
  margin-left:2.75in;
  text-indent:-9.0pt;}
@list l1:level7
  {mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:3.25in;
  text-indent:-.25in;}
@list l1:level8
  {mso-level-number-format:alpha-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:3.75in;
  text-indent:-.25in;}
@list l1:level9
  {mso-level-number-format:roman-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:right;
  margin-left:4.25in;
  text-indent:-9.0pt;}
@list l2
  {mso-list-id:1173880894;
  mso-list-type:hybrid;
  mso-list-template-ids:959081628 838603746 67698713 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l2:level1
  {mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:99.0pt;
  text-indent:-.25in;}
@list l2:level2
  {mso-level-number-format:alpha-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:73.1pt;
  text-indent:-.25in;}
@list l2:level3
  {mso-level-number-format:roman-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:right;
  margin-left:109.1pt;
  text-indent:-9.0pt;}
@list l2:level4
  {mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:145.1pt;
  text-indent:-.25in;}
@list l2:level5
  {mso-level-number-format:alpha-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:181.1pt;
  text-indent:-.25in;}
@list l2:level6
  {mso-level-number-format:roman-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:right;
  margin-left:217.1pt;
  text-indent:-9.0pt;}
@list l2:level7
  {mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:253.1pt;
  text-indent:-.25in;}
@list l2:level8
  {mso-level-number-format:alpha-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:289.1pt;
  text-indent:-.25in;}
@list l2:level9
  {mso-level-number-format:roman-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:right;
  margin-left:325.1pt;
  text-indent:-9.0pt;}
@list l3
  {mso-list-id:1333609702;
  mso-list-type:hybrid;
  mso-list-template-ids:-1782928276 940113941 940113945 940113947 940113935 940113945 940113947 940113935 940113945 940113947;}
@list l3:level1
  {mso-level-number-format:alpha-upper;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:.25in;
  text-indent:-.25in;}
@list l3:level2
  {mso-level-number-format:alpha-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:.75in;
  text-indent:-.25in;}
@list l3:level3
  {mso-level-number-format:roman-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:right;
  margin-left:1.25in;
  text-indent:-9.0pt;}
@list l3:level4
  {mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:1.75in;
  text-indent:-.25in;}
@list l3:level5
  {mso-level-number-format:alpha-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:2.25in;
  text-indent:-.25in;}
@list l3:level6
  {mso-level-number-format:roman-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:right;
  margin-left:2.75in;
  text-indent:-9.0pt;}
@list l3:level7
  {mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:3.25in;
  text-indent:-.25in;}
@list l3:level8
  {mso-level-number-format:alpha-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:left;
  margin-left:3.75in;
  text-indent:-.25in;}
@list l3:level9
  {mso-level-number-format:roman-lower;
  mso-level-tab-stop:none;
  mso-level-number-position:right;
  margin-left:4.25in;
  text-indent:-9.0pt;}
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
    SELECT COUNT(tb_parameter.dashboard) FROM tb_parameter WHERE tb_parameter.id_logbook=tb_upload_logbook.id_logbook AND tb_parameter.dashboard='Struktur' GROUP BY tb_parameter.dashboard
  ) AS jumlah_struktur,
  (
    SELECT COUNT(tb_parameter.dashboard) FROM tb_parameter WHERE tb_parameter.id_logbook=tb_upload_logbook.id_logbook AND tb_parameter.dashboard='Asumsi & Penentuan Limit' GROUP BY tb_parameter.dashboard
  ) AS jumlah_asumsi,
  (
    SELECT COUNT(tb_parameter.dashboard) FROM tb_parameter WHERE tb_parameter.id_logbook=tb_upload_logbook.id_logbook AND tb_parameter.dashboard='Analisa Risiko & Mitigasi' GROUP BY tb_parameter.dashboard
  ) AS jumlah_analisa,
  (
    SELECT COUNT(tb_parameter.dashboard) FROM tb_parameter WHERE tb_parameter.id_logbook=tb_upload_logbook.id_logbook AND tb_parameter.dashboard='Performance Lap Keu' GROUP BY tb_parameter.dashboard
  ) AS jumlah_performance,
  (
    SELECT COUNT(tb_parameter.dashboard) FROM tb_parameter WHERE tb_parameter.id_logbook=tb_upload_logbook.id_logbook AND tb_parameter.dashboard='Kesesuaian ketentuan & syarat' GROUP BY tb_parameter.dashboard
  ) AS jumlah_kesesuaian
  FROM tb_upload_logbook
  LEFT JOIN tb_upload_bidangusaha ON tb_upload_logbook.CIF = tb_upload_bidangusaha.CIF
  WHERE id_logbook='$id_logbook' ORDER BY id_logbook");  

// var_dump(mysqli_error($con));exit;

if(mysqli_num_rows($result)>0){

    while($row = mysqli_fetch_array($result))
    {
    ?>
<div class=WordSection1>

<p class=MsoNormal align=center style='text-align:center'><b style='mso-bidi-font-weight:
normal'><span style='font-size:18.0pt;mso-bidi-font-size:10.0pt;font-family:
"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-bidi-theme-font:minor-latin'>Working Paper Credit Risk Review NAK<o:p></o:p></span></b></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Nama
<span class=SpellE>Debitur</span><span style='mso-tab-count:2'></span>:<?php echo $row['nm_customer']; ?><o:p></o:p></span></b></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>CIF<span
style='mso-tab-count:3'></span>:<?php echo $row['CIF1']; ?><o:p></o:p></span></b></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Unit
<span class=SpellE>Kerja</span><span style='mso-tab-count:2'></span>:<?php echo $row['CBC_NAME']; ?></span></b><span style='font-size:10.0pt;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
minor-latin'><o:p></o:p></span></p>

<p class=MsoNormal><span class=SpellE><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Tanggal</span></b></span><b
style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;font-family:
"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-bidi-theme-font:minor-latin'> Review<span style='mso-tab-count:
1'></span></span></b><span style='font-size:10.0pt;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
minor-latin'><span style='mso-tab-count:1'></span><b style='mso-bidi-font-weight:normal'>:<?php echo $datenow; ?></b><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
minor-latin'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpFirst style='margin-left:.25in;mso-add-space:auto;
text-indent:-13.5pt;line-height:105%;mso-list:l3 level1 lfo2'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;line-height:
105%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>A.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp; </span></span></span></b><![endif]><span
class=SpellE><b style='mso-bidi-font-weight:normal'><span style='font-size:
10.0pt;line-height:105%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>InformasiUmum</span></b></span><b
style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;line-height:
105%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p></o:p></span></b></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=0
 style='width:697.5pt;margin-left:9.9pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:
 0in 5.4pt 0in 5.4pt;mso-border-insideh:.5pt solid windowtext;mso-border-insidev:
 .5pt solid windowtext'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:184.0pt'>
  <td width=32 valign=top style='width:23.85pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:184.0pt'>
  <p class=MsoListParagraph align=center style='margin-left:0in;text-align:
  center;line-height:115%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>I.<o:p></o:p></span></b></p>
  </td>
  <td width=898 valign=top style='width:673.65pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:184.0pt'>
  <p class=MsoListParagraph style='margin-left:3.5pt;line-height:115%'><span
  class=SpellE><b style='mso-bidi-font-weight:normal'><span style='font-size:
  10.0pt;line-height:115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Sumber</span></b></span><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;line-height:
  115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'> Data :<o:p></o:p></span></b></p>
  <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=0
   style='border-collapse:collapse;mso-table-layout-alt:fixed;mso-yfti-tbllook:
   1056;mso-padding-alt:0in 0in 0in 0in'>
   <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:21.05pt'>
    <td width=28 style='width:21.0pt;border:solid black 1.0pt;background:#D5DCE4;
    mso-background-themecolor:text2;mso-background-themetint:51;padding:0in 0in 0in 0in;
    height:21.05pt'>
    <p class=MsoNormalCxSpFirst align=center style='margin-right:3.35pt;
    mso-add-space:auto;text-align:center;line-height:115%;tab-stops:7.1pt;
    vertical-align:middle'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin;color:black;mso-font-kerning:12.0pt'>No<o:p></o:p></span></b></p>
    </td>
    <td width=388 style='width:291.25pt;border:solid black 1.0pt;border-left:
    none;mso-border-left-alt:solid black 1.0pt;background:#D5DCE4;mso-background-themecolor:
    text2;mso-background-themetint:51;padding:.65pt .55pt 0in .55pt;height:
    21.05pt'>
    <p class=MsoNormalCxSpLast align=center style='margin-top:0in;margin-right:
    3.35pt;margin-bottom:0in;margin-left:7.1pt;margin-bottom:.0001pt;
    mso-add-space:auto;text-align:center;line-height:115%;tab-stops:7.1pt;
    vertical-align:middle'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin;color:black;mso-font-kerning:12.0pt'>Data<o:p></o:p></span></b></p>
    </td>
    <td width=78 style='width:58.5pt;border:solid black 1.0pt;border-left:none;
    mso-border-left-alt:solid black 1.0pt;background:#D5DCE4;mso-background-themecolor:
    text2;mso-background-themetint:51;padding:0in 0in 0in 0in;height:21.05pt'>
    <p class=MsoListParagraph align=center style='margin-left:4.0pt;mso-add-space:
    auto;text-align:center;line-height:115%;vertical-align:bottom'><span
    class=SpellE><b style='mso-bidi-font-weight:normal'><span style='font-size:
    10.0pt;line-height:115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Pemenuhan</span></b></span><b
    style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
    line-height:115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p></o:p></span></b></p>
    </td>
    <td width=54 style='width:40.5pt;border:solid black 1.0pt;border-left:none;
    mso-border-left-alt:solid black 1.0pt;background:#D5DCE4;mso-background-themecolor:
    text2;mso-background-themetint:51;padding:0in 0in 0in 0in;height:21.05pt'>
    <p class=MsoNormalCxSpFirst align=center style='margin-left:2.0pt;
    mso-add-space:auto;text-align:center;line-height:115%;tab-stops:30.95pt;
    vertical-align:bottom'><b style='mso-bidi-font-weight:normal'><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin'>No.<o:p></o:p></span></b></p>
    </td>
    <td width=240 style='width:2.5in;border:solid black 1.0pt;border-left:none;
    mso-border-left-alt:solid black 1.0pt;background:#D5DCE4;mso-background-themecolor:
    text2;mso-background-themetint:51;padding:.65pt .55pt 0in .55pt;height:
    21.05pt'>
    <p class=MsoNormalCxSpLast align=center style='margin-right:3.35pt;
    mso-add-space:auto;text-align:center;line-height:115%;vertical-align:middle'><b
    style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
    line-height:115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'>Data<o:p></o:p></span></b></p>
    </td>
    <td width=84 style='width:63.0pt;border:solid black 1.0pt;border-left:none;
    mso-border-left-alt:solid black 1.0pt;background:#D5DCE4;mso-background-themecolor:
    text2;mso-background-themetint:51;padding:0in 0in 0in 0in;height:21.05pt'>
    <p class=MsoListParagraph align=center style='margin-left:0in;mso-add-space:
    auto;text-align:center;line-height:115%;vertical-align:bottom'><span
    class=SpellE><b style='mso-bidi-font-weight:normal'><span style='font-size:
    10.0pt;line-height:115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Pemenuhan</span></b></span><b
    style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
    line-height:115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p></o:p></span></b></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:1;height:21.05pt'>
    <td width=28 valign=top style='width:21.0pt;border:solid black 1.0pt;
    border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:21.05pt'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-right:3.35pt;
    mso-add-space:auto;text-align:center;line-height:115%;tab-stops:7.1pt;
    vertical-align:middle'><span style='font-size:10.0pt;line-height:115%;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'>1.<o:p></o:p></span></p>
    </td>
    <td width=388 valign=top style='width:291.25pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:.65pt .55pt 0in .55pt;height:21.05pt'>
    <p class=MsoNormalCxSpMiddle style='margin-top:0in;margin-right:3.35pt;
    margin-bottom:0in;margin-left:7.1pt;margin-bottom:.0001pt;mso-add-space:
    auto;text-align:justify;line-height:115%;tab-stops:7.1pt;vertical-align:
    middle'><span style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin;color:black;mso-font-kerning:12.0pt'>NAK,
    CBI, <span class=SpellE>dan</span> SS (<span class=SpellE>Untuk</span> KMK
    minimal 2 <span class=SpellE>tahun terakhir dan</span> KI <span class=SpellE>Pemberian</span>,
    <span class=SpellE>Perubahandan</span> Review <span class=SpellE>Tahunan</span>)</span><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin'><o:p></o:p></span></p>
    </td>
    <td width=78 style='width:58.5pt;border-top:none;border-left:none;
    border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
    solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:21.05pt'>
    <p class=MsoNormal align=center style='text-align:center;line-height:115%;
    tab-stops:7.9pt;vertical-align:bottom'><span style='font-size:10.0pt;
    line-height:115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['C_1']; ?><o:p></o:p></span></p>
    </td>
    <td width=54 valign=top style='width:40.5pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:0in 0in 0in 0in;height:21.05pt'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-left:2.0pt;
    mso-add-space:auto;text-align:center;line-height:115%;tab-stops:30.95pt;
    vertical-align:bottom'><span style='font-size:10.0pt;line-height:115%;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>8.<o:p></o:p></span></p>
    </td>
    <td width=240 valign=top style='width:2.5in;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:.65pt .55pt 0in .55pt;height:21.05pt'>
    <p class=MsoNormalCxSpMiddle style='margin-left:4.0pt;mso-add-space:auto;
    line-height:115%;tab-stops:30.95pt;vertical-align:bottom'><span
    class=SpellE><span style='font-size:10.0pt;line-height:115%;font-family:
    "Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
    minor-latin;mso-bidi-theme-font:minor-latin'>Laporan</span></span><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin'> Annual Review<o:p></o:p></span></p>
    </td>
    <td width=84 style='width:63.0pt;border-top:none;border-left:none;
    border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
    solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:21.05pt'>
    <p class=MsoNormalCxSpMiddle align=center style='text-align:center;
    line-height:115%;tab-stops:30.95pt;vertical-align:bottom'><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin'><?php echo $row['C_8']; ?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:2;height:.25in'>
    <td width=28 valign=top style='width:21.0pt;border:solid black 1.0pt;
    border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:.25in'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-right:3.35pt;
    mso-add-space:auto;text-align:center;line-height:115%;tab-stops:7.1pt;
    vertical-align:middle'><span style='font-size:10.0pt;line-height:115%;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'>2.<o:p></o:p></span></p>
    </td>
    <td width=388 valign=top style='width:291.25pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:.65pt .55pt 0in .55pt;height:.25in'>
    <p class=MsoNormalCxSpMiddle style='margin-top:0in;margin-right:3.35pt;
    margin-bottom:0in;margin-left:7.1pt;margin-bottom:.0001pt;mso-add-space:
    auto;text-align:justify;line-height:115%;tab-stops:7.1pt;vertical-align:
    middle'><span class=SpellE><span style='font-size:10.0pt;line-height:115%;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'>Laporan</span></span><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin;color:black;mso-font-kerning:12.0pt'> <span
    class=SpellE>Watchlist</span><o:p></o:p></span></p>
    </td>
    <td width=78 style='width:58.5pt;border-top:none;border-left:none;
    border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
    solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:.25in'>
    <p class=MsoNormal align=center style='text-align:center;line-height:115%;
    tab-stops:7.9pt;vertical-align:bottom'><span style='font-size:10.0pt;
    line-height:115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['C_2']; ?><o:p></o:p></span></p>
    </td>
    <td width=54 valign=top style='width:40.5pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:0in 0in 0in 0in;height:.25in'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-left:2.0pt;
    mso-add-space:auto;text-align:center;line-height:115%;tab-stops:30.95pt;
    vertical-align:bottom'><span style='font-size:10.0pt;line-height:115%;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>9.<o:p></o:p></span></p>
    </td>
    <td width=240 valign=top style='width:2.5in;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:.65pt .55pt 0in .55pt;height:.25in'>
    <p class=MsoNormalCxSpMiddle style='margin-left:4.0pt;mso-add-space:auto;
    line-height:115%;tab-stops:30.95pt;vertical-align:bottom'><span
    class=SpellE><span style='font-size:10.0pt;line-height:115%;font-family:
    "Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
    minor-latin;mso-bidi-theme-font:minor-latin'>Laporan Obligo</span></span><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin;color:black;mso-font-kerning:12.0pt'><o:p></o:p></span></p>
    </td>
    <td width=84 style='width:63.0pt;border-top:none;border-left:none;
    border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
    solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:.25in'>
    <p class=MsoNormalCxSpMiddle align=center style='text-align:center;
    line-height:115%;tab-stops:30.95pt;vertical-align:bottom'><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin'><?php echo $row['C_9']; ?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:3;height:16.05pt'>
    <td width=28 valign=top style='width:21.0pt;border:solid black 1.0pt;
    border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:16.05pt'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-right:3.35pt;
    mso-add-space:auto;text-align:center;line-height:115%;tab-stops:7.1pt;
    vertical-align:bottom'><span style='font-size:10.0pt;line-height:115%;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'>3.<o:p></o:p></span></p>
    </td>
    <td width=388 valign=top style='width:291.25pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:.65pt .55pt 0in .55pt;height:16.05pt'>
    <p class=MsoNormalCxSpMiddle style='margin-top:0in;margin-right:3.35pt;
    margin-bottom:0in;margin-left:7.1pt;margin-bottom:.0001pt;mso-add-space:
    auto;text-align:justify;line-height:115%;tab-stops:7.1pt;vertical-align:
    bottom'><span class=SpellE><span style='font-size:10.0pt;line-height:115%;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'>Laporan</span></span><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin;color:black;mso-font-kerning:12.0pt'>
    Review <span class=SpellE>Kolektibilitas</span></span><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin'><o:p></o:p></span></p>
    </td>
    <td width=78 style='width:58.5pt;border-top:none;border-left:none;
    border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
    solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:16.05pt'>
    <p class=MsoNormal align=center style='text-align:center;line-height:115%;
    tab-stops:7.9pt 16.8pt;vertical-align:bottom'><span style='font-size:10.0pt;
    line-height:115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'><?php echo $row['C_3']; ?><o:p></o:p></span></p>
    </td>
    <td width=54 valign=top style='width:40.5pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:0in 0in 0in 0in;height:16.05pt'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-left:2.0pt;
    mso-add-space:auto;text-align:center;line-height:115%;tab-stops:16.8pt 30.95pt;
    vertical-align:bottom'><span style='font-size:10.0pt;line-height:115%;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'>10.<o:p></o:p></span></p>
    </td>
    <td width=240 valign=top style='width:2.5in;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:.65pt .55pt 0in .55pt;height:16.05pt'>
    <p class=MsoNormalCxSpMiddle style='margin-left:4.0pt;mso-add-space:auto;
    line-height:115%;tab-stops:16.8pt 30.95pt;vertical-align:bottom'><span
    class=SpellE><span style='font-size:10.0pt;line-height:115%;font-family:
    "Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
    minor-latin;mso-bidi-theme-font:minor-latin;color:black;mso-font-kerning:
    12.0pt'>Transaksi</span></span><span style='font-size:10.0pt;line-height:
    115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'> <span class=SpellE>Keuangan</span>
    Usaha<o:p></o:p></span></p>
    </td>
    <td width=84 style='width:63.0pt;border-top:none;border-left:none;
    border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
    solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:16.05pt'>
    <p class=MsoNormalCxSpMiddle align=center style='text-align:center;
    line-height:115%;tab-stops:30.95pt;vertical-align:bottom'><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin'><?php echo $row['C_10']; ?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:4;height:16.3pt'>
    <td width=28 valign=top style='width:21.0pt;border:solid black 1.0pt;
    border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:16.3pt'>
    <p class=MsoNormal align=center style='text-align:center;line-height:115%;
    tab-stops:7.1pt;vertical-align:bottom'><span style='font-size:10.0pt;
    line-height:115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'>4.<o:p></o:p></span></p>
    </td>
    <td width=388 valign=top style='width:291.25pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:.65pt .55pt 0in .55pt;height:16.3pt'>
    <p class=MsoNormalCxSpMiddle style='margin-left:7.1pt;mso-add-space:auto;
    line-height:115%;tab-stops:7.1pt;vertical-align:bottom'><span class=SpellE><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin;color:black;mso-font-kerning:12.0pt'>Laporan</span></span><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin;color:black;mso-font-kerning:12.0pt'> <span
    class=SpellE>Keuangan</span> <span class=SpellE>Inhouse</span> <span
    class=SpellE>maupun</span> Audited </span><span style='font-size:10.0pt;
    line-height:115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p></o:p></span></p>
    </td>
    <td width=78 style='width:58.5pt;border-top:none;border-left:none;
    border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
    solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:16.3pt'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-right:1.55pt;
    mso-add-space:auto;text-align:center;line-height:115%;tab-stops:7.9pt 20.45pt;
    vertical-align:bottom'><span style='font-size:10.0pt;line-height:115%;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['C_4']; ?><o:p></o:p></span></p>
    </td>
    <td width=54 valign=top style='width:40.5pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:0in 0in 0in 0in;height:16.3pt'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-top:0in;margin-right:
    1.55pt;margin-bottom:0in;margin-left:2.0pt;margin-bottom:.0001pt;
    mso-add-space:auto;text-align:center;line-height:115%;tab-stops:20.45pt;
    vertical-align:bottom'><span style='font-size:10.0pt;line-height:115%;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>11.<o:p></o:p></span></p>
    </td>
    <td width=240 valign=top style='width:2.5in;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:.65pt .55pt 0in .55pt;height:16.3pt'>
    <p class=MsoNormalCxSpMiddle style='margin-top:0in;margin-right:1.55pt;
    margin-bottom:0in;margin-left:4.0pt;margin-bottom:.0001pt;mso-add-space:
    auto;line-height:115%;tab-stops:20.45pt;vertical-align:bottom'><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin'>SLIK OJK<o:p></o:p></span></p>
    </td>
    <td width=84 style='width:63.0pt;border-top:none;border-left:none;
    border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
    solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:16.3pt'>
    <p class=MsoNormalCxSpMiddle align=center style='text-align:center;
    line-height:115%;tab-stops:30.95pt;vertical-align:bottom'><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin'><?php echo $row['C_11']; ?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:5;height:13.35pt'>
    <td width=28 valign=top style='width:21.0pt;border:solid black 1.0pt;
    border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:13.35pt'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-right:3.35pt;
    mso-add-space:auto;text-align:center;line-height:115%;tab-stops:7.1pt;
    vertical-align:bottom'><span style='font-size:10.0pt;line-height:115%;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>5.<o:p></o:p></span></p>
    </td>
    <td width=388 valign=top style='width:291.25pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:.65pt .55pt 0in .55pt;height:13.35pt'>
    <p class=MsoNormalCxSpMiddle style='margin-top:0in;margin-right:3.35pt;
    margin-bottom:0in;margin-left:7.1pt;margin-bottom:.0001pt;mso-add-space:
    auto;text-align:justify;line-height:115%;tab-stops:7.1pt;vertical-align:
    bottom'><span class=SpellE><span style='font-size:10.0pt;line-height:115%;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Laporan</span></span><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin'> Stock &amp; <span class=SpellE>Piutang</span><o:p></o:p></span></p>
    </td>
    <td width=78 style='width:58.5pt;border-top:none;border-left:none;
    border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
    solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:13.35pt'>
    <p class=MsoNormal align=center style='text-align:center;line-height:115%;
    tab-stops:7.9pt 20.45pt;vertical-align:bottom'><span style='font-size:10.0pt;
    line-height:115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['C_5']; ?><o:p></o:p></span></p>
    </td>
    <td width=54 valign=top style='width:40.5pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:0in 0in 0in 0in;height:13.35pt'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-left:2.0pt;
    mso-add-space:auto;text-align:center;line-height:115%;tab-stops:20.45pt;
    vertical-align:bottom'><span style='font-size:10.0pt;line-height:115%;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>12.<o:p></o:p></span></p>
    </td>
    <td width=240 valign=top style='width:2.5in;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:.65pt .55pt 0in .55pt;height:13.35pt'>
    <p class=MsoNormalCxSpMiddle style='margin-left:4.0pt;mso-add-space:auto;
    line-height:115%;tab-stops:20.45pt;vertical-align:bottom'><span
    class=SpellE><span style='font-size:10.0pt;line-height:115%;font-family:
    "Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
    minor-latin;mso-bidi-theme-font:minor-latin;color:black;mso-font-kerning:
    12.0pt'>Dokumen</span></span><span style='font-size:10.0pt;line-height:
    115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'> Underlying</span><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin'><o:p></o:p></span></p>
    </td>
    <td width=84 style='width:63.0pt;border-top:none;border-left:none;
    border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
    solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:13.35pt'>
    <p class=MsoNormalCxSpMiddle align=center style='text-align:center;
    line-height:115%;tab-stops:30.95pt;vertical-align:bottom'><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin'><?php echo $row['C_12']; ?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:6;height:13.0pt'>
    <td width=28 valign=top style='width:21.0pt;border:solid black 1.0pt;
    border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:13.0pt'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-right:3.35pt;
    mso-add-space:auto;text-align:center;line-height:115%;tab-stops:7.1pt;
    vertical-align:bottom'><span style='font-size:10.0pt;line-height:115%;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'>6.<o:p></o:p></span></p>
    </td>
    <td width=388 valign=top style='width:291.25pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:.65pt .55pt 0in .55pt;height:13.0pt'>
    <p class=MsoNormalCxSpMiddle style='margin-top:0in;margin-right:3.35pt;
    margin-bottom:0in;margin-left:7.1pt;margin-bottom:.0001pt;mso-add-space:
    auto;text-align:justify;line-height:115%;tab-stops:7.1pt;vertical-align:
    bottom'><span class=SpellE><span style='font-size:10.0pt;line-height:115%;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'>Laporan</span></span><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin;color:black;mso-font-kerning:12.0pt'> OTS <span
    class=SpellE>dan</span> Call Report<o:p></o:p></span></p>
    </td>
    <td width=78 style='width:58.5pt;border-top:none;border-left:none;
    border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
    solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:13.0pt'>
    <p class=MsoNormal align=center style='text-align:center;line-height:115%;
    tab-stops:7.9pt;vertical-align:bottom'><span style='font-size:10.0pt;
    line-height:115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['C_6']; ?><o:p></o:p></span></p>
    </td>
    <td width=54 valign=top style='width:40.5pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:0in 0in 0in 0in;height:13.0pt'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-left:2.0pt;
    mso-add-space:auto;text-align:center;line-height:115%;tab-stops:30.95pt;
    vertical-align:bottom'><span style='font-size:10.0pt;line-height:115%;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>13.<o:p></o:p></span></p>
    </td>
    <td width=240 valign=top style='width:2.5in;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:.65pt .55pt 0in .55pt;height:13.0pt'>
    <p class=MsoNormalCxSpMiddle style='margin-left:4.0pt;mso-add-space:auto;
    line-height:115%;tab-stops:20.45pt 30.95pt;vertical-align:bottom'><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin;color:black;mso-font-kerning:12.0pt'>KJPP
    Report <span class=SpellE>dan</span> Review CO<o:p></o:p></span></p>
    </td>
    <td width=84 style='width:63.0pt;border-top:none;border-left:none;
    border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
    solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:13.0pt'>
    <p class=MsoNormalCxSpMiddle align=center style='text-align:center;
    line-height:115%;tab-stops:30.95pt;vertical-align:bottom'><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin'><?php echo $row['C_13']; ?><o:p></o:p></span></p>
    </td>
   </tr>
   <tr style='mso-yfti-irow:7;mso-yfti-lastrow:yes;height:20.55pt'>
    <td width=28 valign=top style='width:21.0pt;border:solid black 1.0pt;
    border-top:none;mso-border-top-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:20.55pt'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-right:3.35pt;
    mso-add-space:auto;text-align:center;line-height:115%;tab-stops:7.1pt;
    vertical-align:bottom'><span style='font-size:10.0pt;line-height:115%;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'>7.<o:p></o:p></span></p>
    </td>
    <td width=388 valign=top style='width:291.25pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:.65pt .55pt 0in .55pt;height:20.55pt'>
    <p class=MsoNormalCxSpMiddle style='margin-top:0in;margin-right:3.35pt;
    margin-bottom:0in;margin-left:7.1pt;margin-bottom:.0001pt;mso-add-space:
    auto;text-align:justify;line-height:115%;tab-stops:7.1pt;vertical-align:
    bottom'><span class=SpellE><span style='font-size:10.0pt;line-height:115%;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'>Laporan</span></span><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin;color:black;mso-font-kerning:12.0pt'> Trade
    Checking/<span class=SpellE>konfirmasi Bouwheer</span>/<span class=SpellE>Sejenis</span><o:p></o:p></span></p>
    </td>
    <td width=78 style='width:58.5pt;border-top:none;border-left:none;
    border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
    solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:20.55pt'>
    <p class=MsoNormal align=center style='text-align:center;line-height:115%;
    tab-stops:7.9pt 20.45pt;vertical-align:bottom'><span style='font-size:10.0pt;
    line-height:115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
    minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['C_7']; ?><span
    style='color:black;mso-font-kerning:12.0pt'><o:p></o:p></span></span></p>
    </td>
    <td width=54 valign=top style='width:40.5pt;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:0in 0in 0in 0in;height:20.55pt'>
    <p class=MsoNormalCxSpMiddle align=center style='margin-left:2.0pt;
    mso-add-space:auto;text-align:center;line-height:115%;tab-stops:20.45pt 30.95pt;
    vertical-align:bottom'><span style='font-size:10.0pt;line-height:115%;
    font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
    mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
    color:black;mso-font-kerning:12.0pt'>14.<o:p></o:p></span></p>
    </td>
    <td width=240 valign=top style='width:2.5in;border-top:none;border-left:
    none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
    mso-border-top-alt:solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;
    padding:.65pt .55pt 0in .55pt;height:20.55pt'>
    <p class=MsoNormalCxSpMiddle style='margin-left:4.0pt;mso-add-space:auto;
    line-height:115%;tab-stops:20.45pt 30.95pt;vertical-align:bottom'><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin;color:black;mso-font-kerning:12.0pt'>Review
    Covenant<o:p></o:p></span></p>
    </td>
    <td width=84 style='width:63.0pt;border-top:none;border-left:none;
    border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
    solid black 1.0pt;mso-border-left-alt:solid black 1.0pt;padding:0in 0in 0in 0in;
    height:20.55pt'>
    <p class=MsoNormalCxSpMiddle align=center style='text-align:center;
    line-height:115%;tab-stops:30.95pt;vertical-align:bottom'><span
    style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
    mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
    mso-bidi-theme-font:minor-latin'><?php echo $row['C_14']; ?><o:p></o:p></span></p>
    </td>
   </tr>
  </table>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes'>
  <td width=32 valign=top style='width:23.85pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph align=center style='margin-left:0in;text-align:
  center;line-height:115%'><b style='mso-bidi-font-weight:normal'><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>II.<o:p></o:p></span></b></p>
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
  minor-latin'>Total limit / bade bank lain<span style='mso-tab-count:1'></span>:<?php echo $row['limit_ex']; ?> / <?php echo $row['bade_bank_lain']; ?><o:p></o:p></span></p>
  <p class=MsoListParagraphCxSpMiddle style='margin-left:17.0pt;mso-add-space:
  auto;text-indent:-14.15pt;line-height:115%;mso-list:l0 level1 lfo4;
  tab-stops:132.8pt'><![if !supportLists]><span style='font-size:10.0pt;
  line-height:115%;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol'><span style='mso-list:Ignore'>·<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  class=SpellE><span style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Fasilitas Kredit</span></span><span style='font-size:10.0pt;
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
  style='mso-tab-count:1'></span>:<span class=SpellE><?php echo $row['BidangUsaha']; ?></span><o:p></o:p></span></p>
  <p class=MsoListParagraphCxSpMiddle style='margin-left:17.0pt;mso-add-space:
  auto;text-indent:-14.15pt;line-height:115%;mso-list:l0 level1 lfo4;
  tab-stops:132.8pt'><![if !supportLists]><span style='font-size:10.0pt;
  line-height:115%;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol'><span style='mso-list:Ignore'>·<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Group Usaha<span style='mso-tab-count:1'></span>:<?php echo $row['gusaha']; ?><o:p></o:p></span></p>
  <p class=MsoListParagraphCxSpMiddle style='margin-left:17.0pt;mso-add-space:
  auto;text-indent:-14.15pt;line-height:115%;mso-list:l0 level1 lfo4;
  tab-stops:132.8pt'><![if !supportLists]><span style='font-size:10.0pt;
  line-height:115%;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol'><span style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Rating<span style='mso-spacerun:yes'></span><span
  style='mso-tab-count:1'></span>:<?php echo $row['rating']; ?><o:p></o:p></span></p>
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
  style='mso-tab-count:1'></span>:<?php echo $row['ioutlook']; ?><o:p></o:p></span></p>
  <p class=MsoListParagraphCxSpMiddle style='margin-left:17.0pt;mso-add-space:
  auto;text-indent:-14.15pt;line-height:115%;mso-list:l0 level1 lfo4;
  tab-stops:132.8pt'><![if !supportLists]><span style='font-size:10.0pt;
  line-height:115%;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol'><span style='mso-list:Ignore'>·<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Portfolio Guideline<span style='mso-tab-count:1'></span>:<?php echo $row['PG']; ?><o:p></o:p></span></p>
  <p class=MsoListParagraphCxSpMiddle style='margin-left:17.0pt;mso-add-space:
  auto;text-indent:-14.15pt;line-height:115%;mso-list:l0 level1 lfo4;
  tab-stops:132.8pt'><![if !supportLists]><span style='font-size:10.0pt;
  line-height:115%;font-family:Symbol;mso-fareast-font-family:Symbol;
  mso-bidi-font-family:Symbol'><span style='mso-list:Ignore'>·<span
  style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
  style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
  mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
  minor-latin'>Historical <span class=SpellE>Pembayaran</span><span
  style='mso-tab-count:1'></span>:<?php echo $row['HP']; ?><o:p></o:p></span></p>
  <p class=MsoListParagraphCxSpLast style='margin-left:17.0pt;mso-add-space:
  auto;line-height:115%;tab-stops:132.8pt'><span style='font-size:10.0pt;
  line-height:115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoListParagraphCxSpFirst style='margin-top:0in;margin-right:0in;
margin-bottom:8.0pt;margin-left:14.2pt;mso-add-space:auto;line-height:105%'><b
style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;line-height:
105%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin-top:0in;margin-right:0in;
margin-bottom:8.0pt;margin-left:14.2pt;mso-add-space:auto;line-height:105%'><b
style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;line-height:
105%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:.25in;mso-add-space:
auto;text-indent:-13.5pt;line-height:105%;mso-list:l3 level1 lfo2'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;line-height:
105%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
mso-fareast-font-family:Calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>B.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp; </span></span></span></b><![endif]><span
class=SpellE><b style='mso-bidi-font-weight:normal'><span style='font-size:
10.0pt;line-height:105%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Hasil Review (HR)<o:p></o:p></span></b></p>

<table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0 width=0
 style='width:697.5pt;margin-left:9.9pt;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:
 0in 5.4pt 0in 5.4pt;mso-border-insideh:.5pt solid windowtext;mso-border-insidev:
 .5pt solid windowtext'>
 <?php
  $tipe = mysqli_query($con,"SELECT id_tipe, nama_tipe FROM tb_tipe");    

  if(mysqli_num_rows($tipe)>0) {
    $i = 1;
    while($row_tipe = mysqli_fetch_array($tipe)) {
 ?>

 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
  <td width=30 valign=top style='width:21.5pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoListParagraph style='margin-left:0in;line-height:115%'><b
  style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;line-height:
  115%;font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
  mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?= numberToRomanRepresentation($i++) ?>.<o:p></o:p></span></b></p>
  </td>
  

  <td width=900 valign=top style='width:676.0pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal style='line-height:115%'><span class=SpellE><b
    style='mso-bidi-font-weight:normal'><?= $row_tipe['nama_tipe'] ?></b></p>
    <?php
      $tema = mysqli_query($con,"SELECT id_tema, tema FROM tb_tema WHERE tipe_id=".$row_tipe['id_tipe']."");    
      if(mysqli_num_rows($tema)>0){
        while($row_tema = mysqli_fetch_array($tema)) {
    ?>

      <p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in;
      line-height:115%;mso-list:l2 level1 lfo6'><![if !supportLists]><span
      style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
      mso-ascii-theme-font:minor-latin;mso-fareast-font-family:Calibri;mso-fareast-theme-font:
      minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
      color:black'><span style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </span></span></span><![endif]><span class=SpellE><?= $row_tema['tema'] ?><o:p></o:p></span></p>

      <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
       style='margin-left:17.5pt;border-collapse:collapse;border:none;mso-border-alt:
       solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:0in 5.4pt 0in 5.4pt'>
        <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
          <td width=258 valign=top style='width:193.75pt;border:solid windowtext 1.0pt;
          mso-border-alt:solid windowtext .5pt;background:#D5DCE4;mso-background-themecolor:
          text2;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt'>
          <p class=MsoListParagraph align=center style='margin-left:0in;text-align:
          center'><span class=SpellE><b style='mso-bidi-font-weight:normal'><span
          style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
          minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
          color:black'>Hasil</span></b></span><b style='mso-bidi-font-weight:normal'><span
          style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
          minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
          color:black'> Review<o:p></o:p></span></b></p>
          </td>
          <td width=198 valign=top style='width:148.5pt;border:solid windowtext 1.0pt;
          border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
          solid windowtext .5pt;background:#D5DCE4;mso-background-themecolor:text2;
          mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt'>
          <p class=MsoListParagraph align=center style='margin-left:0in;text-align:
          center'><span class=SpellE><b style='mso-bidi-font-weight:normal'><span
          style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
          minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
          color:black'>Rekomendasi</span></b></span><b style='mso-bidi-font-weight:
          normal'><span style='font-size:10.0pt;font-family:"Calibri",sans-serif;
          mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
          mso-bidi-theme-font:minor-latin;color:black'><o:p></o:p></span></b></p>
          </td>
          <td width=168 valign=top style='width:1.75in;border:solid windowtext 1.0pt;
          border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
          solid windowtext .5pt;background:#D5DCE4;mso-background-themecolor:text2;
          mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt'>
          <p class=MsoListParagraph align=center style='margin-left:0in;text-align:
          center'><span class=SpellE><b style='mso-bidi-font-weight:normal'><span
          style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
          minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
          color:black'>TindakLanjut</span></b></span><b style='mso-bidi-font-weight:
          normal'><span style='font-size:10.0pt;font-family:"Calibri",sans-serif;
          mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
          mso-bidi-theme-font:minor-latin;color:black'><o:p></o:p></span></b></p>
          </td>
          <td width=126 valign=top style='width:94.5pt;border:solid windowtext 1.0pt;
          border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
          solid windowtext .5pt;background:#D5DCE4;mso-background-themecolor:text2;
          mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt'>
          <p class=MsoListParagraph align=center style='margin-left:0in;text-align:
          center'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
          font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
          mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
          color:black'>Time line<o:p></o:p></span></b></p>
          </td>
          <td width=102 valign=top style='width:76.5pt;border:solid windowtext 1.0pt;
          border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
          solid windowtext .5pt;background:#D5DCE4;mso-background-themecolor:text2;
          mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt'>
          <p class=MsoListParagraph align=center style='margin-left:0in;text-align:
          center'><b style='mso-bidi-font-weight:normal'><span style='font-size:10.0pt;
          font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;
          mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
          color:black'>Status<o:p></o:p></span></b></p>
          </td>
        </tr>
        <?php 
            $tema_2 = mysqli_query($con,"SELECT * FROM tb_parameter WHERE id_logbook=".$id_logbook." AND tema_id=".$row_tema['id_tema']."");
            $row_tema_2 = mysqli_fetch_array($tema_2);
        ?>
        <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes'>
          <td width=258 style='width:193.75pt;border:solid windowtext 1.0pt;
          border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:
          solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
          <p class=MsoNormalCxSpMiddle align=center style='text-align:center;
          line-height:115%;tab-stops:30.95pt;vertical-align:bottom'><span
          style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
          mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
          mso-bidi-theme-font:minor-latin'><?= !empty($row_tema_2['hasil_review']) ? $row_tema_2['hasil_review'] : '-' ?><o:p></o:p></span></p>
          </td>
          <td width=198 style='width:148.5pt;border-top:none;border-left:none;
          border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
          mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
          mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
          <p class=MsoNormalCxSpMiddle align=center style='text-align:center;
          line-height:115%;tab-stops:30.95pt;vertical-align:bottom'><span
          style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
          mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
          mso-bidi-theme-font:minor-latin'><?= !empty($row_tema_2['saran_perbaikan']) ? $row_tema_2['saran_perbaikan'] : '-' ?><o:p></o:p></span></p>
          </td>
          <td width=168 style='width:1.75in;border-top:none;border-left:none;
          border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
          mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
          mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
          <p class=MsoNormalCxSpMiddle align=center style='text-align:center;
          line-height:115%;tab-stops:30.95pt;vertical-align:bottom'><span
          style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
          mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
          mso-bidi-theme-font:minor-latin'><?= !empty($row_tema_2['tindak_lanjut']) ? $row_tema_2['tindak_lanjut'] : '-' ?><o:p></o:p></span></p>
          </td>
          <td width=126 style='width:94.5pt;border-top:none;border-left:none;
          border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
          mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
          mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
          <p class=MsoNormalCxSpMiddle align=center style='text-align:center;
          line-height:115%;tab-stops:30.95pt;vertical-align:bottom'><span
          style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
          mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
          mso-bidi-theme-font:minor-latin'><?= !empty($row_tema_2['target_date']) ? $row_tema_2['target_date'] : '-' ?><o:p></o:p></span></p>
          </td>
          <td width=102 style='width:76.5pt;border-top:none;border-left:none;
          border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
          mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
          mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt'>
          <p class=MsoNormalCxSpMiddle align=center style='text-align:center;
          line-height:115%;tab-stops:30.95pt;vertical-align:bottom'><span
          style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
          mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;
          mso-bidi-theme-font:minor-latin'><?= !empty($row_tema_2['status']) ? $row_tema_2['status'] : '-' ?><o:p></o:p></span></p>
          </td>
        </tr>
      </table>
      <p class=MsoListParagraph style='margin-left:17.5pt;line-height:115%'><span
      style='font-size:10.0pt;line-height:115%;font-family:"Calibri",sans-serif;
      mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
      minor-latin;color:black'><o:p>&nbsp;</o:p></span></p>

    <?php } } ?>
  </td>
 </tr>

<?php } } ?>
</table>

<p class=MsoNormal style='margin-left:22.5pt'><span style='font-size:10.0pt;
font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-left:22.5pt'><span style='font-size:10.0pt;
font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraph style='margin-left:.25in;text-indent:-.25in;
mso-list:l3 level1 lfo2'><![if !supportLists]><b style='mso-bidi-font-weight:
normal'><span style='font-size:10.0pt;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-fareast-font-family:Calibri;mso-fareast-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>D.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Dashboard<o:p></o:p></span></b></p>

<p class=MsoListParagraph style='margin-left:.25in'><b style='mso-bidi-font-weight:
normal'><span style='font-size:10.0pt;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:
minor-latin'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoListParagraph style='margin-left:27.0pt;text-indent:-.25in;
mso-list:l1 level4 lfo8'><![if !supportLists]><b style='mso-bidi-font-weight:
normal'><span style='font-size:10.0pt;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-fareast-font-family:Calibri;mso-fareast-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Parameter
<span class=SpellE>Hasil</span> <span style='color:#538135;mso-themecolor:accent6;
mso-themeshade:191'>Review <span class=SpellE>Kualitas</span> NAK</span> yang <span
class=SpellE>terdampak</span> :<o:p></o:p></span></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=0
 style='width:693.0pt;margin-left:.2in;border-collapse:collapse;border:none;
 mso-border-alt:solid windowtext .5pt;mso-yfti-tbllook:1184;mso-padding-alt:
 0in 5.4pt 0in 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:22.45pt'>
  <td width=179 nowrap style='width:134.05pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;background:#D5DCE4;mso-background-themecolor:
  text2;mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt;height:22.45pt'>
  <p class=MsoNormal align=center style='text-align:center'><span class=SpellE><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
  mso-bidi-font-weight:bold'>Struktur</span></span><span style='font-size:10.0pt;
  font-family:"Calibri",sans-serif;mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
  minor-latin;mso-bidi-theme-font:minor-latin;mso-bidi-font-weight:bold'><o:p></o:p></span></p>
  </td>
  <td width=186 nowrap style='width:139.75pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D5DCE4;mso-background-themecolor:text2;
  mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt;height:22.45pt'>
  <p class=MsoNormal align=center style='text-align:center'><span class=SpellE><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
  mso-bidi-font-weight:bold'>Asumsi &amp; Penentuan</span></span><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
  mso-bidi-font-weight:bold'> Limit<o:p></o:p></span></p>
  </td>
  <td width=186 nowrap style='width:139.7pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D5DCE4;mso-background-themecolor:text2;
  mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt;height:22.45pt'>
  <p class=MsoNormal align=center style='text-align:center'><span class=SpellE><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
  mso-bidi-font-weight:bold'>Analisa Risiko &amp; Mitigasi</span></span><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
  mso-bidi-font-weight:bold'><o:p></o:p></span></p>
  </td>
  <td width=186 style='width:139.75pt;border:solid windowtext 1.0pt;border-left:
  none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  background:#D5DCE4;mso-background-themecolor:text2;mso-background-themetint:
  51;padding:0in 5.4pt 0in 5.4pt;height:22.45pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
  mso-bidi-font-weight:bold'>Performance Lap Keu<o:p></o:p></span></p>
  </td>
  <td width=186 nowrap style='width:139.75pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;background:#D5DCE4;mso-background-themecolor:text2;
  mso-background-themetint:51;padding:0in 5.4pt 0in 5.4pt;height:22.45pt'>
  <p class=MsoNormal align=center style='text-align:center'><span class=SpellE><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>Kesesuaian ketentuan &amp; syarat</span></span><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin;
  mso-bidi-font-weight:bold'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes;height:25.6pt'>
  <td width=179 nowrap style='width:134.05pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0in 5.4pt 0in 5.4pt;height:25.6pt'>
  <p class=MsoNormal align=center style='text-align:center'><span class=SpellE><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['jumlah_struktur'] > 0 ? 'Yes' : 'No'; ?></span></span><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>
  <span class=SpellE></span><o:p></o:p></span></p>
  </td>
  <td width=186 nowrap style='width:139.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:25.6pt'>
  <p class=MsoNormal align=center style='text-align:center'><span class=SpellE><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['jumlah_asumsi'] > 0 ? 'Yes' : 'No'; ?></span></span><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>
  <span class=SpellE></span><o:p></o:p></span></p>
  </td>
  <td width=186 nowrap style='width:139.7pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:25.6pt'>
  <p class=MsoNormal align=center style='text-align:center'><span class=SpellE><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['jumlah_analisa'] > 0 ? 'Yes' : 'No'; ?></span></span><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>
  <span class=SpellE></span><o:p></o:p></span></p>
  </td>
  <td width=186 style='width:139.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:25.6pt'>
  <p class=MsoNormal align=center style='text-align:center'><span class=SpellE><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['jumlah_performance'] > 0 ? 'Yes' : 'No'; ?></span></span><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>
  <span class=SpellE></span><o:p></o:p></span></p>
  </td>
  <td width=186 nowrap style='width:139.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt;height:25.6pt'>
  <p class=MsoNormal align=center style='text-align:center'><span class=SpellE><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><?php echo $row['jumlah_kesesuaian'] > 0 ? 'Yes' : 'No'; ?></span></span><span
  style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
  minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'>
  <span class=SpellE></span><o:p></o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt;font-family:"Calibri",sans-serif;mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></b></p>

</div>

</body>
<?php
  }
} 
mysqli_close($con);
?>
</html>


