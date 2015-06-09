



/* Resets
--------------------------------------------------------------------------------*/
public function linkWrap2($string, $route, array $route_params = [], $prefilter = null)
{
    static $dom = null, $new_hyper = null;

    if(strlen($string) > 0)
    {
        if ($dom === null) {
            $dom = new \DOMDocument();
            $new_hyper = $dom->createElement('a');
        }

        $new_hyper->setAttribute('href', $this->generateUrl($route, $route_params).(isset($prefilter) ? '?'.htmlspecialchars($prefilter) : ''));
        $new_hyper->nodeValue = $string;

        return $dom->saveHTML($new_hyper);
    }

    return $string;
}
