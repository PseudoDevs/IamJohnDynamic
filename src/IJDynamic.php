<?php 

namespace iamjohndev;

class IJDynamic {
    private $questions;
  
  public function __construct($questions) {
    $this->questions = $questions;
  }
  
  public function generateQuestions() {
    $html = '';
    
    foreach ($this->questions as $question) {
      $html .= '<p>' . $question['question'] . '</p>';
      
      foreach ($question['options'] as $option) {
        $html .= '<input type="radio" name="' . $question['name'] . '" value="' . $option['value'] . '"> ' . $option['label'] . '<br>';
      }
      
      $html .= '<br>';
    }
    
    return $html;
  }
  
  public function calculateTotalScore() {
    $totalScore = 0;
    
    foreach ($this->questions as $question) {
      if (isset($_POST[$question['name']])) {
        $selectedScore = $_POST[$question['name']];
        
        // Validate the selected score if needed
        
        foreach ($question['options'] as $option) {
          if ($option['value'] == $selectedScore) {
            $totalScore += $option['value'];
          }
        }
      }
    }
    
    return $totalScore;
  }
  }
  