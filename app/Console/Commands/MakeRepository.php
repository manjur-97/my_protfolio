<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeRepository extends Command
{
    protected $signature = 'make:repository {name}';
    protected $description = 'Create a new repository interface and implementation';

    public function __construct()
    {
        parent::__construct();
    }
    public function handle()
    {
        $name = $this->argument('name');

        $interfacePath = app_path("Repositories/Interfaces/{$name}RepositoryInterface.php");
        $repositoryPath = app_path("Repositories/{$name}Repository.php");

        // Create Interface
        $interfaceContent = "<?php

namespace App\Repositories\Interfaces;


interface {$name}RepositoryInterface
{
    public function all();
    public function find(\$id);
    public function create(array \$data);
    public function update(\$id, array \$data);
    public function delete(\$id);
    public function completed(\$id);
}";
        File::put($interfacePath, $interfaceContent);

        // Create Repository
        $repositoryContent = "<?php

namespace App\Repositories;

use App\Models\\$name;


class {$name}Repository implements {$name}RepositoryInterface
{
    public function all()
    {
        return {$name}::all();
    }

    public function find(\$id)
    {
        return {$name}::find(\$id);
    }

    public function create(array \$data)
    {
        return {$name}::create(\$data);
    }

    public function update(\$id, array \$data)
    {
        \$item = {$name}::find(\$id);
        return \$item ? \$item->update(\$data) : false;
    }

    public function delete(\$id)
    {
        \$item = {$name}::find(\$id);
        return \$item ? \$item->delete() : false;
    }

    public function completed(\$id)
    {
        \$item = {$name}::find(\$id);
        if (\$item) {
            \$item->completed = true; // Assuming you have a 'completed' column
            return \$item->save();
        }
        return false;
    }
}
";
        File::put($repositoryPath, $repositoryContent);

        $this->info("Repository interface and implementation for {$name} created successfully.");
    }
}
