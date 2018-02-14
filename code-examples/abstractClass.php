abstract class AbstractProductImporter implements ItemImporter{

	private $itemRepository;

    public function __construct(ItemRepository $itemRepository){
        $this->itemRepository = $itemRepository;
    }

    abstract protected function isItemInStock($feedNode): bool;

    private function fetchItemByUrl(string $url): Item {
        $item = $this->itemRepository->findOneBy($url);
        if($item !== null) {
            return $item;
        }

        $item = new Item();
        $item->setUrl($url);
        $item->setAvailable(true);

        return $item;
    }
}