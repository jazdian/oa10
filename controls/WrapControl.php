<?php


/**
 * Description of WrapControl
 *
 * @author gesfor.rgonzalez
 */
class WrapControl
{
   
   private $htmlcode = '';

   public function SetHtmltoCode($htmlcode_)
   {
      if ($htmlcode_ !== '')
      {
	 $this->htmlcode = $htmlcode_; 
      }
   } 
      
   public function WrapControl($search, $replace)
   {
      if ($html_ !== '')
      {
	 str_replace($search, $replace, $this->htmlcode);
      }
      return $this->htmlcode;
   }
   //put your code here
}
