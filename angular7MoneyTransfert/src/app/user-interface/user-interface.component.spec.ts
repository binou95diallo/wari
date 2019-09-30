<<<<<<< HEAD
import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { UserInterfaceComponent } from './user-interface.component';

describe('UserInterfaceComponent', () => {
  let component: UserInterfaceComponent;
  let fixture: ComponentFixture<UserInterfaceComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ UserInterfaceComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(UserInterfaceComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
=======
import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { UserInterfaceComponent } from './user-interface.component';

describe('UserInterfaceComponent', () => {
  let component: UserInterfaceComponent;
  let fixture: ComponentFixture<UserInterfaceComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ UserInterfaceComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(UserInterfaceComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
