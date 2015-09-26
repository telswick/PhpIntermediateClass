<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 9/23/2015
 * Time: 10:41 PM
 */


   /**
    * This function takes a string representing a large number,
    *   increments it by 1, and returns the result
    *
    * @param array $bigNumString A string representation of a large number
    *
    * @return array $bigNumString large number string after increment
    */
   function IncrementBigNum($bigNumString)
   {
       //Get the last index of the string
       $lastIndex = strlen($bigNumString) - 1;

       //Simply increment the last number if it is not nine
       if($bigNumString[$lastIndex] != 9)
       {
           //Convert last number to an integer to allow increment
           $numberToIncrement = CharToInt($bigNumString[$lastIndex]);
           ++$numberToIncrement;

           //Revert integer to a char and replace in string/array
           $bigNumString[$lastIndex] = IntToChar($numberToIncrement);
       }

       //Check to see if every number in the large number string is nine
       else if(CheckForAllNines($bigNumString))
       {
           //Set all numbers in large number string to zero
           for($r = 0; $r < ($lastIndex + 1); $r++)
           {
               $bigNumString[$r] = "0";
           }

           //Prepend a one to large number string (eg. "999" becomes "1000")
           $bigNumString ="1".$bigNumString;
       }

       else
       {
           //Find the first non-nine number in the large string
           $indexFirstNonNine = GetFirstNonNine($bigNumString);

           //Increment the number
           $numberToIncrement = CharToInt($bigNumString[$indexFirstNonNine]);
           ++$numberToIncrement;

           //Replace the number incremented number in the large number string
           $bigNumString[$indexFirstNonNine] = IntToChar($numberToIncrement);

           //Set everything left of incremented number to zero
           for($d = ($indexFirstNonNine + 1); $d < ($lastIndex + 1); $d++)
           {
               $bigNumString[$d] = "0";
           }
       }

       //Return large number string after performing arithmetic
       return $bigNumString;
   }

   //
   /**
    * Gets the index of the first non-nine value from the left in the number
    *
    * @param array $bigNumString A string representation of a large number
    *
    * @return array $i The index of the first non-nine value from the left
    */
   function GetFirstNonNine($bigNumString)
   {
       $lastIndex = strlen($bigNumString) - 1;

       //Traverse large number string backwards to until a non-nine number is found
       for($i = $lastIndex; $i >= 0; $i--)
       {
           if($bigNumString[$i] != 9)
           {
               //Return index of first non-nine number
               return $i;
           }
       }
   }

 /**
  * Checks to see if the large number string contains only 9s
  *
  * @param array $bigNumString A string representation of a large number
  *
  * @return boolean true|false Returns false if the large number contains a non-nine value
  *   otherwise true
  */
  function CheckForAllNines($bigNumString)
  {
      $lastIndex = strlen($bigNumString) - 1;

      /*
       Traverse large number string backwards (you could go either way),
        returning false if a non-nine number is found
      */
      for($q = $lastIndex; $q >= 0; $q--)
      {
          if($bigNumString[$q] != 9)
          {
              return false;
          }
      }
      //if we get here, there was not a non-nine number, so return true
      return true;
  }

  /**
   * Converts a character to an integer
   *
   * @param char $someChar Character representation of a number
   *
   * @return int $someChar Integer representation of $someChar
   */
   function CharToInt($someChar)
   {
       return ((int)$someChar);
   }
  /**
   * Converts an integer to a character
   *
   * @param int $someInt  Integer to be converted to a character
   *
   * @return char $someInt Character representation of $someInt
   */
   function IntToChar($someInt)
   {
       return strval($someInt);
   }

   echo "Result (Single Nine): ".IncrementBigNum("129129")."\n";
   echo "Result (Consecutive Nines): ".IncrementBigNum("1299")."\n";
   echo "Result (No Nines): ".IncrementBigNum("122")."\n";
   echo "Result (All Nines): ".IncrementBigNum("999")."\n";
?>
