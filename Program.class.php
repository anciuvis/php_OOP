<?php

class Program {

	public function run(SvgRenderer $renderer) { // class injection
		echo "Program is running...<br>";

		$rectangle = new Square(); // susikuria kintamasis $this tam objekte iskart kai ivyksta instancija
		$rectangle->location->set(0, 0);
		$rectangle->setSize(100);
		$rectangle->setColor('0, 255, 255');
		$rectangle->setAlpha(0.5);
		$rectangle->draw($renderer);
		// print_R($rectangle1);
		$rectangle1 = new Square();
		$rectangle1->location->set(100, 100);
		$rectangle1->setSize(100);
		$rectangle1->setColor('255, 0, 255');
		$rectangle1->setAlpha(0.5);
		$rectangle1->draw($renderer);

		$rectangle2 = new Square();
		$rectangle2->location->set(200, 0);
		$rectangle2->setSize(100);
		$rectangle2->setColor('0, 255, 255');
		$rectangle2->setAlpha(0.5);
		$rectangle2->draw($renderer);
		// $renderer->drawRect(0, 0, 100, 100, '0, 255, 255', 0.5);
		// $renderer->drawRect(100, 100, 100, 100, '255, 0, 255', 0.5);
		// - galime kiek norime kartu iskvieti ta piesimo engin'a, nupies keleta rectanglu

		$rectangle3 = new Square();
		$rectangle3->location->set(300, 100);
		$rectangle3->setSize(100);
		$rectangle3->setColor('255, 0, 255');
		$rectangle3->setAlpha(0.5);
		$rectangle3->draw($renderer);

		$rectangle4 = new Square();
		$rectangle4->location->set(400, 0);
		$rectangle4->setSize(100);
		$rectangle4->setColor('0, 255, 255');
		$rectangle4->setAlpha(0.5);
		$rectangle4->draw($renderer);

		$rectangle5 = new Square();
		$rectangle5->location->set(250, 200);
		$rectangle5->setSize(100);
		$rectangle5->setColor('153, 153, 0');
		$rectangle5->setAlpha(0.5);
		$rectangle5->setRotate(45, 250, 200);
		$rectangle5->draw($renderer);

		$circle = new Circle();
		$circle->location->set(250, 100);
		$circle->setRadius(30);
		$circle->setColor('153, 153, 0');
		$circle->setAlpha(0.5);
		$circle->draw($renderer);
		// $renderer->drawCircle(150, 100, 30, '153, 153, 0', 0.5);

		$ellipse = new Ellipse ();
		$ellipse->location->set(250, 200);
		$ellipse->setRadius(60, 30);
		$ellipse->setColor('0, 153, 153');
		$ellipse->setAlpha(0.5);
		$ellipse->draw($renderer);

		$ellipse1 = new Ellipse ();
		$ellipse1->location->set(180, 40);
		$ellipse1->setRadius(30, 20);
		$ellipse1->setColor('0, 0, 153');
		$ellipse1->setAlpha(0.5);
		$ellipse1->setRotate(15, 180, 40);
		$ellipse1->draw($renderer);

		$ellipse2 = new Ellipse ();
		$ellipse2->location->set(320, 40);
		$ellipse2->setRadius(30, 20);
		$ellipse2->setColor('0, 0, 153');
		$ellipse2->setAlpha(0.5);
		$ellipse2->setRotate(-15, 320, 40);
		$ellipse2->draw($renderer);

		// $circle1 = new Circle ();
		// $circle1->draw($renderer);

		$polygon = new Triangle ();
		$polygon->location->set(120, 50);
		$polygon->setPoints(220, 150, 150, 200);
		$polygon->setColor('153, 153, 153');
		$polygon->setAlpha(0.5);
		// $polygon->setTranslate(0, 0);
		// $polygon->setRotate(0, 0, 0);
		$polygon->draw($renderer);

		$polygon1 = new Triangle ();
		$polygon1->location->set(380, 50);
		$polygon1->setPoints(350, 200, 280, 150);
		$polygon1->setColor('153, 153, 153');
		$polygon1->setAlpha(0.5);
		$polygon1->draw($renderer);

		$renderer->run();
	}
}
?>
