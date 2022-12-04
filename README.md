# Flowmeter

The benchmarking framework has several tests that can be run using the following command.

```bash
./vendor/bin/phpbench run tests/Benchmark --report=default
```

## Workflows

| Workflows | Completion Time (Seconds) |
| ------------- | ------------- |
| 10 | 1.250627333 |
| 100 | 4.279449333 |
| 250 | 8.032189667 |
| 500 | 13.178170667 |
| 1000 | 24.348379 |

![Workflows vs  Completion Time](https://user-images.githubusercontent.com/1130888/205469017-14ecbc0a-98e1-4235-ab11-480f0d485033.png)

## Signals

| Signals | Completion Time (Seconds) |
| ------------- | ------------- |
| 10 | 3.318205667 |
| 100 | 4.279449333 |
| 250 | 20.01228 |
| 500 | 88.73409967 |
| 1000 | 181.9567747 |

![Signals vs  Completion Time](https://user-images.githubusercontent.com/1130888/205469021-2dc229b9-ba4c-4bde-8ec2-b3ecc8877c36.png)

## Raw Data

| iter | benchmark   | subject       | set  | revs | mem_peak     | time_avg          | comp_z_value | comp_deviation |
| ---- | ----------- | ------------- | ---- | ---- | ------------ | ----------------- | ------------ | -------------- |
| 0    | SignalBench | benchWorkflow | 1    | 3    | 48,453,648b  | 4,212,547.667μs   | +1.35σ       | +67.66%        |
| 1    | SignalBench | benchWorkflow | 1    | 3    | 29,020,432b  | 1,212,294.000μs   | -1.03σ       | -51.75%        |
| 2    | SignalBench | benchWorkflow | 1    | 3    | 38,719,344b  | 2,112,941.333μs   | -0.32σ       | -15.91%        |
| 0    | SignalBench | benchWorkflow | 10   | 3    | 33,253,408b  | 3,573,721.000μs   | +1.20σ       | +3.62%         |
| 1    | SignalBench | benchWorkflow | 10   | 3    | 33,485,752b  | 3,318,205.667μs   | -1.25σ       | -3.79%         |
| 2    | SignalBench | benchWorkflow | 10   | 3    | 35,421,952b  | 3,454,478.667μs   | +0.05σ       | +0.16%         |
| 0    | SignalBench | benchWorkflow | 100  | 3    | 57,732,784b  | 21,379,052.000μs  | +1.36σ       | +3.78%         |
| 1    | SignalBench | benchWorkflow | 100  | 3    | 55,459,744b  | 20,412,474.000μs  | -0.33σ       | -0.92%         |
| 2    | SignalBench | benchWorkflow | 100  | 3    | 53,844,592b  | 20,012,280.000μs  | -1.03σ       | -2.86%         |
| 0    | SignalBench | benchWorkflow | 250  | 3    | 101,408,144b | 47,669,858.667μs  | -0.43σ       | -0.68%         |
| 1    | SignalBench | benchWorkflow | 250  | 3    | 96,100,688b  | 49,046,594.333μs  | +1.38σ       | +2.19%         |
| 2    | SignalBench | benchWorkflow | 250  | 3    | 97,471,904b  | 47,265,512.333μs  | -0.96σ       | -1.52%         |
| 0    | SignalBench | benchWorkflow | 500  | 3    | 173,657,008b | 100,942,997.000μs | +1.32σ       | +7.07%         |
| 1    | SignalBench | benchWorkflow | 500  | 3    | 163,788,688b | 93,151,875.333μs  | -0.22σ       | -1.19%         |
| 2    | SignalBench | benchWorkflow | 500  | 3    | 155,328,544b | 88,734,099.667μs  | -1.10σ       | -5.88%         |
| 0    | SignalBench | benchWorkflow | 1000 | 3    | 329,142,968b | 198,072,796.000μs | +1.25σ       | +4.33%         |
| 1    | SignalBench | benchWorkflow | 1000 | 3    | 326,404,232b | 189,528,148.000μs | -0.05σ       | -0.17%         |
| 2    | SignalBench | benchWorkflow | 1000 | 3    | 301,840,616b | 181,956,774.667μs | -1.20σ       | -4.16%         |
| 0    | SimpleBench | benchWorkflow | 1    | 3    | 43,703,560b  | 4,974,209.667μs   | +1.35σ       | +55.45%        |
| 1    | SimpleBench | benchWorkflow | 1    | 3    | 46,713,448b  | 2,811,907.667μs   | -0.29σ       | -12.12%        |
| 2    | SimpleBench | benchWorkflow | 1    | 3    | 36,738,376b  | 1,813,504.333μs   | -1.05σ       | -43.33%        |
| 0    | SimpleBench | benchWorkflow | 10   | 3    | 33,529,968b  | 1,586,343.667μs   | +1.27σ       | +12.42%        |
| 1    | SimpleBench | benchWorkflow | 10   | 3    | 30,472,592b  | 1,250,627.333μs   | -1.17σ       | -11.37%        |
| 2    | SimpleBench | benchWorkflow | 10   | 3    | 31,804,048b  | 1,396,425.000μs   | -0.11σ       | -1.04%         |
| 0    | SimpleBench | benchWorkflow | 100  | 3    | 39,608,160b  | 4,279,449.333μs   | -1.35σ       | -9.32%         |
| 1    | SimpleBench | benchWorkflow | 100  | 3    | 44,129,984b  | 4,817,810.000μs   | +0.30σ       | +2.09%         |
| 2    | SimpleBench | benchWorkflow | 100  | 3    | 46,132,160b  | 5,060,919.000μs   | +1.05σ       | +7.24%         |
| 0    | SimpleBench | benchWorkflow | 250  | 3    | 39,700,464b  | 8,121,084.000μs   | +0.86σ       | +0.42%         |
| 1    | SimpleBench | benchWorkflow | 250  | 3    | 41,292,496b  | 8,032,189.667μs   | -1.40σ       | -0.68%         |
| 2    | SimpleBench | benchWorkflow | 250  | 3    | 39,939,664b  | 8,108,998.000μs   | +0.55σ       | +0.27%         |
| 0    | SimpleBench | benchWorkflow | 500  | 3    | 41,361,280b  | 13,324,649.667μs  | -0.50σ       | -1.38%         |
| 1    | SimpleBench | benchWorkflow | 500  | 3    | 41,794,112b  | 14,030,584.333μs  | +1.40σ       | +3.84%         |
| 2    | SimpleBench | benchWorkflow | 500  | 3    | 40,544,736b  | 13,178,170.667μs  | -0.89σ       | -2.46%         |
| 0    | SimpleBench | benchWorkflow | 1000 | 3    | 46,698,464b  | 24,348,379.000μs  | -1.20σ       | -0.52%         |
| 1    | SimpleBench | benchWorkflow | 1000 | 3    | 47,887,616b  | 24,606,848.333μs  | +1.25σ       | +0.54%         |
| 2    | SimpleBench | benchWorkflow | 1000 | 3    | 48,505,856b  | 24,470,032.333μs  | -0.05σ       | -0.02%         |

(Hardware: 2.2 GHz Quad-Core Intel Core i7, 16 GB 1600 MHz DDR3)
