<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $book = new Book();
        // $book->title = 'The Great Gatsby';
        // $book->author = 'F. Scott Fitzgerald';
        // $book->publication_year = "1925";
        // $book->description = "lorem ipsu";
        // $book->category = "Fantasy";
        // $book->language = "Español, Ingles";
        // $book->front_page = "1925";
        // $book->save();

        DB::table('books')->insert([
            [
                'title' => 'Harry Potter y la piedra filosofal',
                'autor' => 'J.K. Rowling',
                'publication_year' => '1997',
                'description' => 'Harry Potter, un niño huérfano que vive con sus crueles tíos, descubre en su undécimo cumpleaños que es un mago. Es invitado a asistir al Colegio Hogwarts de Magia y Hechicería, donde hace amigos y enemigos, y se entera de su pasado. Junto con sus amigos Ron y Hermione, Harry investiga el misterio de la Piedra Filosofal, un objeto mágico que otorga la inmortalidad, y se enfrenta al oscuro mago, Lord Voldemort, que busca recuperar su poder.',
                'category' => 'Fantasía',
                'language' => 'Español',
                'front_page' => 'HarryPotterPiedraFilosofal.jpg',
                'costo' => '$22,00',
                'pdf' => 'Rowling, J. K. -  Harry Potter y la piedra filosofal.pdf',
            ],
            [
                'title' => 'Harry Potter y la cámara secreta',
                'autor' => 'J.K. Rowling',
                'publication_year' => '1998',
                'description' => 'En su segundo año en Hogwarts, Harry se enfrenta a una serie de ataques misteriosos que ponen en peligro a los estudiantes. Al enterarse de la existencia de la Cámara Secreta, un lugar oculto dentro de la escuela, Harry, Ron y Hermione deben descubrir quién está detrás de los ataques y cómo detenerlo, mientras exploran la historia de Hogwarts y el legado de Salazar Slytherin.',
                'category' => 'Fantasía',
                'language' => 'Español',
                'front_page' => 'HarryPotterYLaCamaraDeLosSecretos.jpg',
                'costo' => '$25,00',
                'pdf' => 'Rowling, J. K. - Harry Potter y la camara secreta.pdf',
            ],
            [
                'title' => 'Harry Potter y el prisionero de Azkaban',
                'autor' => 'J.K. Rowling',
                'publication_year' => '1999',
                'description' => 'Harry regresa a Hogwarts para su tercer año, pero se entera de que un peligroso prisionero, Sirius Black, ha escapado de la prisión mágica de Azkaban. A medida que se desarrollan los eventos, Harry descubre la verdad sobre su familia y su conexión con Sirius. Además, debe enfrentarse a los Dementores, criaturas que guardan la prisión, y aprender a conjurar un Patronus para protegerse.',
                'category' => 'Fantasía',
                'language' => 'Español',
                'front_page' => 'HarryPotterPrisioneroAzkaban.jpg',
                'costo' => '$20,00',
                'pdf' => 'Rowling, J.K. - Harry Potter y el prisionero de Azkaban.pdf',
            ],
            [
                'title' => 'Harry Potter y el cáliz de fuego',
                'author' => 'J.K. Rowling',
                'publication_year' => '2000',
                'description' => 'Durante su cuarto año en Hogwarts, Harry es inesperadamente inscrito en el Toreno de los Tres Magos, un peligroso torneo entre escuelas de magia. A medida que enfrenta desafíos mortales, descubre una conspiración que involucra el regreso de Voldemort. La historia culmina en un enfrentamiento dramático que cambia el curso de su vida y la de sus amigos para siempre.',
                'category' => 'Fantasía',
                'language' => 'Español',
                'front_page' => 'HarryPotterCalizDeFuego.jpg',
                'costo' => '$22,00',
                'pdf' => 'Rowling, J.K. -  Harry Potter y el caliz de fuego.pdf',
            ],
            [
                'title' => 'Harry Potter y la orden del Fénix',
                'autor' => 'J.K. Rowling',
                'publication_year' => '2003',
                'description' => ' En su quinto año en Hogwarts, Harry se enfrenta a la negación de la comunidad mágica sobre el retorno de Voldemort. Con la ayuda de la Orden del Fénix, un grupo secreto que lucha contra el mal, Harry y sus amigos deben prepararse para la batalla que se avecina. A medida que Harry lidia con la presión y la soledad, también se enfrenta a nuevos desafíos en Hogwarts, incluyendo a la opresiva nueva profesora, Dolores Umbridge.',
                'category' => 'Fantasía',
                'language' => 'Español',
                'front_page' => 'HarryPotterOrdenFenix.jpg',
                'costo' => '$22,00',
                'pdf' => 'Rowling, J.K. - Harry Potter y la Orden del Fenix.pdf',
            ],
        ]);
    }
}
