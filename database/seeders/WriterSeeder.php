use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    public function run()
    {
        Writer::create([
            'name' => 'Raka Putra Wicaksono',
            'specialty' => 'Spesialis Interactive Multimedia',
            'image' => 'writers/raka.png' // Path gambar di public/writers
        ]);

        Writer::create([
            'name' => 'Bia Mecca Annisa',
            'specialty' => 'Spesialis Data Science',
            'image' => 'writers/bia.png'
        ]);

        Writer::create([
            'name' => 'Abi Firmansyah',
            'specialty' => 'Spesialis Network Security',
            'image' => 'writers/abi.png'
        ]);
    }
}
