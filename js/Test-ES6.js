class A {
	constructor(name,age){
		this.name=name;
		this.age=age;
	}
	showName(){
		console.log(this.name)
	}
	showAge(){
		console.log(this.age)
	}
}

class B extends A {
	constructor(name,age,phone){
		super(name,age);
		this.phone=phone;
	}
	showPhone(){
		console.log(this.phone);
	}
}

class C extends B {
	constructor(name,age,phone,email){
		super(name,age,phone);
		this.email=email;
	}
	showEmail(){
		console.log(this.email);
	}
}

let b1=new B('lin',25,'18613021225');
b1.showPhone();
b1.showName();
b1.showAge();

let a1=new A('lin1',26);
a1.showName();
a1.showAge();

let c1 = new C('lin3',30,'12234','277715645@qq.com');

c1.showEmail();
c1.showPhone();
c1.showName();
c1.showAge();


class D extends C {
	constructor(name,age,phone,email,abc){
		super(name,age,phone,email,abc);
		this.abc=abc;
	}
	showAbc(){
		console.log(this.abc);
	}
}

let d1 = new D('a',24,'2321','asdf','sfsdfsd');

d1.showAbc();


class E extends A {
	constructor(name,age,other){
		super(name,age);
		this.other=other;
	}
	showOther(){
		console.log(this.other);
	}
}

let e1 = new E('e1',12,'other1');
e1.showName();
e1.showAge();
e1.showOther();
