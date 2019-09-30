import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { TransactionRetraitComponent } from './transaction-retrait.component';

describe('TransactionRetraitComponent', () => {
  let component: TransactionRetraitComponent;
  let fixture: ComponentFixture<TransactionRetraitComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ TransactionRetraitComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(TransactionRetraitComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
