<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\HtmlString;
use Illuminate\View\Component;

class alert extends Component
{
  protected $types = [
    "info",
    "danger",
    "success"
  ];

  /**
   * Method __construct
   *
   * @param $type [type of the alert box]
   * @param $message [message for the alert box]
   *
   * @return void
   */
  public function __construct(public string $type)
  {
    //
  }

  /**
   * Method validType
   *
   * @return string
   */
  public function validType(): string
  {
    return in_array($this->type, $this->types) ? $this->type : "info";
  }

  /**
   * Method link
   *
   * @param $text $text [the text for link show]
   * @param $link $link [exact link to go]
   *
   * @return HtmlString
   */
  public function link($text, $link = '#'): HtmlString
  {
    return new HtmlString('<a class="alert-link" href="' . $link . '" >' . $text . '</a>');
  }

  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string
  {
    return view('components.alert');
  }
}