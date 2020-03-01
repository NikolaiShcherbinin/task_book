<?
class User
{
	private $name;

	public function __constuct(string $name)
	{
		$this->name = $name;
	}
	public function getName(): string
    {
        return $this->name;
    }
}
?>