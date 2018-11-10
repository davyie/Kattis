public class Cetvrta {
		
		// Private class
		private class Point{
				int x;
				int y;

				public Point(int x, int y) {
					this.x = x;
					this.y = y;
				}
		}	

		// Fields
		static Point v1, v2, v3, v4;
		static Kattio io;

		// Constructor 
		public Cetvrta() {
				io = new Kattio(System.in, System.out);
				v1 = new Point( io.getInt(), io.getInt() ); 
				v2 = new Point( io.getInt(), io.getInt() ); 
				v3 = new Point( io.getInt(), io.getInt() ); 
				v4 = new Point( 0, 0 ); 
		}

		static void calculate() {
				// First case 
				if ( v1.y == v2.y && v2.x == v3.x ) {
						v4.x = v1.x;
						v4.y = v3.y;
				} else if ( v1.y == v3.y && v2.x == v3.x ) {
						v4.x = v1.x;
						v4.y = v2.y;
				} else if ( v1.x == v2.x && v2.y == v3.y ) {
						v4.x = v3.x;
						v4.y = v1.y;
				} else if ( v1.y == v2.y && v1.x == v3.x ) {
						v4.x = v2.x;
						v4.y = v4.y;
				} else if ( v1.x == v2.x && v1.y == v3.y ) {
						v4.x = v3.x;
						v4.y = v2.y;
				}	
		}

		static void getPoint() {
				io.println( v4.x + " " + v4.y );
				io.flush();
		}
	
		// Main method
		public static void main( String[] args ) {
				Cetvrta c = new Cetvrta();	
				c.calculate();
				c.getPoint();
				io.close();
		}
}
