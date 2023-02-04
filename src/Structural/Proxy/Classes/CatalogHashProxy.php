<?php

namespace Artem\Patterns\Structural\Proxy\Classes;

class CatalogHashProxy implements ICatalog
{
    private array $productsHash;
    private CatalogDB $catalogDB;

    /**
     * @param CatalogDB $catalogDB
     */
    public function __construct(CatalogDB $catalogDB)
    {
        $this->catalogDB = $catalogDB;
        $this->productsHash = [];
    }


    public function getAll(): array
    {
        if (count($this->productsHash) == 0){
            print_r("getting all from db\n");
            $this->productsHash = $this->catalogDB->getAll();
        }
        print_r("All hash\n");
        return $this->productsHash;

    }

    public function getById(int $id): ?Product
    {
        try {
            $result = $this->productsHash[$id];
            print_r("getting by id from db\n");
            $result = $this->catalogDB->getById($id);
            if ($result!= null){
                $this->productsHash[$id] = $result;
            }
            print_r("id hash\n");
            return $result;
        }catch (\Exception){
            return null;
        }
    }
}